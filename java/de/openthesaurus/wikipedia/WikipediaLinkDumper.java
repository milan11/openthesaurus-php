/* WikipediaLinkDumper
 * Copyright (C) 2007 Daniel Naber (http://www.danielnaber.de)
 * 
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301
 * USA
 */
package de.openthesaurus.wikipedia;

import java.io.FileInputStream;
import java.io.IOException;
import java.io.InputStream;
import java.util.ArrayList;
import java.util.List;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

import javax.xml.parsers.ParserConfigurationException;
import javax.xml.parsers.SAXParser;
import javax.xml.parsers.SAXParserFactory;

import org.xml.sax.Attributes;
import org.xml.sax.SAXException;
import org.xml.sax.SAXParseException;
import org.xml.sax.helpers.DefaultHandler;

/**
 * Loads links from a Wikipedia XML dump and builds an SQL dump (for MySQL).
 * Contains some filtering that's specific the German.
 * 
 * Get the Wikipedia XML dump from http://download.wikimedia.org/backup-index.html,
 * the filename is something like "XXwiki-YYYYMMDD-pages-articles.xml.bz2",
 * whereas XX is the language code (de, en, fr, etc).
 * 
 * How to use this (starting from the openthesaurus directory):
 * -Change to the "java" directory
 *  cd java
 * -unpack the Wikipedia XML dump here:
 *  bunzip XXwiki-YYYYMMDD-pages-meta-current.xml.bz2
 * -Only if you made changes to this source code: compile the link 
 *  extraction Java program (requires the Java Development Kit):
 *  javac de/openthesaurus/wikipedia/WikipediaLinkDumper.java
 * -Call the program:
 *  java -cp . de.openthesaurus.wikipedia.WikipediaLinkDumper <wiki.xml> >result.sql
 * -Import the result into the OpenThesaurus database:
 *  mysql thesaurus <result.sql 
 * 
 * @author Daniel Naber
 */
public class WikipediaLinkDumper {
  
  private WikipediaLinkDumper() {
  }

  private void run(final InputStream is) throws IOException, SAXException, ParserConfigurationException {
    final PatternRuleHandler handler = new PatternRuleHandler();
    final SAXParserFactory factory = SAXParserFactory.newInstance();
    final SAXParser saxParser = factory.newSAXParser();
    saxParser.getXMLReader().setFeature("http://apache.org/xml/features/nonvalidating/load-external-dtd",
        false);  
    System.out.println("SET NAMES utf8;");
    System.out.println("DROP TABLE IF EXISTS wikipedia_pages;");
    System.out.println("CREATE TABLE `wikipedia_pages` ( " + 
        "`page_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY , " + 
        "`title` VARCHAR( 100 ) NOT NULL " + 
        ") ENGINE = MYISAM;");
    System.out.println("DROP TABLE IF EXISTS wikipedia_links;");
    System.out.println("CREATE TABLE `wikipedia_links` ( " + 
        " `link_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY , " + 
        " `page_id` INT NOT NULL , " + 
        " `link` VARCHAR( 100 ) NOT NULL " + 
        ") ENGINE = MYISAM;");
    saxParser.parse(is, handler);
    System.out.println("ALTER TABLE `wikipedia_pages` ADD INDEX ( `page_id` );");
    System.out.println("ALTER TABLE `wikipedia_pages` ADD INDEX ( `title` );");
    System.out.println("ALTER TABLE `wikipedia_links` ADD INDEX ( `page_id` );");
  }

  /** Testing only.
   */ 
  public static void main(final String[] args) throws Exception {
    if (args.length != 1) {
      System.out.println("Usage: WikipediaLinkDumper <xmldump>");
      System.exit(1);
    }
    WikipediaLinkDumper prg = new WikipediaLinkDumper();
    prg.run(new FileInputStream(args[0]));
  }

  class PatternRuleHandler extends DefaultHandler {
    
    private final static int UNDEF = 0;
    private final static int TITLE = 1;
    private final static int TEXT = 2;
    private int position = UNDEF;

    private final static int MAX_LINKS_PER_PAGE = 15;

    private StringBuilder title = new StringBuilder();
    private StringBuilder text = new StringBuilder();
    
    private int pageCount = 0;

    private final Pattern NUM_PATTERN = Pattern.compile("\\d+");

    public void warning (final SAXParseException e) throws SAXException {
      throw e;
    }
    
    public void error (final SAXParseException e) throws SAXException {
      throw e;
    }

    @SuppressWarnings("unused")
    public void startElement(String namespaceURI, String lName, 
        String qName, Attributes attrs) {
      if (qName.equals("title")) {
        position = TITLE;
      } else if (qName.equals("text")) {
        position = TEXT;
      } else {
        position = UNDEF;
      }
    }
     
    @SuppressWarnings("unused")
    public void endElement(String namespaceURI, String sName, String qName) {
      if (qName.equals("title")) {
        pageCount++;
        // test:
        //if (pageCount > 5000)
        //  System.exit(1);
        System.out.println("INSERT INTO wikipedia_pages VALUES ("+pageCount+", '" +
            escape(title.toString().trim())+ "');");
        title = new StringBuilder();
      } else if (qName.equals("text")) {
        List<String> links = extractLinks(text.toString());
        for (String link : links) {
          System.out.println("INSERT INTO wikipedia_links (page_id, link) VALUES (" +pageCount+ ", '" 
              +escape(link)+ "');");
        }
        text = new StringBuilder();
      } else {
        position = UNDEF;
      }
    }
    
    private String escape(String str) {
      return str.replace("'", "''").replace("\\", "");
    }

    public void characters(final char[] buf, final int offset, final int len) {
      final String s = new String(buf, offset, len);
      if (position == TITLE) {
        title.append(s);
      } else if (position == TEXT) {
        text.append(s);
      }
    }

    private List<String> extractLinks(String wikiText) {
      int pos = 0;
      List<String> links = new ArrayList<String>();
      while (true) {
        pos = wikiText.indexOf("[[", pos);
        if (pos == -1) {
          break;
        }
        int endPos = wikiText.indexOf("]]", pos+1);
        if (endPos == -1) {
          break;
        }
        String linkText = wikiText.substring(pos+2, endPos);
        pos = endPos;
        String[] parts = linkText.split("\\|");
        if (parts.length == 2) {
          linkText = parts[0];
        }
        Matcher numMatcher = NUM_PATTERN.matcher(linkText);
        if (numMatcher.matches()) {   // filter numbers (e.g. years like "1972")
          continue;
        }
        if (linkText.startsWith("Bild:") || linkText.startsWith("Kategorie:") || linkText.startsWith("Image:")) {
          continue;
        }
        if (linkText.startsWith("#")) {    // often not useful
          continue;
        }
        parts = linkText.split("#");    // e.g. Flugzeug#Flugsteuerung -> Flugzeug
        if (parts.length == 2) {
          linkText = parts[0];
        }
        linkText = linkText.replace('_', ' ');
        
        if (linkText.indexOf(':') != -1) { // filter language links ("en:" etc)) {
          continue;
        }
        links.add(linkText);
        if (links.size() >= MAX_LINKS_PER_PAGE) {
          break;
        }
        //System.err.println(pos + " " + endPos + ": '" + linkText + "'");
      }
      return links;
    }
    
  }

}

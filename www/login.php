<?php
include("./include/phplib/prepend.php3");
page_open(array("sess" => "Thesaurus_Session", "auth" => "Thesaurus_Auth"));
$auth->login_if($auth->auth["uid"] == "nobody");
page_close();
if( BASE_URL == "" ) {
	header("Location: /");
} else {
	header("Location: ".BASE_URL);
}
?>

<?php
jsLogs("logged in successfully");
require_once($php_root . "components/html/header.php");
require_once($php_root . "components/main_nav.php");
echo "<main>";
	echo "<a href='" . $htp_root . "new'><button class='fab'>+</button></a>";
echo"</main>";
require_once($php_root . "components/html/footer.php");

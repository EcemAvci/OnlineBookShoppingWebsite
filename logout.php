<?php
session_start();
ob_start();
session_destroy();
echo "<center>Closed session. You are redirected to the home page....</center>";
header("Refresh: 1; url=http://ecepilli.com/onlinebookshopping/");
ob_end_flush();
?>
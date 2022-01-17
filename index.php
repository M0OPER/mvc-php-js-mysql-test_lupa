<?php
include '/config/config.php';
// Check DEBUG_MODE (config)
if (DEBUG_MODE) {
  // Activate PHP debugging
  ini_set('display_errors', 'On');
  error_reporting(E_ALL);
}
require_once("db/db.php");
require_once("controllers/blogs_ctl.php");

?>

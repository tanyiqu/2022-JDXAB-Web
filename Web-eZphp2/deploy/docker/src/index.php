<?php
error_reporting(0);
if ($_GET['source'] == 1) {
  highlight_file(__FILE__);
  die();
}
$query = urldecode($_SERVER["QUERY_STRING"]);

if (strpos($query, '_') !== False)
  die("error");

if (isset($_GET['name_nnnn'])) {
  $name = "Upld0d/" . $_GET['name_nnnn'];
  $text = $_POST['file_c'];

  if (strlen($text) > 18)
    die("error");
  if (preg_match('/<\?ph.|flag/i', $text) !== 0)
    die("error");
  if (file_put_contents($name, $text))
    die("ok");
}
?>
<!--index.php?source=1-->

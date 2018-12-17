<?php
include 'core/common-values.php';

$current_file = explode('/',$_SERVER['SCRIPT_NAME']);
$current_file = end($current_file);

$this_file = explode('/',$_SERVER['SCRIPT_NAME']);
$this_file = end($this_file);
$this_file = preg_replace('/\d/','', $current_file);
$this_file = explode('.' , $this_file);
$this_file = current($this_file);

?>
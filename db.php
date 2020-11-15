<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'web_1'
) or die(mysqli_erro($mysqli));

?>
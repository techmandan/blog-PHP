<?
session_start();
include('names.php');
$mysqli = new mysqli($database['location'], $database['username'], $database['password'], $database['name']);

?>

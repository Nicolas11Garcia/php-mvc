<?php
require_once('db/db.php');

$database = new Database();
$conn = $database->connect();

$database->disconnect();
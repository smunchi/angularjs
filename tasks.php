<?php
require_once 'config.php';
$query="SELECT * FROM task";
$result = $con->query($query);
$arr = array();

while($row = $result->fetch_array()) {
$arr[] = $row;
}
echo $json_response = json_encode($arr);
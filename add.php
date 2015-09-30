<?php
require_once 'config.php';

if(isset($_GET['task'])){
   $task = $_GET['task'];
}
$status = "0";
$query="INSERT INTO task(task,status) VALUES ('$task', '$status')";
$result = $con->query($query) or die($con->error);
$result = $con->affected_rows;
echo $json_response = json_encode($result);
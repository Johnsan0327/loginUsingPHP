<?php
define('DB_SERVER',"localhost");
define('DB_USERNAME',"root");
define('DB_PASSWORD'," ");
define('DB_NAME',"Exam");

$link=mysqli_get_links_stats();
$_SESSION['mysql']=$link;
if($link===false){
    die("ERROR: Couldnt connect ".mysqli_connect_error());
}

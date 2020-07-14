<?php

$dbhost = "localhost";
$dbname = "shop";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

//$mysql='UPDATE';
//получение всех статей
function get_sales_hit_first(){
    global $db;
    $sales_hit =$db->query("SELECT * FROM sales_hit WHERE id='1'");
    return $sales_hit;
}
function get_sales_hit_second(){
    global $db;
    $sales_hit =$db->query("SELECT * FROM sales_hit WHERE id='2'");
    return $sales_hit;
}
function get_sales_hit_third(){
    global $db;
    $sales_hit =$db->query("SELECT * FROM sales_hit WHERE id='3'");
    return $sales_hit;
}
function get_sales_hit_fourh(){
    global $db;
    $sales_hit =$db->query("SELECT * FROM sales_hit WHERE id='4'");
    return $sales_hit;
}

//function insert_subscriber($email){
    //$email = mysqli_real_escape_string($email);
    
//}
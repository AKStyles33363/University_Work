<?php
 
$link= mysqli_connect('localhost','root','','korsejob');

if(mysqli_connect_errno())
{
    echo 'Ошибка БД('.mysqli_connect_errno().'):'.mysqli_connect_error() ;
    exit();
}
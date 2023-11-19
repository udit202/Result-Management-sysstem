<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "jiet";

// Create connection
$conn= mysqli_connect($servername, $username, $password, $database);
// create DATABASE
// $sql = "CREATE DATABASE JIET";
// Create Employees table 
//  $sql = "CREATE TABLE `jiet`.`employes` (`id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `mobile` VARCHAR(45) NOT NULL , `email` VARCHAR(50) NOT NULL , `password` VARCHAR(50) NOT NULL , `del` VARCHAR(6) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`mobile`)) ENGINE = InnoDB";
// Create request table
//  $sql = "CREATE TABLE `jiet`.`request` (`id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `mobile` VARCHAR(45) NOT NULL , `email` VARCHAR(50) NOT NULL , `password` VARCHAR(50) NOT NULL , `del` VARCHAR(6) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`mobile`)) ENGINE = InnoDB";
// $result = mysqli_query($conn,$sql);
// Check connection
// if ($result) {
//     echo "workong";
  
// }
// else{
//     echo "not connected";
// }
// echo "for this uncomment the sql";
?>
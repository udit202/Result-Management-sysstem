<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "jiet";
// Create connection
// $conn= mysqli_connect($servername, $username, $password);
$conn= mysqli_connect($servername, $username, $password, $database);
// create DATABASE
// $sql = "CREATE DATABASE JIET";
// Create Employees table 
//  $sql = "CREATE TABLE `jiet`.`employes` (`id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `mobile` VARCHAR(45) NOT NULL , `email` VARCHAR(50) NOT NULL , `password` VARCHAR(50) NOT NULL , `del` VARCHAR(6) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`mobile`)) ENGINE = InnoDB";
// // Create request table
//  $sql = "CREATE TABLE `jiet`.`request` (`id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `mobile` VARCHAR(45) NOT NULL , `email` VARCHAR(50) NOT NULL , `password` VARCHAR(50) NOT NULL , `del` VARCHAR(6) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`mobile`)) ENGINE = InnoDB";
//  $sql = "CREATE TABLE `jiet`.`student` (`id` INT NOT NULL AUTO_INCREMENT , `rollno` INT NOT NULL , `name` VARCHAR(20) NOT NULL , `father` VARCHAR(20) NOT NULL , `class` INT NOT NULL , `eng` INT NOT NULL , `hindi` INT NOT NULL , `math` INT NOT NULL , `phy` INT NOT NULL , `chem` INT NOT NULL , `maxeng` INT NOT NULL , `maxhindi` INT NOT NULL , `maxmath` INT NOT NULL , `maxphy` INT NOT NULL , `maxchem` INT NOT NULL , `editby` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`rollno`)) ENGINE = InnoDB";
// $sql = "CREATE TABLE `jiet`.`admin` (`id` INT(10) NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL ,  `mobile` VARCHAR(12) NOT NULL , `email` VARCHAR(25) NOT NULL , `password` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`mobile`)) ENGINE = InnoDB";
// $sql="INSERT INTO `admin` ( `name`, `mobile`, `email`, `password`) VALUES ( 'udit', '8685873433', 'udit91@gmail.com', '123')";
// $result = mysqli_query($conn,$sql);
// // Check connection
// if ($result) {
//     echo "workong";
  
// }
// else{
//     echo "not connected";
// }
// echo "for this uncomment the sql";
?>
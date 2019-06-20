<?php
$servername = "localhost";
$Name = "root";
$password = "";

// Create connection
$con = new mysqli($servername, $Name, $password, 'alluser');

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
echo "Connected successfully";


$query1 = " SELECT * FROM `name` WHERE `Name` = 'Al Pacino' ";
  $run1 = mysqli_query($con, $query1);
  $AlPacino = mysqli_fetch_assoc($run1);
  $query2 = " SELECT * FROM `name` WHERE `Name` = 'Johnny Depp' ";
  $run2 = mysqli_query($con, $query2);
  $JohnnyDepp = mysqli_fetch_assoc($run2);
  $query3 = " SELECT * FROM `name` WHERE `Name` = 'Kevin Spacey' ";
  $run3 = mysqli_query($con, $query3);
  $KevinSpacey = mysqli_fetch_assoc($run3);
  $query4 = " SELECT * FROM `name` WHERE `Name` = 'Russell Crowe' ";
  $run4 = mysqli_query($con, $query4);
  $RussellCrowe = mysqli_fetch_assoc($run4);
  $query5 = " SELECT * FROM `name` WHERE `Name` = 'Brad Pitt' ";
  $run5 = mysqli_query($con, $query5);
  $BradPitt = mysqli_fetch_assoc($run5);
  $query6 = " SELECT * FROM `name` WHERE `Name` = 'Angelina Jolie' ";
  $run6 = mysqli_query($con, $query6);
  $AngelinaJolie = mysqli_fetch_assoc($run6);
  $query7 = " SELECT * FROM `name` WHERE `Name` = 'John Travolta' ";
  $run7 = mysqli_query($con, $query7);
  $JohnTravolta = mysqli_fetch_assoc($run7);
  $query8 = " SELECT * FROM `name` WHERE `Name` = 'Kate Winslet' ";
  $run8 = mysqli_query($con, $query8);
  $KateWinslet = mysqli_fetch_assoc($run8);
  $query9 = " SELECT * FROM `name` WHERE `Name` = 'Morgan Freeman' ";
  $run9 = mysqli_query($con, $query9);
  $MorganFreeman = mysqli_fetch_assoc($run9);
  $query10 = " SELECT * FROM `name` WHERE `Name` = 'Will Smith' ";
  $run10 = mysqli_query($con, $query10);
  $WillSmith = mysqli_fetch_assoc($run10);
  ?>
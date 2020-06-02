<?php


 include_once "db.php";
 include_once "functions.php";



  if(isset($_GET['id'])){
      
      $id = $_GET['id'];
  }

    
     $sql = "DELETE FROM students WHERE id = '$id' ";
    $connection ->query($sql);



    header('location:table.php');
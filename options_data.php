<?php
require 'connection.php';
session_start();
$rollno = $_SESSION['rollno'];
if(isset($_POST['vote_slab1']) && isset($_POST['vote_slab2']) && isset($_POST['vote_slab3'])){
  if(!empty($_POST['vote_slab1']) && !empty($_POST['vote_slab2']) && !empty($_POST['vote_slab3'])){
    
    $vote_slab1 = $_POST['vote_slab1'];
    $vote_slab2 = $_POST['vote_slab2'];
    $vote_slab3 = $_POST['vote_slab3'];
    
    $file = fopen("votedata.txt", "a") or die("Unable to open file!");
    $txt = $rollno.', '.$vote_slab1.', '.$vote_slab2.', '.$vote_slab3.'\n';
    fwrite($file, $txt);
    header('Location:index.php?vote=success');
    
  }
}
?>

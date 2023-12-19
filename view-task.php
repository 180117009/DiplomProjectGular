<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['obcsuid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit']))
  {
$vid=$_GET['viewid'];
//Garant
    $fpdf = $_FILES["filepdf"]["name"]; {
    //rename images
    $filepdf = $fpdf;
    move_uploaded_file($_FILES["filepdf"]["tmp_name"], "task/" . $filepdf);
$sql= "update tbltask set FilePDF=:filepdf where ID=:vid";
$query=$dbh->prepare($sql);
$query->bindParam(':filepdf',$filepdf,PDO::PARAM_STR);
$query->bindParam(':vid',$vid,PDO::PARAM_STR);

 $query->execute();

  echo '<script>alert("Remark has been updated")</script>';
 echo "<script>window.location.href ='table-task'</script>";
    }
}

?>



 
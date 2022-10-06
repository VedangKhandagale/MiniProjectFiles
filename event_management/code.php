<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM nsp WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = " Deleted Successfully";
        header("Location: admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Not Deleted";
        header("Location: admin.php");
        exit(0);
    }
}

if(isset($_POST['update']))
{
    $student_ID = mysqli_real_escape_string($con, $_POST['student_id']);

    $myName = mysqli_real_escape_string($con, $_POST['myName']);
    $myEmail = mysqli_real_escape_string($con, $_POST['myEmail']);
    $myNumber = mysqli_real_escape_string($con, $_POST['myNumber']);
    $myService = mysqli_real_escape_string($con, $_POST['myService']);
    $myExperience = mysqli_real_escape_string($con, $_POST['myExperience']);
    $yourself = mysqli_real_escape_string($con, $_POST['yourself']);

    $query = "UPDATE nsp SET myName='$myName', myEmail='$myEmail', myNumber='$myNumber', myService='$myService',  myExperience='$myExperience' yourself='$yourself'  WHERE  id='$student_ID' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: admin.php");
        exit(0);
    }

}

?>
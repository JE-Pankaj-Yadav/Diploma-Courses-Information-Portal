<?php
include "./conn.php";


if($_POST['save']){
    $Name = $_POST['name'];
    $Subject = $_POST['subject'];
    $Email = $_POST['email'];
    $Msg = $_POST['desc'];

    $sql = "INSERT INTO `contact_us`(`name`, `email`, `subject`, `form_desc`, `time`) VALUES ('$Name','$Email','$Subject','$Msg', current_timestamp)";

    if($run_sql = mysqli_query($conn, $sql)){
        echo "<script> alert('Your Form is Submitted')</script>";
        header("Location:../contact.php");
    }else{
        echo "<script> alert('Internal Error !')</script>";
        header("Location:../contact.php");
    }

}

?>
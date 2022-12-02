<?php
//including the conn.php file
include('./includes/conn.php');

if(isset($_POST['save']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $contact = $_POST['contacts'];
    $address = $_POST['address'];


    $insert ="INSERT INTO `patients-biodata`(firstname, lastname, gender, age, contact, address) VALUES('$firstname', '$lastname', '$gender',$age, '$contact', '$address')";
    $res = mysqli_query($conn, $insert);

    if($res)
    {
        header('location:inpatients.php');
    }
}



?>
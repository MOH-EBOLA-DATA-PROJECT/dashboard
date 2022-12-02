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
    $status = $_POST['status'];


    $enter ="INSERT INTO 'out_patients' (firstname, lastname, gender, age, contact, address, status) VALUES('$firstname', '$lastname', '$gender',$age, '$contact', '$address', '$status')";
    $res = mysqli_query($conn, $enter);

    if($res)
    {
        header('location:outpatients.php');
    }
}



?>
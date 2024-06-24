<?php
include('config.php');

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn,$select);
    $store = mysqli_num_rows($result);
    if($store ==0)
    {
        // insert query

        $insert = "INSERT INTO user(email,password)VALUES('$email','$password')";
        $result = mysqli_query($conn,$insert);
        if($result)
        {
            header('location:login.php');
        }

    }
    else 
    {
        echo "user already registered";
    }


}

?>
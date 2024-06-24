<?php

$conn = mysqli_connect('localhost','root','123456','notes');

if(!$conn)
{
    die(mysqli_connect_error());
}
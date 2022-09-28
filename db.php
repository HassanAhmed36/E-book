<?php
$con = mysqli_connect('localhost', 'root', '', 'ebook');
if (!$con) {

    die('Error' . mysqli_connect_error($con));
    
}

<?php

require_once 'constants.php';

$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(!$connect)
{
    die('Error connect to database!');
}

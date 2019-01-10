<?php
/**
 * Created by PhpStorm.
 * User: ISLEM
 * Date: 28/11/2018
 * Time: 10:40
 */

session_start();
session_unset();
session_destroy();
header("location:http://localhost/ImtiyazSchool/");
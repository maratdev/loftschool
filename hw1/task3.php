<?php
define('User', 'Admin');

if (defined("User")==true){
    echo "Константа User существует!";
} else{
    echo "Константа User не существует!";
}
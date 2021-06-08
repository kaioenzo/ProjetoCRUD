<?php
session_start();
if(!isset($_SESSION['id'])){
    header("Location: login.php");
}
echo "comando para destruir a seção";

<?php
session_start();

// this is my database
require("database.php");

// this is my action for login
if(isset($_POST['login1'])){
    $uname = $_POST['us'];
    $pwd= $_POST['pw'];
    $hpw =md5($pwd);
    //this is my connection into sql
$ql = "select * from register  where username= '$uname' and password= '$hpw' ";
$result = $conn->query($ql);
$count= $result->num_rows;

if($count == 1 ){
    $_SESSION['authorization'] = 'authorized';// if username and password is correct 
    header('location:dashboard.php');
}else{
    header('location:index.php'); // if incorrect password or username 
}

}

// this is my action for register query
if(isset($_POST['register'])){
    $fullname = $_POST['fn'];   
    $username = $_POST['us'];
    $password = $_POST['pw'];
    $hashed_pw= md5($password);
    $email = $_POST['em'];
    $phone = $_POST['pn'];
    $address = $_POST['add'];
$qr = "insert into register(id, fullname, username, password, email, phone, address) values (NULL, '$fullname', '$username', '$hashed_pw', '$email', '$phone', '$address')";
$conn->query($qr); 
header("location: index.php");
}

// this is for my product query
if(isset($_POST['product'])){
    $pmobile = $_POST['m'];   
    $pstorage = $_POST['n'];
    $pos = $_POST['o'];
    $pkey = $_POST['key'];
    $pprice = $_POST['p'];
    
    $file_name = $_FILES['img'] ['name'];// it helps take image name 
    $type = strtolower (pathinfo($file_name,PATHINFO_EXTENSION));
    
    if($type=='gif' || $type=='png' || $type=='jpg' ){
        $randomnumber = rand(100, 9999999);
        $rename = $randomnumber."_mobile.".$type;
        move_uploaded_file($_FILES['img']['tmp_name'], 'upload/'.$rename);

        $qp = "insert into product (id, mobile, storage, os, features, price, image) values (NULL, '$pmobile', '$pstorage', '$pos', '$pkey', '$pprice','$rename')";
        $conn->query($qp); 
        header("location:dashboard.php");
    }else{
        echo "invalid file format";
    }
}

// this is my delete query
if(isset($_GET['Product_ID'])){
    $p_id = $_GET['Product_ID'];
  $del = "delete from product where id = '$p_id' ";
  $conn->query($del);
  header("location:dashboard.php");
}

//this is my update query 
if(isset($_POST['update'])){
    $p_id=$_POST['id'];
    $pmobile = $_POST['m'];   
    $pstorage = $_POST['n'];
    $pos = $_POST['o'];
    $pkey = $_POST['key'];
    $pprice = $_POST['p'];
    $run= "update product set id='$p_id', mobile='$pmobile', storage='$pstorage', os=' $pos', features=' $pkey', price='$pprice' where id='$p_id'";
    $conn->query($run);
    header("location:dashboard.php");
}
?>
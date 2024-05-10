<?php

include("connection.php");

if(isset($_POST['submit-btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['pass'];
    $img = $_FILES['image'];
    $img_new = $img['name'];

    $query = "INSERT INTO student (name,email,mobile,password,photo) VALUE('$name','$email','$mobile','$password','$img_new')";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        

        move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$_FILES["image"]["name"]);
        header("location:student-data.php");
    }else{
        echo 'fill the value';
    }


   
}

if(isset($_POST['update'])){
    $pkid =$_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    

    $upd = "UPDATE student set name='$name',email='$email',mobile='$mobile' where id='$pkid'";
    $upd_run = mysqli_query($conn,$upd);
    if($upd_run){
        header("location:student-data.php");
    }else{
        echo 'fill the value';
    }


   
}
if(isset($_POST['delete_btn'])){
    $pkid =$_POST['id'];
    $del_image = $_POST['del-image'];
   
    

    $dlt = "DELETE FROM student where id='$pkid'";
    $dlt_run = mysqli_query($conn,$dlt);
    if($dlt_run){
        unlink("uploads/".$del_image);
        header("location:student-data.php");
    }else{
        echo 'fill the value';
    }


   
}
?>
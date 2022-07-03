<?php


if(isset($_POST['Sname'])){

    $conn = mysqli_connect('localhost','root','','onbuz');

    $name = $_POST['Sname'];
    $email = $_POST['email'];
    $pass =md5($_POST['spassword']);
    $cpass =md5($_POST['cspassword']);

    // if(mysqli_num_rows($result) > 0){
    //     $error[] = 'User Already Exist!!'
    // }else{
        
    //         if($pass != $cpass){
    //             $error[] = 'Password Not Matched!!'
    //         }
    // }
    $insert = "INSERT INTO student (FirstName,Email,Password) VALUES ('$name','$email','$pass')";
    mysqli_query($conn,$insert);
    
};



?>
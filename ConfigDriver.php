<?php


if(isset($_POST['name'])){

    $conn = mysqli_connect('localhost','root','','onbuz');

    $name = $_POST['name'];
    $Lnumber = $_POST['Lnumber'];
    $email = $_POST['email'];
    $pass =md5($_POST['password']);
    $cpass =md5($_POST['cpassword']);

    // if(mysqli_num_rows($result) > 0){
    //     $error[] = 'User Already Exist!!'
    // }else{
        
    //         if($pass != $cpass){
    //             $error[] = 'Password Not Matched!!'
    //         }
    // }
    $insert = "INSERT INTO driver (FirstName,LicenseNumber,Email,Password) VALUES ('$name','Lnumber','$email','$pass')";
    mysqli_query($conn,$insert);
    
};



?>
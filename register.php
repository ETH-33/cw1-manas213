<?php
    require('connection.php');

    $password = password_hash($_POST['passwd'], PASSWORD_BCRYPT);
    $cpassword = password_hash($_POST['cpasswd'], PASSWORD_BCRYPT);

    if(isset($_POST['register'])){
        $email_exist_query = "SELECT * FROM `registered_users` WHERE `Email`='$_POST[email]'";
        $result = mysqli_query($con, $email_exist_query);

        if($result){
            if(mysqli_num_rows($result)>0){
                $result_fetch = mysqli_fetch_assoc($result);
            }
            else{
                if($password == $cpassword){
                    $insertquery = "INSERT INTO `registered_users`(`Name`,`Email`,`Phone Number`,`Country`,`ID`,`Address`,`DOB`,`Password`)VALUES('$_POST[name]','$_POST[email]','$_POST[phn]','$_POST[country]','$_POST[id]','$_POST[address]','$_POST[dob]','$password')";

                    $iquery = mysqli_query($con, $insertquery);
                }
                else{
                    echo "Passwords do not match";
                }
            }
        }
        else{

        }

    }
?>
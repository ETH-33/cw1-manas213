<?php
    require("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Quicksand', sans-serif;
        }
        body{
            background-color: #e8edf2;
        }
        .container{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); 
            display: flex;
            flex-direction: row;
            align-items: center;
            background-color: white;
            padding: 20px; 
            box-shadow: 0 50px 50px -50px darkslategrey;
        }
        div.container div.admForm{
            width: 275px;
            margin-right: 30px;
        }
        div.container div.admForm h2{
            color: #1c1c1e;
            margin-bottom: 20px;
        }
        div.container div.admForm input{
            border: none;
            outline: none;
            border-radius: 0;
            width: 100%;
            border-bottom: 2px solid #1c1c1e;
            margin-bottom: 25px;
            padding: 7px 0;
            font-size: 12px;
        }
        div.container div.admForm button{
            color: white;
            background-color: #1c1c1e;
            border: none;
            outline: none;
            border-radius: 2px;
            font-size: 12px;
            padding: 5px 12px;
            font-weight: 500;
        }
        div.container div.image .admImg{
            width: 300px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="admForm">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                <h2>ADMIN LOGIN</h2>
                <input type="text" required placeholder="Admin Name" name="adminName">
                <input type="password" required placeholder="Password" name="adminPass">
                <button type="submit" name="adminLogin">LOGIN</button>
            </form>
        </div>
        <div class="admImg">
            <img src="images/admin.png">
        </div>
    </div>

    <?php
        function input_filter($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if(isset($_POST['adminLogin']))
        {
            // filtering user input
            $adminName = input_filter($_POST['adminName']);
            $adminPass = input_filter($_POST['adminPass']);
            
            $adminName = mysqli_real_escape_string($con, $adminName);
            $adminPass = mysqli_real_escape_string($con, $adminPass);
    
            $query = "SELECT * FROM `admin` WHERE `Admin Name`=? AND `Admin Password`=?";
    
            if($SQLstmt=mysqli_prepare($con, $query))
            {
                mysqli_stmt_bind_param($SQLstmt, "ss", $adminName, $adminPass);
                mysqli_stmt_execute($SQLstmt);
                mysqli_stmt_store_result($SQLstmt);

                if(mysqli_stmt_num_rows($SQLstmt)==1)
                {
                    session_start();
                    $_SESSION['AdminLoginID'] = $adminName;
                    header("location: adminPage.php");
                }
                else
                {
                    echo "<script>alert('Invalid Admin Name or Password');</script>";
                }
                mysqli_stmt_close($SQLstmt);
            }
            else
            {
                echo "<script>alert('Invalid Admin Name or Password');  </script>";
            }
        }
    ?>
</body>
</html>
<?php
    session_start();
    session_regenerate_id(true);
    if(!isset($_SESSION['AdminLoginID'])){
        header("location: adminLogin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/adminpage.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
</head>
<body>
        <div class="wrapper">
            <div class="sidebar">
                <div class="profile">
                    <img src="images/adminimg.png">
                    <h4><?php echo $_SESSION['AdminLoginID'] ?></h4>
                </div>
                <ul>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="bi bi-house"></i></span>
                            <span class="item">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fa-duotone fa-bed-front"></i></span>
                            <span class="item">Rooms</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="bi bi-people"></i></span>
                            <span class="item">Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="bi bi-gear"></i></span>
                            <span class="item">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="section">
                <div class="top-navbar">
                   <div class="hamburger">
                    <a href="#"><i class="bi bi-list"></i></a>
                   </div> 
                </div>
            </div>
        </div> 

        <script>
            var hamburger = document.querySelector(".hamburger");
            hamburger.addEventListener("click", function(){
                document.querySelector("body").classList.toggle("active")
            })
        </script>
</body>
</html>
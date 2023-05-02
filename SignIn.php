<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../TP_Final/Css/SignIn.css"/>
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" /> -->
    <title>Sign in</title>
</head>

<body>

        <div class="login-card">
            <div class="login-card-logo">
                <img src="../TP_Final/Img/forum.png" alt="logo">
            </div>
            <div class="login-card-header">
            </div>
            <form class="login-card-form" method="post"  >
                <div class="form-item">
                    <input type="text" placeholder="E-mail" name="email" id="emailForm" autofocus required>
                </div>
                <div class="form-item">
                    <input type="password" placeholder="Password" name="password" id="passwordForm"required>
                </div>
                <div class="form-item-other">
                    <div class="checkbox">
                        <input type="checkbox" id="rememberMeCheckbox" checked>
                        <label for="rememberMeCheckbox">Remember me</label>
                    </div>
                    <a href="#">I forgot my password!</a>
                </div>
                <button type="submit">Sign In</button>
            </form>
            <div class="login-card-footer">
                Don't have an account? <a href="../TP_Final/Singup.php">Create a free account.</a>
            </div>
            <div class="login-card-footer" style="margin-bottom:0;"><a href="../TP_Final/Visit.php">Go Home</a></div>
        <div class="login-card-social">
            <div>Other Sign-In Options</div>
            <div class="login-card-social-btns">
                <a href="https://fr-fr.facebook.com/login/">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                    </svg>
                </a>
                <a href="https://accounts.google.com/InteractiveLogin/signinchooser?elo=1&ifkv=AQMjQ7RlM9iC9iNcKQJD65krJK9q64cvDS8rYJrairtWarIBzJto_WrbpipIRtgEtmz_kSmRlgHH&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-google" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M17.788 5.108a9 9 0 1 0 3.212 6.892h-8"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</body>
<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "forum";
    $conn = new mysqli($servername,$username,$password,$db_name );
    
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);

    }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = "select * from users where email = '$email' and password = '$password'";
            $user =  "select username from users where email = '$email' and password = '$password'";
            $result = mysqli_query($conn, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);
        if($count){  
            if($password == 'rabah210'){
                echo '<script>
                        window.location.href = "Admin.php";
                    </script>';
            }
            else  {
                echo  '<script>
                        window.location.href= "Member.php";
                    </script>';
                echo  '<script src="./backend/main.js">
                        document.getElementById("Sign-in").firstElementChild.textContent = "fsfsdf";
                    </script>';
            }
        }  
        else {  
            echo  '<script>
                        alert("Login failed. Invalid username or password!!");
                    </script>';
        }     
    }
    mysqli_close($conn);
    ?>
</html>
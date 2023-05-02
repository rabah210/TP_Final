<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../TP_Final/Css/Singup.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
    <title>Sign up</title>
</head>

<body>
        <div class="login-card">
            <div class="login-card-logo">
                <img src="../TP_Final/Img/forum.png" alt="logo">
            </div>
            <div class="login-card-header">
            <form class="login-card-form" method="post" action="">
                <div class="form-item">
                    <input type="text" placeholder="Username" name="username" id="emailForm" autofocus required>
                </div>
                <div class="form-item">
                    <input type="text" placeholder="E-mail" name="email" id="emailForm" autofocus required>
                </div>
                <div class="form-item">
                    <input type="password" placeholder="Password" name="password" id="passwordForm"required>
                </div>
                <div class="form-item">
                    <input type="password" placeholder="Retype Password" name="retypepassword" id="passwordForm"required>
                </div>
                <button type="submit">Sign Up</button>
            </form>
            <div style="display:flex;flex-direction:row;flex-wrap:nowrap;justify-content: center;">
                <p>You have account ? </p>
                <p><a href="../TP_Final/SignIn.php" style="margin-left: 15px;"> Sign in </a></p>
            </div>
            <div style="display:flex;flex-direction:row;flex-wrap:nowrap;justify-content: center;">
                <p><a href="../TP_Final/Visit.php" style="margin-left: 15px;">Go Home</a></p>
            </div>
            
        <div class="login-card-social">
            <div>Other Sign-Up Options</div>
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
// Start a session
session_start();

// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'Forum');

// Check if the connection was successful
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

//  function to add a user to the database : 
function addUser($username, $email, $password) {
    global $conn;
    $password = trim($password);
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die('Error adding user: ' . mysqli_error($conn));
    }
    return true;
}

// Example API endpoint to add a user
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $Rpassword = $_POST['retypepassword'];
    if($password == $Rpassword ) $result = addUser($username, $email, $password);
    else { 
        $result = false;
        echo  '<script>
                    alert("Please retype password correctly");
                </script>';
    }
    if($password == '' || $Rpassword == '' || $username == '' || $email == '') $result = false;
    if ($result) {
        echo    '<script>
                    window.location.href= "../TP_Final/Member.php";
                </script>';

        echo json_encode(array('success' => true));
    } else {
        echo json_encode(array('success' => false));
    }
}

// Close the database connection
mysqli_close($conn);
?>

</html>
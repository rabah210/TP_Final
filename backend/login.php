<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "Forum";  
    $conn = new mysqli($servername , $username, $password, $db_name);
    
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    // if (isset($_POST['submit']) == false) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // header("Location: localhost/tp04/index.php");
            $email = $_POST['email'];
            $password = $_POST['password'];
            // echo $email;
            $sql = "select * from users where email = '$email' and password = '$password'";  
            $result = mysqli_query($conn, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
        if($count == 1){  
            // echo  '<script>window.location.href = "index.php";</script>';
            echo '<script>form.action="../Admin.html"</script>';
        }  
        else{  
            echo  '<script>
            alert("Login failed. Invalid username or password!!")
            </script>';
        }     
    }
    ?>

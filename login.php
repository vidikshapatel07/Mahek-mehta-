<?php include 'config.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = $_POST['user'];
    $mypassword = $_POST['pass'];
    
    $sql = "SELECT * FROM users WHERE Username='$myusername' and Password='$mypassword'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $seconds = 5 + time();
        setcookie('loggedin', date("F jS - g:i a"), $seconds);
        header("location:login_success.php");
    } else {
        echo 'Incorrect Username or Password';
    }
}
?>

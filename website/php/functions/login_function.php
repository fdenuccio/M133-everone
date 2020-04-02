<?php
function positive_alert($msg) {
    echo "<div class='outer'><div class='alert alert-success alert-dismissable' id='flash-msg'>
    <button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>
    <h4><i class='icon fa fa-check'></i>$msg</h4>
    </div></div>";
}
function negative_alert($msg) {
    echo "<div class='outer'><div class='alert alert-danger alert-dismissable' id='flash-msg'>
    <button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>
    <h4><i class='icon fa fa-check'></i>$msg</h4>
    </div></div>";
}

if($_REQUEST['email']){
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("sql111.epizy.com", "epiz_25434312", "Modul133", "epiz_25434312_users");
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    // Escape user inputs for security
    $email = mysqli_real_escape_string($link, $_REQUEST['email']);
    $password = mysqli_real_escape_string($link, $_REQUEST['password']);
    $hashed_password = openssl_digest($password, 'sha512');

    $query = "SELECT * FROM users WHERE email='$email' AND password='$hashed_password' LIMIT 1";
    $result = mysqli_query($link, $query);
    $userdata = mysqli_fetch_assoc($result);

    if ($userdata) {
        if ($userdata['email'] === $email AND $userdata['password'] === $hashed_password){
            #HEADER("location:../index.php");
            positive_alert("Login Successful!");
        }
    }elseif(!($userdata['email'] === $email) OR !($userdata['password'] === $hashed_password)){
        #echo "ERROR: Wrong Credentials";
        negative_alert("Invalid Credentials.");
    }
}

// Close connection
mysqli_close($link);
?>
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

if($_REQUEST['username'] AND $_REQUEST['email']){
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("sql111.epizy.com", "epiz_25434312", "Modul133", "epiz_25434312_users");
    
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    // Escape user inputs for security
    $username = mysqli_real_escape_string($link, $_REQUEST['username']);
    $email = mysqli_real_escape_string($link, $_REQUEST['email']);
    $password = mysqli_real_escape_string($link, $_REQUEST['password']);
    $password2 = mysqli_real_escape_string($link, $_REQUEST['password2']);

    $query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['username'] === $username AND $username != "") {
           #echo "ERROR: Username is already in use $sql. " . mysqli_error($link);
           negative_alert("Username is already in use.");
        }elseif($user['email'] === $email){
            #echo "ERROR: E-Mail is already in use $sql. " . mysqli_error($link);
           negative_alert("E-Mail is already in use.");
        }
    }else{
        if ("$password" != "$password2"){
            #echo "ERROR: Passwords do not match $sql. " . mysqli_error($link);
            negative_alert("Passwords do not match.");
        } else {
                $hashed_password = openssl_digest($password, 'sha512');
                // Attempt insert query execution
                $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email','$hashed_password')";
                if(mysqli_query($link, $sql)){
                    #echo "Records added successfully.";
                    positive_alert("Registration Successful");
                } else{
                    #echo "ERROR: Execution error $sql. " . mysqli_error($link);
                    negative_alert("Execution error, please try again.");
                }
        }
    }
}

// Close connection
mysqli_close($link);
?>
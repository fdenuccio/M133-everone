<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("sql111.epizy.com", "epiz_25434312", "Modul133", "epiz_25434312_users");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$password2 = mysqli_real_escape_string($link, $_REQUEST['password2']);

$query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
$result = mysqli_query($link, $query);
$user = mysqli_fetch_assoc($result);

if ($user) {
 if ($user['username'] === $username) {
    echo "ERROR: Username already exists $sql. " . mysqli_error($link);
 }
}else{
    if ("$password" != "$password2"){
        echo "ERROR: Passwords do not match $sql. " . mysqli_error($link);
    } else {
            $hashed_password = openssl_digest($password, 'sha512');
            // Attempt insert query execution
            $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
            if(mysqli_query($link, $sql)){
                echo "Records added successfully.";
            } else{
                echo "ERROR: Execution error $sql. " . mysqli_error($link);
            }
        }
}

// Close connection
mysqli_close($link);
?>
<?php

/*
Hashing Functions Testing
*/

$password = 'password';
$salt=str_shuffle('AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz012345678987654321');

// hash (Using sha512)
echo '<p>hash() using sha512</p>';
$password1 = hash_function($password,$salt);
echo "<p>Password: $password1</p>";

function hash_function($password,$salt) {
    $count=0;
    while ($count < 5000 ) {
        $count=$count+1;
        $password = hash('sha512',"$password.$salt");
    }
    $final_password = $password;
    return $final_password;
}

?>
<?php
/*
$sql = "SELECT * FROM `t_users` WHERE `email` = '$username' AND `password` = '$password'";

echo "<br><code>". $sql."</code><br>";  //Show the SQL to run (for debugging)

$run = mysqli_query($connect,$sql); //Run the query

$count = mysqli_num_rows($run);  //Count results found (Username and password match)
if($count == 1)
{
	echo "Authentication successful";  //found a match... do something
}
else
{
	echo "Authentication FAIL";  //no match found
}






$example_sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)"
*/





// Database connection
require '_connect.php';

// Run a query
function run_query($conn=$connect, $sql, $params) {
    // Output for testing
    echo "<script>console.log('Database testing');
    console.log('$conn');
    console.log('$sql');
    console.log('$params');
    console.log('');
    <script>";

    // Prepare and bind sql statement with parameters
    $stmt = $mysqli -> prepare("");
    $stmt -> bind_param("sss", $firstname, $lastname, $email);

    // Perform query
    if ($result = mysqli_query($con, "SELECT * FROM Persons")) {
    echo "Returned rows are: " . mysqli_num_rows($result);
    // Free result set
    mysqli_free_result($result);
    }

    // Output errors

    // Return array of results if any
    return $result;
}
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
$typeString = sss
*/





// Database connection
require '_connect.php';

/*
// Run a query
function runQuery($conn=$connect, $sql, $params, $typeString) {
    // Output for testing
    echo "<script>console.log('Database testing');
    console.log('$conn');
    console.log('$sql');
    console.log('$params');
    console.log('');
    <script>";

    // Prepare and bind sql statement with parameters if any
    $stmt = mysqli_prepare($conn, $sql);
    if ($params){
        $stmt -> bind_param($typeString, ...$params);
    }

    // Run query

    // Output errors

    // Return array of results if any
    return $result;
}
*/

function runQuery(string $sql, array $params = [], PDO $pdo=$pdo): array
{
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);

        // Query returned a result set (SELECT, SHOW, DESCRIBE, etc.)
        if ($stmt->columnCount() > 0) {
            return [
                'success' => true,
                'rows' => $stmt->fetchAll(PDO::FETCH_ASSOC),
                'rowCount' => $stmt->rowCount(),
                'lastInsertId' => null
            ];
        }

        // INSERT/UPDATE/DELETE/etc.
        return [
            'success' => true,
            'rows' => null,
            'rowCount' => $stmt->rowCount(),
            'lastInsertId' => $pdo->lastInsertId()
        ];

    } catch (PDOException $e) {
        return [
            'success' => false,
            'error' => $e->getMessage(),
            'rows' => null,
            'rowCount' => 0,
            'lastInsertId' => null
        ];
    }
}

$test = runQuery("SELECT * FROM Controls");
echo "<script>console.log($test)</script>";
?>
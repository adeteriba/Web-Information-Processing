<?php
// Create connection
$conn = mysqli_connect("localhost", "root", "test1234", "cs230");
// Check connection
if (!$conn)
    die("Connection failed: " . mysqli_connect_error());
mysqli_set_charset($conn,'utf8');
$sql = "SELECT * FROM w3schools;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $records = array();
    while($row = $result->fetch_assoc())
        array_push($records, array("name" => $row["name"], "country" => $row["country"]));
    $response = array("records" => $records);
    echo json_encode($response);
}
else
    echo "0 results";
$conn->close();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "test1234";
$dbname = "assignment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//$conn = automit(false);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO eBook_MetaData (Creator, Title, Type, Identifier, Language, Description) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $Creator, $Title, $Type, $Identifier, $Language, $Description);

// set parameters and execute
$Creator = "Ade";
$Title = "Intro To Java";
$Type = "Non-Fiction, Education, Java, Computer Science";
$Identifier = "ISBN";
$Language = "EN-US, EN-IE, FR-CA, DE-DE";
$Description = "Intro To Java is an easy-to-follow textbook that guides the beginning programmer step-by-step through the process of learning Java. Intro TO Java is the perfect text for anyone new to Java who wants a comprehensive, easy-to-comprehend reference.";
$stmt->execute();

$Creator = "Ben";
$Title = "Web Information Processing";
$Type = "Non-Fiction, Education, JavaScript, PHP";
$Identifier = "ISBN";
$Language = "EN-US, EN-IE, FR-CA, DE-DE";
$Description = "You need to have some programming experience in order to take this module. The languages learned include PHP and JavaScript. You will need to become familiar with HTML (for structuring web page content) and CSS (for styling web content).";
$stmt->execute();

$Creator = "Cathal";
$Title = "Intro To Python";
$Type = "Non-Fiction, Education, Python, Computer Science";
$Identifier = "ISBN";
$Language = "EN-US, EN-IE, FR-CA, DE-DE";
$Description = "This book is designed to be used as the primary textbook in a college-level first course in computing. It takes a fairly traditional approach, emphasizing problem solving, design, and programming as the core skills of computer science.";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>
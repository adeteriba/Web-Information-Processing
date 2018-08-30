<!DOCTYPE html>
<html>
<head>
<title>Database Table</title>
<style>
table {
  font-family: "Lucida Console", Monaco, monospace;
  border: 1px solid #000000;
  background-color: #EED6E7;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
table td, table th {
  border: 1px solid #AAAAAA;
  padding: 2px 0px;
}
table tbody td {
  font-size: 13px;
}
table tr:nth-child(even) {
  background: #F5E1F1;
}
table thead {
  background: #A41A5D;
  background: -moz-linear-gradient(top, #bb5385 0%, #ad316d 66%, #A41A5D 100%);
  background: -webkit-linear-gradient(top, #bb5385 0%, #ad316d 66%, #A41A5D 100%);
  background: linear-gradient(to bottom, #bb5385 0%, #ad316d 66%, #A41A5D 100%);
}
table thead th {
  font-size: 15px;
  font-weight: bold;
  color: #FFFFFF;
  text-align: center;
}
table tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #FFFFFF;
  background: #D0E4F5;
  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
}

 </style>
</head>
<body>
<table id="tableID">
  <tr>
    <th>ID</th>
    <th>Creator</th> 
	<th>Title</th> 
	<th>Type</th> 
	<th>Identifier</th> 
	<th>Date</th> 
	<th>Language</th>
	<th>Description</th>
	</tr>
	
	<?php
$conn = mysqli_connect("localhost", "root", "test1234", "assignment");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT ID, Creator, Title, Type, Identifier, Date, Language, Description FROM eBook_MetaData";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["Creator"] . "</td><td>". $row["Title"]. "</td><td>". $row["Type"]. "</td><td>". $row["Identifier"]. "</td><td>". $row["Date"]. "</td><td>". $row["Language"]. "</td><td>". $row["Description"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
    
  </tr>
</table>

</body>
</html>

<html>
<head>
	<meta charset="UTF-8">
</head>

<body>

<h1 style="text-align: center; ">Messages</h1>

<?
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arina";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else {
echo "Connected successfully <br>";}
$sql = "SELECT id, name, email, message FROM messages";
$result = $conn->query($sql);


?><table border="1" style="padding:15px 5px; background:#CFF0EF; width:100%; text-align: center;">
  <thead>
  <tr>
  <th style="padding:10px">id</th>
  <th>name</th>
  <th>email</th>
  <th>message</th>

  </tr>
  </thead>
  <tbody>
<?
if ($result->num_rows > 0) {
    // output data of each row
    while($row= $result->fetch_assoc()) {
       	echo '<tr>';
	    echo '<td style="padding:10px">' . $row['id'] . '</td>';
	    echo '<td>' . $row['name'] . '</td>';
	    echo '<td>' . $row['email'] . '</td>';
	    echo '<td>' . $row['message'] . '</td>';
	    echo '</tr>';
 
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
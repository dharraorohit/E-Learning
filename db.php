 <?php
$servername = "localhost";
$username = "root";
$password = "rohit2662";
$dbname = "WLOTG";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM VIDEO ORDER BY ID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    // echo "ID: " . $row["ID"]. "	TITLE: ".$row["TITLE"]."<br>";
    echo '<a href="playvideo.php?title='.$row["TITLE"].'"><div class="card"><img class="thumbnails" src="img/thumbnails/'.$row["TITLE"].'.jpg"></img><div class="title">'.$row["TITLE"].'</div></div></a>';
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?> 
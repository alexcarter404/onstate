 <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "maps";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT name, address, lat, lng FROM markers";
$result = mysqli_query($conn, $sql);

$markers = array();

        while ($row = @mysql_fetch_assoc($result)){
            extract($row);
            $markers[] = "<marker name='".xml_entities($name)."' address='".xml_entities($address)."' lat='{$lat}' lng='{$lng}' type='{$type}' />";
        }

        if(count($markers)){
            header("Content-type: text/xml");
            echo '<markers>'.implode('', $markers).'</markers>';
        }

?> 

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

        while ($row = mysqli_fetch_assoc($result)){
            extract($row);
            $markers[] = "<marker name='".xml_entities($row['name'])."' address='".xml_entities($row['address'])."' lat='".xml_entities($row['lat'])."' lng='".xml_entities($row['lng'])."' type='".xml_entities($row['type'])."' />";
        }

        if(count($markers)){
            header("Content-type: text/xml");
            echo '<markers>'.implode('', $markers).'</markers>';
        }

?> 

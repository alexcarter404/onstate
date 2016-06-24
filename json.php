<?php

require("connect.php");

  $sql = "select * from markers";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = [];
    while ($row = mysqli_fetch_assoc($result)) {
    array_push($emparray, [
      'name'   => $row['name'],
      'lat' => $row['lat'],
      'lng' => $row['lng']

    ]);
  }

  $json = json_encode($emparray);
  echo $json;


    //close the db connection
    mysqli_close($connection);




?>

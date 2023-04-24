<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">

    <title>Aarohan ITI</title>
</head>
<body>

<h1>AArohan</h1>
<?php

include 'conn.php';
$conn = OpenCon();

$sql = "SELECT * FROM depatment";


$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["dept_id"]. " - Name: " . $row["dept_name"]. " " .  "<br>";

    }
}else {
    echo "0 results";
  }


CloseCon($conn);

?>


</body>
</html>
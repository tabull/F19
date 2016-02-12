<?php

include('connect.php');

$modQuery = "SELECT modCode FROM `module`";

$modCodes =& $db->query($modQuery);


echo $modCodes->numRows();

function query(){
    $modCode = mysql_query("SELECT modCode FROM `module`");

}


/*$data = mysqli_query($conn, $query);

$modCodes = array();

while ($row = mysqli_fetch_array($data))
{   
    array_push($modCodes, $row["name"]);
}

echo json_encode($modCodes);*/

?>


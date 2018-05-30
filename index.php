<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HTML Table</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>


<table class="table">
<thead>
    <tr>
        <th>User #</th>
        <th>First Name</th>
        <th>Last name</th>
        <th>Full Name</th>
        <th>Full Name in Caps</th>
        <th>Length of Full Name</th>
    </tr>
</thead>
<tbody>
<?php 
$users = array( 
    array('first_name' => 'Michael', 'last_name' => 'Choi'),
    array('first_name' => 'John', 'last_name' => 'Supsupin'),
    array('first_name' => 'Mark', 'last_name' => 'Guillen'),
    array('first_name' => 'KB', 'last_name' => 'Tonel') 
 );

 for($i = 0; $i < count($users); $i++) {
    echo "<tr>";
    echo "<td>" . ($i + 1) . "</td>";
    echo "<td>" . $users[$i]["first_name"] . "</td>";
    echo "<td>" . $users[$i]["last_name"] . "</td>";
    echo "<td>" . $users[$i]["first_name"] . " " . $users[$i]["last_name"] . "</td>";
    echo "<td>" . strtoupper($users[$i]["first_name"]) . " " . strtoupper($users[$i]["last_name"]) . "</td>";
    echo "<td>" . strlen($users[$i]["first_name"] . $users[$i]["last_name"]) . "</td>";
 }
?>
</tbody>
</table>
    
</body>
</html>
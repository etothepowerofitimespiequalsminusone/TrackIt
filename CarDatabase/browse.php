<?php

require_once 'base.html';


$choice = "regnum";
$result = queryMysql("select * from cars order by $choice");
$num = $result->num_rows;
echo <<<_END
<div class='panel panel-default col-sm-8 col-sm-offset-2'>
<div class='panel-body'>
<table class="table table-bordered">
     <thead>
      <tr>
        <th>Registration Number</th>
        <th>Type</th>
        <th>Color</th>
        <th>Date seen</th>
        <th>Date added</th>
      </tr>
    </thead>
_END;
for($j = 0;$j < $num; ++$j)
{
    
    $row=$result->fetch_array(MYSQLI_ASSOC);
    echo "<tbody><tr><td>".$row['regnum']."</td><td>". $row['type'] ."</td><td>". $row['color'] ."</td><td>".$row['date_seen'] ."</td><td>".$row['date_added']."</td></tr>";


//    echo "<table><tr><td>". $row['regnum'] . "</td><td>" . $row['type'] . "</td><td> " . $row['color'] . "</td><td>" . $row['date_seen']. " </td><td>" . $row['date_added'] . "</td></tr></table></div>";
}
echo "</tbody></table></div></div>";






?>


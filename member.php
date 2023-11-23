<?php
require "connect.php";
echo "Table Member:";
?>
<table border=1px>
    <tr>
        <th> No </th>
        <th> Team ID </th>
        <th> User ID </th>
        <th> Team Name </th>
    </tr>
    <?php
    $sql =  "SELECT * FROM Member";
    $result = $connect->query($sql);
    $i = 1;
    while($row=$result->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $row['TeamID'];?></td>
        <td><?php echo $row['UserID'];?></td>
        <td><?php echo $row['TeamName'];?></td>
    </tr>
    <?php
    $i++;
    }
    ?>
</table>
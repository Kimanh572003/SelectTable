<?php
require "connect.php";
echo "Table Worklog:";
?>
<table border=1px>
    <tr>
        <th> No </th>
        <th> Worklog ID </th>
        <th> Lastest Update </th>
    </tr>
    <?php
    $sql =  "SELECT * FROM Worklog";
    $result = $connect->query($sql);
    $i = 1;
    while($row=$result->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $row['WorklogID'];?></td>
        <td><?php echo $row['LastestUpdate'];?></td>
    </tr>
    <?php
    $i++;
    }
    ?>
</table>
<?php
require "connect.php";
echo "Table Archive:";
?>
<table border=1px>
    <tr>
        <th> No </th>
        <th> Worklog ID </th>
        <th> User ID </th>
        <th> Task ID </th>
        <th> Viewer </th>
    </tr>
    <?php
    $sql =  "SELECT * FROM Archive";
    $result = $connect->query($sql);
    $i = 1;
    while($row=$result->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $row['WorklogID'];?></td>
        <td><?php echo $row['UserID'];?></td>
        <td><?php echo $row['TaskID'];?></td>
        <td><?php echo $row['Viewer'];?></td>
    </tr>
    <?php
    $i++;
    }
    ?>
</table>
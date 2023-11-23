<?php
require "connect.php";
echo "Table Task:";
?>
<table border=1px>
    <tr>
        <th> No </th>
        <th> Project ID </th>
        <th> User ID </th>
        <th> Task ID </th>
        <th> Task Name </th>
        <th> Task Progress </th>
    </tr>
    <?php
    $sql =  "SELECT * FROM Task";
    $result = $connect->query($sql);
    $i = 1;
    while($row=$result->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $row['ProjectID'];?></td>
        <td><?php echo $row['UserID'];?></td>
        <td><?php echo $row['TaskID'];?></td>
        <td><?php echo $row['TaskName'];?></td>
        <td><?php echo $row['TaskProgress'];?></td>
    </tr>
    <?php
    $i++;
    }
    ?>
</table>
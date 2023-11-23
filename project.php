<?php
require "connect.php";
echo "Table Project:";
?>
<table border=1px>
    <tr>
        <th> No </th>
        <th> Folder ID </th>
        <th> Project ID </th>
        <th> Project Name </th>
        <th> Start Date </th>
        <th> Due Date </th>
        <th> Project Progress </th>
    </tr>
    <?php
    $sql =  "SELECT * FROM Project";
    $result = $connect->query($sql);
    $i = 1;
    while($row=$result->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $row['FolderID'];?></td>
        <td><?php echo $row['ProjectID'];?></td>
        <td><?php echo $row['ProjectName'];?></td>
        <td><?php echo $row['StartDate'];?></td>
        <td><?php echo $row['DueDate'];?></td>
        <td><?php echo $row['ProjectProgress'];?></td>
    </tr>
    <?php
    $i++;
    }
    ?>
</table>
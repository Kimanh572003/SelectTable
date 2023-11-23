<?php
require "connect.php";
echo "Table Folder:";
?>
<table border=1px>
    <tr>
        <th> No </th>
        <th> Team ID </th>
        <th> Folder ID </th>
        <th> Folder Name </th>
        <th> Privacy </th>
    </tr>
    <?php
    $sql =  "SELECT * FROM Folder";
    $result = $connect->query($sql);
    $i = 1;
    while($row=$result->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $row['TeamID'];?></td>
        <td><?php echo $row['FolderID'];?></td>
        <td><?php echo $row['FolderName'];?></td>
        <td><?php echo $row['Privacy'];?></td>
    </tr>
    <?php
    $i++;
    }
    ?>
</table>
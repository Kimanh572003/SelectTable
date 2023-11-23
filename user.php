<?php
require "connect.php";
echo "Table User:";
?>
<table border=1px>
    <tr>
        <th> No </th>
        <th> User ID </th>
        <th> Name </th>
        <th> Email </th>
        <th> Role </th>
        <th> Status </th>
    </tr>
    <?php
    $sql =  "SELECT * FROM User";
    $result = $connect->query($sql);
    $i = 1;
    while($row=$result->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $row['UserID'];?></td>
        <td><?php echo $row['Name'];?></td>
        <td><?php echo $row['Email'];?></td>
        <td><?php echo $row['Role'];?></td>
        <td><?php echo $row['Status'];?></td>
    </tr>
    <?php
    $i++;
    }
    ?>
</table>
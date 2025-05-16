
<!-- admin page where admin get all the complainant -->
 <!-- create a new call it admin.php -->

<?php $con = mysqli_connect("localhost","root","","complainant"); if (!$con) { die('Could not connect: ' . mysql_error()); }
 $sql = "SELECT * FROM users"; $query= mysqli_query($sql);
 ?>
<center> <h1>Admin Dashboard</h1></center>
     <table>
    <tr>
    <th>FullName</th>
    <th>Address</th>
    <th>Contacts</th>
       <th>Complains</th>
    </tr>
    
    <?php
    //this is to display your data
    while($row=mysql_fetch_array($query))
    {
    ?>
    <tr>
         <td><?php echo $row['name']?></td>
        <td><?php echo $row['address']?></td>
        <td><?php echo $row['contact']?></td>
   <td><?php echo $row['apeal']?></td>     
    </tr>
    
     <?php
    }//end while
    ?>
    </table>
<?php
mysql_close($con);
?>

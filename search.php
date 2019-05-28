<!DOCTYPE html>
<html>
<body>

<?php
     $mod=$_POST['text4'];
     $conn=new mysqli('127.0.0.1','root','','Library');
      if($conn->connect_error)
      {
        die("connection failed:".$conn->connect_error);
      }
      $sql="SELECT * FROM vijayawada WHERE Book_name='".$mod."'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
echo "<center>";
echo "<table style='width:100%;' border='10'>";
echo "<tr>";
echo "<th>Library_id</th>
      <th>Book_id</th>
      <th>Library_name</th><br>
      <th>Book_name</th><br>
      <th>Available</th><br>
      <th>Curr_available</th><br>";
while($row=$result->fetch_assoc())
{

echo "<tr>";
echo "<td>" .$row["Library_id"]. "</td>"; 
echo "<td>" .$row["Book_id"]. "</td>"; 
echo "<td>" .$row["Library_name"]. "</td>";
echo "<td>" .$row["Book_name"]. "</td>";
echo "<td>" .$row["Available"]. "</td>";
echo "<td>" .$row["Curr_available"]. "</td>";
echo "</tr>";
}
}

else
{
echo " <center> sorry not available </center>";
}
echo "</tr>";
echo "</table>"; 
echo "</center>";
$conn->close();
?>
<center><a href="updates.html">Get_Updates</a></center>

</body>
</html>
 

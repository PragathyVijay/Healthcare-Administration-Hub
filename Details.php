<html>
<style>
    .dbresult,.dbresult td,.dbresult th{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 8px;
    }
    .dbresult{
        width: 800px;
        margin: auto;
    }
    .dbresult td: nth-child(odd)
    {
        background-color: #b2d0d6;
    }
    .dbresult td: nth-child(even)
    {
        background-color: lightcyan;
    }
    #b1{
    font-size : 30px;
}
th{background-color:#C0C0C0}
td{background-color:#E8E8E8}
table{width : 800 ; height : 400}
</style>
<table class="dbresult">
    <tr>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>BIRTHDAY</th>
        <th>EMAIL</th>
        <th>PHONE NUMBER</th>
        <th>REASON</th>
        <th>DOCTOR NAME</th>
        <th>SPECIALITY</th>
        <th>DATE</th>
        <th>DAY</th>
        <th>TIME</th>
</tr>
<br><br><br><br><br><br><br>
<?php
$connect=mysqli_connect("localhost","root","root123","hospital")or die("Connection Failed");
if (isset($_POST['app_user']))
{
    $email = $_POST['email'];
    $sps = $_POST['speciality'];
   $query = "select ap.*, d.* from appointment ap, doctors d where ap.Email = '$email' and d.Speciality = '$sps'";
   $result=mysqli_query($connect,$query);
   while($row=mysqli_fetch_assoc($result))
   {

    ?>
      <tr>
        <td><?php echo $row['First_Name']?> </td>
        <td><?php echo $row['Last_Name']?> </td>
        <td><?php echo $row['Birthday']?> </td>
        <td><?php echo $row['Email']?> </td>
        <td><?php echo $row['Phone']?> </td>
        <td><?php echo $row['Reason']?> </td>
        <td><?php echo $row['Doctor_Name']?> </td>
        <td><?php echo $row['Speciality']?> </td>
        <td><?php echo $row['Date']?> </td>
        <td><?php echo $row['Day']?> </td>
        <td><?php echo $row['Time']?> </td>
   </tr>
   
   </table>
   <?php
   }
}?>
<br><br><br>
<center>
<a href="Dashboard.php">
<button id = 'b1'> Back </button>
</a>
</html>
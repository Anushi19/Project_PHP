<html>
<table align=center>
<tr><th colspan=3> <a href="insert.html"><h2>Insert</h2>

<?php


$connection=mysql_connect("localhost","root","anushiya19") or die("Connection failed");
$db=mysql_select_db("Mydb",$connection) or die("Database Failure");


$fname=$_POST['fn'];
$lname =$_POST['ln'];
$dob=$_POST['dob'];
$add=$_POST['add'];
$coun=$_POST['coun'];
$password=$_POST['pwd'];
$gen=$_POST['gen'];


$lname  =isset($_POST['ln'])? $_POST['ln'] : 'LastName';

if($fname=="")
        {
            echo "<script>alert('Please insert the FirstName to update the specific row');location.href = 'update.html';</script>";  
        }
        else
        {
         

$query="Update details set LastName=IF(LENGTH('$lname')=0,LastName, '$lname'),Address=IF(LENGTH('$add')=0,Address, '$add'),DOB=IF(LENGTH('$dob')=0,DOB, '$dob'),Country=IF(LENGTH('$coun')=0,Country, '$coun'),Password=IF(LENGTH('$pwd')=0,Password, '$pwd'),Gender=IF(LENGTH('$gen')=0,Gender, '$gen') where Firstname='$fname'";
       


$result=mysql_query($query) or die("Query Failed");

echo "<table bgcolor=pink bordercolor=red align=center border=10 cellsapcing=3 cellpadding=5 ><tr><th colspan=7><h1>Details Table
<tr><th>FirstName<th>LastName<th>Address<th>DOB<th>Password<th>Gender<th>Country<th>Link1<th>Link2";

$query2="select * from Details";
$result2=mysql_query($query2) or die("Query Failed");

while($row=mysql_fetch_array($result2))
{
echo "<tr><td>",$row[FirstName],"<td>",$row['LastName'],"<td>",$row[Address],"<td>",$row[DOB],"<td>",$row[Password],"<td>",$row[Gender],"<td>",$row[Country],"<td><a href='update.html'>update</a><td><a href='delete.html'>delete</a>";
}
mysql.close($conncetion);
}
?>


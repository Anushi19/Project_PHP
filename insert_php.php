<html>
<body>
<table align=center>
<tr><th colspan=3> <a href="insert.html"><h2>Insert</h2>
<?php


$connection=mysql_connect("localhost","root","anushiya19") or die("Connection failed");
$db=mysql_select_db("Mydb",$connection) or die("Database Failure");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$add=$_POST['add'];
$dob=$_POST['dob'];
$password=$_POST['pwd'];
$gen=$_POST['gen'];
$coun=$_POST['coun'];

echo "<table bgcolor=pink bordercolor=red align=center border=10 cellsapcing=3 cellpadding=5 ><tr><th colspan=7><h1>Details Table
<tr><th>FirstName<th>LastName<th>Address<th>DOB<th>Password<th>Gender<th>Country<th>Link1<th>Link2<tr>";


// Query should be failed while inserting duplicate values for primary key.
//use the query failed link to go back to insert page

$query1="insert into Details values('$fname','$lname','$add','$dob','$password','$gen','$coun')";
$result1=mysql_query($query1) or die("Query Failed");

$query2="select * from Details";
$result2=mysql_query($query2) or die("Query Failed");


while($row=mysql_fetch_array($result2))
{
echo "<tr><td>",$row[FirstName],"<td>",$row['LastName'],"<td>",$row[Address],"<td>",$row[DOB],"<td>",$row[Password],"<td>",$row[Gender],"<td>",$row[Country],"<td><a href='delete.html'>delete</a><td><a href='update.html'>update</a>";
}

mysql.close($conncetion);
?>






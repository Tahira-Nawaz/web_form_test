
<html>
<body align="center">


<?php
$server="";
$username="root";
$password="";
$database="REGISREATION1";
$conn= new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
	die("connection failed.". $conn->connect_error);
}

echo "database connected successfully."."<br>";


echo "<h2>Updated Registration</h2>";
$p=$_POST["First_name1"];
echo "First_name is(Required First_name for updation ):".$p."<br>";
$Fname=$_POST["First_name"];
echo "First_name is:".$Fname."<br>";
$L=$_POST["Last_name"];
echo "Last_name is:".$L."<br>";
$F=$_POST["Email_id"];
echo "Email_id is:".$F."<br>";
$E=$_POST["Telephone_Number"];
echo "Telephone_Number is:".$E."<br>";
$C=$_POST["Website_url"];
echo "Website_url is:".$C."<br>";
$D=$_POST["options"];
echo "options is:".$D."<br>";
$Q=$_POST["myfile"];
echo "myfile is:".$Q."<br>";
$R=$_POST["comments"];
echo "comments is:".$R."<br><br>";
/*
$sql=" INSERT INTO formass(First_name, Last_name, Email_id, Telephone_Number, Website_url, Select_department,  File, comments)
    VALUES( '$Fname' , '$L', '$F','$E','$C','$D','$Q','$R')";
if($conn->query($sql) === TRUE)
{

	echo "<h2>INSERT</h2>insert in table  successfully."."<br>";
}
else
{

	echo" insert in table is not  successfully.".$conn->error;
}
*/
    
$sql2="UPDATE formass SET `First_name`='$Fname',`Last_name`='$L',`Email_id`='$F',`Telephone_Number`='$E',`Website_url`='$C',`Select_department`='$D',`File`='$Q',`comments`='$R' WHERE `First_name`='$p'" ;
if($conn->query($sql2) === TRUE)
{

	echo "<h2>UPDATE</h2>Update in table  successfully."."<br>";
}
else
{

	echo" Update in table is not  successfully.".$conn->error;
}
$conn->close()
?>
</body>
</html>
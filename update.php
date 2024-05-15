<html><head>
<title>register</title>
<style>
/* Add padding to containers */
.container {
  padding: 0px;
  margin :10px;
  color:green;
  font-size:19px;
}
/* Full-width input fields */
input[type=text], input[type=date], input[type=number],input[type=file],input[type=email],textarea,select{
  width: 45%;
  margin: 10px 10px 10px 10;
  border: solid 1px black;
  background: #f1f1f1;
  height: 37px;
  font-size:15px;
}
/* Set a style for the submit/register button */
.registerbtn {
  background-color: #026ee4;
  color: white;
  border-radius: 5px;
  width: 100px;
  height: 37px;
  cursor: pointer;
  border: none;
  margin: 2px;
}
.registerbtn1 {
  background-color: gray;
  color: white;
  border-radius: 5px;
  width: 100px;
  height: 37px;
  cursor: pointer;
  border: none;
  margin: 2px;
}
a{
  text-decoration:none;
  color: white; 
}
/* Add a blue text color to links */
</style>
</head>
<body style="margin: 80px;" >
<div align="center">
<div style=" width: 600px; height: 530px; border:solid green; " >

 <div style="border:outset; background:#f1f1f1; "> <h3 align="left" style="margin:10;margin-left:25px; ">CONTACT FORM</h3></div>
  <div class="container">
  <form  method="POST" action="func.php">
    <input type="text" style="width:94%; " placeholder="First_name(which you want to update)" name="First_name1" ><br><p style="font-size:13px; text-align: left;margin:0px; margin-left: 20px; color: #026ee4;">Enter the previous register "First_name" for updation of data</p>.
    <input type="text" placeholder="First_name" name="First_name">
    <input type="text" placeholder="Last_name" name="Last_name">
    <input type="email" placeholder="Email_id" name="Email_id">
    <input type="number"  placeholder="Telephone_Number"  name="Telephone_Number">
	  <input type="text" placeholder="Website_url" name="Website_url">
	  <select name="options" >
                                <option>Select department</option>
                                <option>Computer Science</option>
                                <option>Psychology</option>
                                <option>Maths</option>
    </select>
  <input type="file"  name="myfile" multiple  style="width:94%; border: solid 1px black; color: black; padding-top: 5px; " ><p style="font-size:13px; text-align: left;margin:0px; margin-left: 20px;color: black;">Use JPG, PNG, DOC, PDF Files maximum size 3MB.</p>
   <textarea name="comments" id="comments" placeholder="Enter message or comments" style="width:94%; height: 80px; "></textarea>
    <button type="submit" class="registerbtn1" name="submit"><a href="form.php" >Cancel</a></button>
    <button type="submit" class="registerbtn" name="submit">Update/Edit</button>
 </div>

</div>
</div>
</body>
</html>
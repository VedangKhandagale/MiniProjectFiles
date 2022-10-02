<?php 
 if(isset($_POST['custform'])){
 $CName= $_POST['CName'];
 $gender=$_POST['gender'];
 $email=$_POST['email'];
 $phoneno=$_POST['phoneno'];
 $wno=$_POST['wno'];
 $AddLine1=$_POST['AddLine1'];
 $AddLine2=$_POST['AddLine2'];
 $city=$_POST['city'];
 $pincode=$_POST['pincode'];
 $Per_add=$_POST['Per_add'];}

 $conn = new mysqli('localhost','root','','formfilling');
 if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into custform(CName,gender, email, phoneno,wno,AddLine1,AddLine2,city,pincode,Per_add) values(?, ?, ?, ?, ?,?,?,?,?,?)");
    $stmt->bind_param("sssissssis", $CName, $gender, $email, $phoneno, $wno, $AddLine1, $AddLine2, $city,$pincode,$Per_add);
    $execval1 = $stmt->execute();
    echo $execval1;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}





?>
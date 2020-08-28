<?php
 echo $_POST["name"];
 echo $_POST["email"];
//  mysql insert data 
$servername = "location";
$username  = "username";
$password = "";
$dbname = "db_student";
//create connection
$conn = mysqil_connect($servername,$username,$password,$dbname);
//check connection
if(!conn){
    die("connection failed:" .myail_connect_error());
}
//INSERT DATA
$sql = "INSERT INTO tbl_student(firstname,lastname,email)VALUES('john','Doe','john@gmail.com','kathmandu')";

if(mysqil_query($conn, $sql)){
    echo "New record created successfully";
}else{
    echo "Error:". $sql."<br>".mysqil_error($conn);
}
//SELECT DATA
$sql = "SELECT id, firstname, lastname FROM tbl_student";
$result = mysqil_query($conn, $sql);
if(mysql_num_rows($result)>0){
    //output data of each row
    while($row = mysqil_fetch_assoc($result)){
        echo "id:".$row["id"]."-name".$row["firstname"].".$row["lastname"]."<br>;
    }
}else{
    echo "0 results";
}
mysqil_close($conn);
?>
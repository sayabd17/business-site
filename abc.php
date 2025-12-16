<?php
$un=$_POST["abc1"];
$ml=$_POST["abc2"];
$cn=$_POST["abc3"];
$si=$_POST["abc4"];

$conn = mysqli_connect("localhost", "root", "", "miraclesapphire");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO buyer(Buyer_Name, Email_Id, Contact_No, Interested_Stone) VALUES ('$un', '$ml', '$cn', '$si')";
    if(mysqli_query($conn,$sql)){

        echo "Name: ".$un."<br>";
        echo "Email: ".$ml."<br>";
        echo "Contact No:".$cn."<br>";
        echo "Interested Stones:".$si."<br><br>";

        echo "Your Record Created Successfully!!! <br>";
        echo "You Will Recieve Mail Shortly...
        <br><br><br>";
        echo "Thank You Have A Nice Day.....";

    }

    else{
        echo "Error".$sql."<br>".mysqli_error($conn);}

mysqli_close($conn);
?>
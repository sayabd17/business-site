<?php
$ab=$_POST["abcd1"];
$ac=$_POST["abcd2"];
$ad=$_POST["abcd3"];
$ae=$_POST["abcd4"];
$af=$_POST["abcd5"];

$conn = mysqli_connect("localhost", "root", "", "miraclesapphire");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO appointment(Name_Buyer, Email_Buyer, Contact_Buyer, Appointment_Date, Appointment_Time) VALUES ('$ab', '$ac', '$ad', '$ae', '$af')";
    if(mysqli_query($conn,$sql)){

        echo "Name: ".$ab."<br>";
        echo "Email: ".$ac."<br>";
        echo "Contact No:".$ad."<br>";
        echo "Appointment Date:".$ae."<br>";
        echo "Appointment Time:".$af."<br><br>";

        echo "Your Record Created Successfully!!! <br>";
        echo "You Will Recieve Mail Shortly...<br><br><br>";
        echo "Thank You Have A Nice Day.....";

    }

    else{
        echo "Error".$sql."<br>".mysqli_error($conn);}

mysqli_close($conn);
?>
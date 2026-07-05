<?php

include("database.php");

$first = $_POST['first_name'];
$last = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO contact_messages
(first_name,last_name,email,phone,message)

VALUES
('$first','$last','$email','$phone','$message')";

if($conn->query($sql)){

echo "<script>
alert('Message sent successfully');
window.location='contactUs.php';
</script>";

}
else{

echo "Database Error: " . $conn->error;

}

$conn->close();

?>
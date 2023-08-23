<?php




include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 
}




$cheks = implode("','", $_POST['checkbox']);
$sql = "DELETE FROM ORDER WHERE order_ID in ('$cheks')";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

header('Location: view_order_details.php');
$conn->close();


?>
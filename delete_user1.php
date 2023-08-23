<?php




include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 
}




$cheks = implode("','", $_POST['checkbox']);
$sql = "UPDATE CUSTOMER SET `options` = 'DISABLE' WHERE username in ('$cheks')";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

header('Location: delete_user.php');
$conn->close();


?>
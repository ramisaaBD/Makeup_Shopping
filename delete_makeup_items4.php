<?php




include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 
}




$cheks = implode("','", $_POST['checkbox']);
$sql = "UPDATE LIPS SET `options` = 'DISABLE' WHERE P_ID in ('$cheks')";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

header('Location: delete_lip_items.php');
$conn->close();


?>
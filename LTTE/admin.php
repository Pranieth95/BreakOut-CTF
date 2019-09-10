

<?php 
session_start();
if(isset($_POST['bttLogin'])){

	$username = $_POST['uname'];
	$password = $_POST['pwd'];
    
	if($username=='captain3' && $password=='AB3'){
		$_SESSION['username'] = $username;
		header('Location: key.html ');
	}
	
	else {
		echo "Invalid account";
	}

if(isset($_GET['logout'])){
	session_unregister('uname');
	session_destroy();
}


}

?>

<?php
	session_start();
	if(!$_SESSION['user']){
		header('location:signup_wieteacher.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
		include ('connsp.php');	 
			$user= $_SESSION['user'];
			$query = "select * from teacher t where user='$user'";
			$res=$connsp->query($query);
			if($fe=$res->fetch_object()){
				$user = $fe->user;
				$pass = $fe->pass;
				$studentid = $fe->empid;
 				$email = $fe->email; 	
			 	$phone_no = $fe->phone_no;
			 	$bloodg=$fe->bloodg;
    			$address = $fe->address;
			} 
		?>
		<table>
			<tr>
				<td>Id :</td>
				<td><?php echo $studentid ?></td>
			</tr>
			<tr>
				<td>Username :</td>
				<td><?php echo $user ?></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><?php echo $email ?></td>
			</tr>
			<tr>
				<td>Phone Number :</td>
				<td><?php echo $phone_no ?></td>
			</tr>

			<tr>
				<td>Blood Group :</td>
				<td><?php echo $bloodg ?></td>
			</tr>
		</table>
	</body>
</html>
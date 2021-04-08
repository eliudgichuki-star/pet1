<html>
	<head>
		<title>Login Handler</title>
	</head>
	<body>
		<?php
		$connect = mysqli_connect("localhost", "root", "delta", "pet");  
			session_start();
			session_destroy();
			session_start();
			if(isset($_POST['Login']))
			{
				$data_missing=array();
				if(empty($_POST['username']))
				{
					$data_missing[]='Username';
				}
				else
				{
					$user_name =  $_POST["username"];  
				}
				if(empty($_POST['password']))
				{
					$data_missing[]='Password';
					
					
				}
				else
				{
					$password=mysqli_real_escape_string($connect,$_POST['password']);
					
					

				}
				if(empty($_POST['user_type']))
				{
					$data_missing[]='User Type';
				}
				else
				{
					$user_type = mysqli_real_escape_string($connect, $_POST["user_type"]);  
					$_SESSION['user_type']=$user_type;
				}
                

				if(empty($data_missing))
				{
					if($user_type=='Customer')
					{
						require_once('Database Connection file/mysqli_connect.php');
				
                              
                        

						$query="SELECT count(*) FROM users where username='$user_name'";
						$stmt=mysqli_prepare($dbc,$query);
						mysqli_stmt_bind_param($stmt,"s",$user_name);
						mysqli_stmt_execute($stmt);
						mysqli_stmt_bind_result($stmt,$cnt);
						mysqli_stmt_fetch($stmt);
						//echo $cnt;
						mysqli_stmt_close($stmt);
						mysqli_close($dbc);
						/*$affected_rows=mysqli_stmt_affected_rows($stmt);
						$response=@mysqli_query($dbc,$query);
						echo $affected_rows;
						*/
					}
						if($cnt==1)
						{
							if(password_verify($password, $row['password']))  
                        
							
							echo "Logged in <br>";
							$_SESSION['login_user']=$user_name;
							echo $_SESSION['login_user']." is logged in";
							header("location:homepage.php");
							return true;
						}
						
					}
					
				}
			
				
			?>
			
	</body>
</html>
<?php 
require_once 'connection.php';
$flag=0;
		if(isset($_POST['login'])){
			if(!empty($_POST['logemail'])&&!empty($_POST['logpass'])){
				$sql='SELECT email,password FROM registration';
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0)
				{
					while($row= mysqli_fetch_assoc($result)){
						if($row['email']==$_POST['logemail']&&$row['password']==$_POST['logpass']){
							
							$flag=1;
							header('Location:index.php');
							break;
						}
					}
					if($flag==0)
						echo "<font size='7' color='red'>wrong email or password</font>";
				}
			}
		}
	?>
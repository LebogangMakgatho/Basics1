<html>
<head>
<title>Register</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<table width="900" border="1" align="center">
  <tr>
    <td colspan="2"><?php require('header.php');?></td>
  </tr>
  <tr>
    <td width="17" bgcolor="#FFCC33"><?php require('sideBar.php'); ?>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    </td>
    <td width="867">
    <i>
    <p style="color:#F00">Please make sure that you enter correct email and password</p></i>
    <form name="form1" method="post" action="register.php" class"form">
    <table width="460">
      <td width="452">
      </br>
      <table width="359">
        <tr>
          <td width="349"><b>Enter Name:</b>
            <input class='form-control' type='text' name='name' id='textfield' placeholder='John'></td>
        </tr>
        <tr>
          <td><br/><b>Enter Surname:</b>
            <label for="textfield2"></label>
            <input class='form-control' type="text" name="surname" id="textfield2" placeholder='Van Nie Kerk'></td>
          </tr>
        <tr>
          <td><br/><b>Enter SA ID Number:</b>
            <label for="textfield3"></label>
            <input class='form-control' type="text" name="idNum" id="textfield3" placeholder='1234567891011'></td>
          </tr>
        <tr>
        <tr>
          <td><br/><b>Enter Cell Number:</b>
            <label for="textfield3"></label>
            <input class='form-control' type="text" name="cellNum" id="textfield3" placeholder='0785197250'></td>
          </tr>
          <tr>
          <td><br/><b>Enter Telephone Number:</b>
            <label for="textfield3"></label>
            <input class='form-control' type="text" name="telNum" id="textfield3" placeholder='0187873349'></td>
          </tr>
        <tr>
        <tr>
          <td><br/><b>Enter Physical Address:</b>
            <label for="textarea"></label>
            <textarea class='form-control' name="address" id="textarea" cols="45" rows="5" placeholder= '7th Avenue Road Carletonville'></textarea></td>
          </tr>
        <tr>
          <td><br/><b>Enter Email:</b>
            <label for="textfield4"></label>
            <input class='form-control' type="text" name="email" id="textfield4" placeholder='example@gmail.com'></td>
          </tr>
        <tr>
          <td><br/><b>Enter Password:</b>
            <label for="textfield5"></label>
            <input class='form-control' type="password" name="password" id="textfield5" placeholder='10111'></td>
          </tr>
        <tr>
          <td><br/><b>Confirm Password:</b>
            <label for="textfield6"></label>
            <input class='form-control' type="password" name="cPassword" id="textfield6" placeholder='10111'></td>
          </tr>
        <tr>
          <td><br/><input class='form-control btn btn-success' type="submit" name="button" id="button" value="Login"></td>
        </tr>
        <tr>
          <td><a href="login.php">Sign in</a></td>
        </tr>
        </table>
      </td>
    </table>
    </form>
    <p></p>
    <p align="center"><a href="home.php">Home</a> | <a href="gallery.php">Car Gallery</a> | <a href="aboutUs.php">About Us</a> | <a href="contactUs.php">Contact Us</a></p>
  </td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFCC33"><?php require('footer.php'); ?></td>
  </tr>
</table>
<?php	
	if(($name =$_POST['name']) != "" && ($surname =$_POST['surname'])!= " ")
	{
		if(($idNum =$_POST['idNum']) != " ")
		{
			if(($cellNum =$_POST['cellNum']) && ($telNum =$_POST['telNum']) != "" )
			{
				if(($address =$_POST['address']) != "" && ($email =$_POST['email']) != "")
				{
					if(($password =$_POST['password']) !="" && ($cPassword =$_POST['cPassword'])!= "")
					{
						if($password == $cPassword)
						{
							$connect = new MySQLi('localhost','carsystem','carsystem','Member');
							if(!$connect)
							{
								echo'Database is not connected';
								exit;
							}
							
								$query = "INSERT INTO customer values('".$email."','".$password."','".$name."','".$surname."','".$idNum."','".$cellNum."','".$telNum."','".$address."')";
							
							$results = $connect->query($query);
							if(!$results)
							{
								print '<script type="text/javascript">';
								print 'alert("Registration was not successful. Please try again")';
								print '</script>';
							}
							
							$connect->affected_rows."member(s) inserted";
							echo date('H:i jS F Y')."</br>";
							
							//echo require('index.php');
						}
					}
				}
			}
			
		}
	}
?>

</body>
</html>
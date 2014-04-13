<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="900" border="1" align="center">
  <tr>+ 
 <td colspan="2"><?php require_once('header.php');?></td> 
  </tr>
  <tr>
    <td colspan="2" align="center" bgcolor="#FFCC00"> <a href="logout.php">Log out</a></td>
  </tr>
  <tr>
    <td width="17" bgcolor="#FFCC00" ><?php require_once('sideBar.php');?>
    <form id="form1" name="form1" method="post" action="CAR GALLERY.html">

	      
	      </select>
        <p>Car Search </p>
        <p>Type : 
          <input type="radio" name="radio" id="used" value="used" />
          <label for="used">Used</label>
<label for="used"></label>
<input type="radio" name="radio" id="new" value="new" />
        New        
        <input type="radio" name="radio" id="all" value="all" />
          <label for="all">Search All</label>
        </p>
        <table width="200" border="1">
	      <tr>
	        <td><label for="Make"></label>
	          <select name="Make" id="Make">
	            <option>Make Selection</option>
	            <option>Honda</option>
	            <option>Audi</option>
	            <option>Peogeut</option>
	            <option>Marcedez benz</option>
	            <option>Toyota Corrola</option>
	            <option>VW Polo</option>
	            <option>Toyota Etios</option>
                <option>Hyundai</option>
                <option>VW Golf</option>
            </select></td>
          </tr>
	      <tr>
	        <td><label for="Model"></label>
	          <select name="Model" id="Model">
	            <option>Model</option>
	            <option>All</option>
            </select></td>
          </tr>
	      <tr>
	        <td><label for="Area"></label>
	          <select name="Area" id="Area">
	            <option>Area</option>
	            <option>Eastern Cape</option>
	            <option>Free State</option>
	            <option>Gauteng</option>
	            <option>Kwazulu Natal</option>
	            <option>Limpopo</option>
	            <option>Mpumalanga</option>
	            <option>North West</option>
	            <option>Northern Cape</option>
	            <option>Western Cape</option>
            </select></td>
          </tr>
	      <tr>
	        <td><label for="Minprice"></label>
	          <select name="Minprice" id="Minprice">
	            <option>Minimum Price</option>
	            <option>R 10,000</option>
	            <option>R15,000</option>
	            <option>R 20,000</option>
	            <option>R 30,000</option>
	            <option>R50,000</option>
	            <option>R 75,000</option>
	            <option>R 100,000</option>
	            <option>R125,000</option>
	            <option>R 150,000</option>
            </select></td>
          </tr>
	      <tr>
	        <td><label for="maxprice"></label>
	          <select name="maxprice" id="maxprice">
	            <option>Maximum Price</option>
	            <option>R 10,000</option>
	            <option>R15,000</option>
	            <option>R 20,000</option>
	            <option>R 30,000</option>
	            <option>R50,000</option>
	            <option>R 75,000</option>
	            <option>R 100,000</option>
            </select></td>
          </tr>
	      <tr>
	        <td> <input type="submit" name="search" id="search" value="Search" /></td>
          </tr>
        </table>
<p>&nbsp;</p>
	  <p>&nbsp;</p>
	</form>
   </td>
    <td width="867"><p>&nbsp;</p>
<p></p>
 <a href="order.html">Order</a>
    <a href="update.html">Update</a>
    <a href="view.php">View</a>
   <a href="CAR GALLERY.html">Car Gallery</a>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
    <?php
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$dob = $_POST['DOB'];
		$phonen = $_POST['phonen'];
		$email = $_POST['email'];
		$type = $_POST['type'];
		$carname = $_POST['carname'];
		
		if(!$name || !$surname || !$dob || !$phonen || !$email)
		{
			
			
			echo 'fill all the required fields';
			exit;
			
		}
		
		echo '<h1>Your order is as follows:</h1>';
		echo '<p>your name: '. $name.'</p>';
		echo'<p>surname : '. $surname.'</p>';
		echo'<p>Date of Birth :'. $dob.'</p>';
		echo'<p>phone number :'. $phonen.'</p>';
		echo'<p>Email address :'. $email.'</p>';
		echo'<p>Type of car :'. $type.'</p>';
		echo'<p>Name of the car :'. $carname.'</p>';

	
	
	
	?>
    <form id="form1" name="form1" method="post" action="update.html">
      <input type="submit" name="button" id="button" value="update order" />
      
    </form>
    <form id="form2" name="form2" method="post" action="Cancel.php">
      <input type="submit" name="button" id="button" value="Cancel order" />
    </form>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
   <td colspan="2" bgcolor="#FFCC33"><?php require_once('footer.php');?></td>
  </tr>
</table>



</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<table width="900" border="1" align="center">
  <tr>
    <td colspan="2"><?php require_once('header.php');?></td>
  </tr>
  <tr>
    <td height="61" colspan="2" align="center" bgcolor="#FFCC00">  </td>
  </tr>
  <tr>
    <td width="253"  bgcolor="#FFCC00"><?php require_once('sideBar.php');?>
     
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
   

   +</td>
    <td width="631">
    <a href="order.html">Order</a>
    <a href="update.html">Update</a>
    <a href="view.php">View</a>
    <a href="CAR GALLERY.html">Car Gallery</a>
 <style>
 	#details label {
		display:block;
		position:relative;
		margin:12px 0;
	}
	#details input {
		position:absolute;
		left:100px;
	}
	#carname {
		displsy:
	}
 </style>
      <form id="form2" name="form2" method="post" action="view.php">
        <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Place your order here</h1>
        <fieldset id="details">
         <legend><span>your details</span></legend>
         <label>
          Name
          <input type="text" name="name" id="nameinput" />
         </label>
         <label>
          Surname
          <input type="text" name="surname" id="nameinput" />
         </label>
         <label>
          Date Of Birth
          <input type="text" name="DOB" id="nameinput" />
         </label>
         
         <label>
          Phone Number
          <input type="text" name="phonen" id="phoneinput" />
         </label>
         <label>
          Email
          <input type="text" name="email" id="emailinput" />
         </label>
         <p>&nbsp;</p>
          <p>&nbsp;</p>
         <fieldset id="cartype">
          <legend>Type of car</legend>
          <label for="used">
           <input type="checkbox" id="used" value="Used" name="used" />
           Used
          </label>
          <label for="New">
           <input type="checkbox" id="new" value="new" name="new" />
           New
          </label>
         </fieldset>
         
         
         <p>&nbsp;</p>
         <p>&nbsp;</p>
         <fieldset id="carname">
          <legend>Name Of Car</legend>
          <label for="Honda">
           <input type="radio" id="honda" value="honda" name="honda"/>
           Honda
          </label>
          <label for="peogeut">
           <input type="radio" id="peogeut" value="peogeut" name="peogeut"/>
            peogeut
          </label>
          <label for="Marcedez benz">
           <input type="radio" id="Marcedez benz" value="Marcedez benz" name="Marcedez benz"/>
            Marcedez benz
          </label>
          <label for="Toyota Corolla">
           <input type="radio" id="Toyota Corolla" value="Toyota Corolla" name="Toyota Corolla"/>
            Toyota Corolla
          </label>
          <label for="VW Polo">
           <input type="radio" id="VW Polo" value="VW Polo" name="VW Polo"/>
            VW Polo
          </label>
          <label for="Toyota Etios">
           <input type="radio" id="Toyota Etios" value="Toyota Etios" name="Toyota Etios"/>
           Toyota Etios
          </label>
          <label for="Hyundai">
           <input type="radio" id="Hyundai" value="Hyundai" name="Hyundai"/>
            Hyundai
          </label>
          <label for="VW Golf">
           <input type="radio" id="VW Golf" value="VW Golf" name="VW Golf"/>
            VW Golf
          </label>
          
          
          
          
          
      
         </fieldset>
          <p>&nbsp;</p>
         
         </fieldset>
        
         <fieldset id="submitbutton">
         	<input type="submit" value="submit order" />
         </fieldset>
      </form>
      
 <?php
  
  if(!$_REQUEST['name'])
  { 
     echo 'enter all values';
	 exit;
  }
 
require 'Order.class.php';
$obj = new Order();
$obj->Pur($_POST['name']);

?> 
         
      
    
    <p>&nbsp;</p></td>
  </tr>
  <tr>
  
    <td colspan="2" bgcolor="#FFCC33">&nbsp;</td>
  </tr>
</table>














</body>
</html>

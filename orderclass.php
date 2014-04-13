<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 


class Order
{
  

public function Pur($order)
{
$conn= new mysqli('localhost','CarDistributions');


if(!$conn)
{
echo' connection failed';
exit;
}


$query="insert into orders values(null,'".$order."');";

$results=$conn->query($query);

if(!$results)
{
echo 'query failed';
exit;
}
else
{
  require_once("oder.php");
}


}
}

?>





</body>
</html>
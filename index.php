<?php
session_start();
include 'header.html';
include_once("config.php");




//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reserve your hotel</title>
	<link href="style/style.css" rel="stylesheet" type="text/css">
</head>
<body>


<h1 align="center">Make a Reservation </h1>
<p align="center" "center">Top destinations</p>
 <!-- View Cart Box Start -->
<?php
if(isset($_SESSION["hotelRes"]) && count($_SESSION["hotelRes"])>0)


{
	echo '<div class="cart-view-table-front" id="view-cart">';
	echo '<h3>Your Reservation</h3>';
	echo '<form method="post" action="cart_update.php">';
	echo '<table width="100%"  cellpadding="6" cellspacing="0">';
	echo '<tbody>';

	$total =0;
	$b = 0;
	foreach ($_SESSION["hotelRes"] as $cart_itm)
	{
		$product_name = $cart_itm["product_name"];
		$product_qty = $cart_itm["product_qty"];
		$product_price = $cart_itm["product_price"];
		$product_code = $cart_itm["product_code"];
		$product_startdate = $cart_itm["product_startdate"];
				//$product_color = $cart_itm["product_color"];
        $product_room=$cart_itm["product_room"];
		$bg_color = ($b++%2==1) ? 'odd' : 'even'; //zebra stripe
		echo '<tr class="'.$bg_color.'">';
		echo '<td>no of days <input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
        echo '<td>no of rooms <input type="text" size="2" maxlength="2" name="product_room['.$product_code.']" value="'.$product_room.'" /></td>';
        echo '<td>Start Date <input type="date"  max="2300-12-31" name="product_startdate['.$product_startdate.']" value="'.$product_startdate.'"/></td>';
        echo '<td>'.$product_name.'</td>';
		echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /> Remove</td>';
		echo '</tr>';

		$subtotal = ($product_room * $product_price * $product_qty);
		$total = ($total + $subtotal);
	}
	echo '<td colspan="4">';
	echo '<button type="submit">Update</button><a href="view_cart.php" class="button">Checkout</a>';
	echo '</td>';
	echo '</tbody>';
	echo '</table>';
	
	$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
	echo '</form>';
	echo '</div>';

}
?>
<!-- View Cart Box End -->


<!-- Products List Start -->
<?php
$results = $mysqli->query("SELECT product_code, product_name, product_desc, product_img_name, price FROM package ORDER BY id ASC");
if($results){ 
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
	<li class="product">
	<form method="post" action="cart_update.php">
	<div class="product-content"><h3>{$obj->product_name}</h3>
	<div class="product-thumb"><img src="images/{$obj->product_img_name}"></div>
	<div class="product-desc">{$obj->product_desc}</div>
	<div class="product-info">
	Price {$currency}{$obj->price} 
	
	<fieldset>


	
	<label>
		<span>No of days</span>
		<input type="text" size="2" maxlength="2" name="product_qty" value="1" />
	</label>
	<label>
		<span>No of rooms</span>
		<input type="text" size="2" maxlength="2" name="product_room" value="1" />
	</label>
	<label>
		<span>Enter Start date</span>
		<input type="date" name="product_startdate" max="2300-12-31">
		</label>

	
	</fieldset>
	<input type="hidden" name="product_code" value="{$obj->product_code}" />
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="return_url" value="{$current_url}" />
	<div align="center"><button type="submit" class="add_to_cart">Book Now</button></div>
	</div></div>
	</form>
	</li>
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>    
<!-- Products List End -->
</body>
</html>



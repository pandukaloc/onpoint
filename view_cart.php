<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Conform reservation</title>
<link href="style/style.css" rel="stylesheet" type="text/css"></head>
<body>
<h1 align="center">View Cart</h1>
<div class="cart-view-table-back">
<form method="post" action="cart_update.php">
<table width="100%"  cellpadding="7" cellspacing="0"><thead><tr><th>No Of days</th><th>No Of Rooms</th><th>Hotel Name</th><th>Price</th><th>Total</th><th>Remove</th></tr></thead>
  <tbody>
 	<?php
	if(isset($_SESSION["hotelRes"])) //check session var
    {
		$total = 0; //set initial total value
		$b = 0; //var for zebra stripe table 
		foreach ($_SESSION["hotelRes"] as $cart_itm)
        {
			//set variables to use in content below
			$product_name = $cart_itm["product_name"];
			$product_qty = $cart_itm["product_qty"];
			$product_price = $cart_itm["product_price"];
			$product_code = $cart_itm["product_code"];
            $product_startdate = $cart_itm["product_startdate"];
			//$product_color = $cart_itm["product_color"];
			$product_room=$cart_itm["product_room"];
			$subtotal = ($product_price * $product_qty*$product_room); //calculate Price x Qty
			
		   	$bg_color = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe 
		    echo '<tr class="'.$bg_color.'">';
			echo '<td><input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
			echo '<td> <input type="text" size="2" maxlength="2" name="product_room['.$product_code.']" value="'.$product_room.'" /></td>';
			echo '<td>'.$product_name.'</td>';
			echo '<td>'.$currency.$product_price.'</td>';
			echo '<td>'.$currency.$subtotal.'</td>';
			echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /></td>';
            echo '</tr>';
			$total = ($total + $subtotal); //add subtotal to total var
        }



	}
    ?>



    <tr><td colspan="7"><span style="float:right;text-align: right;">Total Amount Payable : $ <?php echo sprintf("%01.2f",$total);?></span></td></tr>

    <tr><td colspan="7"><a href="index.php" class="button">Add More Bookings</a><button type="submit">Update</button>

            <button id="myBtn" align >Confirm</button>

            <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">×</span>
                <p>Do you want to conform your reservation</p>
                <button onclick="myFunction()">Ok</button>

            </div>
        </div>
        <script>
            function myFunction() {
                window.alert("Your conformation Mail send to your Email");
            }
            var modal = document.getElementById('myModal');
            var btn = document.getElementById("myBtn");
            var span = document.getElementsByClassName("close")[0];
            btn.onclick = function() {
                modal.style.display = "block";
            }
            span.onclick = function() {
                modal.style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script></td></tr>

  </tbody>
</table>
<input type="hidden" name="return_url" value="<?php 
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
echo $current_url; ?>" />
</form>
</div>









</body>
</html>

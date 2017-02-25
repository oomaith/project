<?php include("art-header.inc.php");
include('art-data.php');
function outputCartRow($file, $product, $quantity, $price) {

/*
          <tr>
          <td><img class="img-thumbnail" src="images/art/tiny/116010.jpg" alt="..."></td>
          <td>Artist Holding a Thistle</td>
          <td>3</td>
          <td><?php echo "$".number_format("$price", 2); ?></td>
          <td>$1000</td>
          </tr>
*/

$subtotal = $quantity * $price;

echo "
          <tr>
          <td><img class=\"img-thumbnail\" src=\"$file\" alt=\"...\"></td>
          <td>$product</td>
          <td>$quantity</td>
          <td>$" ,number_format($price, 2) , "</td>
          <td>$" , number_format($subtotal, 2) , "</td>
          </tr>
";
}
?>
<div class="container">
    <div class="page-header">
      <h2>View Cart</h2>
   </div>
  <table class="table table-condensed">
      <tr>
         <th>Image</th>
      <th>Product</th>
      <th>Quantity</th>
       <th>Price</th>
         <th>Amount</th>
       </tr>
      <tr>
<!--         <td><img class="img-thumbnail" src="images/art/tiny/116010.jpg" alt="..."></td>
             <td>Artist Holding a Thistle</td>
             <td>3</td>
             <td></td>
             <td>$1000</td>
             </tr>
             <tr>
             <td><img class="img-thumbnail" src="images/art/tiny/113010.jpg" alt="..."></td>
             <td>Self-portrait in a Straw Hat</td>  
             <td> $700 </td>
             <td>$700</td>
             </tr> 
-->
<?php
outputCartRow($file1, $product1, $quantity1, $price1);
outputCartRow($file2, $product2, $quantity2, $price2);
?>

<?php 
$subtotalAll = ($price1 * $quantity1) + ($price2 * $quantity2);
$tax = $subtotalAll * .10;
$shipping = 100;
if($subtotalAll > 2000) $shipping = 0;
$grand_total = $subtotalAll + $tax + $shipping;
?>
   
        <tr class="success strong">
          <td colspan="4" class="moveRight">Subtotal</td>
          <td>$ <?php echo number_format($subtotalAll, 2); ?></td>
       </tr>
       <tr class="active strong">
        <td colspan="4" class="moveRight">Tax</td>
        <td>$ <?php echo number_format($tax, 2); ?></td>
        </tr>  
        <tr class="strong">
        <td colspan="4" class="moveRight">Shipping</td>
         <td>$ <?php echo number_format($shipping, 2); ?></td>
        </tr> 
        <tr class="warning strong text-danger">
         <td colspan="4" class="moveRight">Grand Total</td>
          <td>$ <?php echo number_format($grand_total, 2); ?></td>
        </tr> 
        <tr>
        <td colspan="4" class="moveRight">
         <button type="button" class="btn btn-primary" >Continue Shopping</button></td>
          <td><button type="button" class="btn btn-success" >Checkout</button></td>
        </tr>
     </table> 
</div>  <!-- end container -->


<?php include("art-footer.inc.php")?>

<?php 

$customerName = $_POST['custname'];
$state = $_POST['cstate'];
$payment = $_POST['paymentMethod'];
$qty = $_POST['quantity'];

foreach($qty as $key => $val){
    $i=sizeof($qty); 
}

for ($k=0; $k <= $i-3; $k=$k+4) 
{
     $product_one = $qty[$k];
     $product_two = $qty[$k+1];
     $product_three = $qty[$k+2];
     $product_four = $qty[$k+3];
}

?>
<h2>Welcome to MotoHub Services (Billing Section)</h2>
<p>Customer Name: <?php echo $customerName; ?> <br>
State : <?php echo $state;?> <br>
   Payment Method : <?php echo $payment; ?>
</p>
 <table border="1" style="border-collapse:collapse;">
           <tr>
               <th>Product Name</th>
               <th>Price</th>
               <th>Quantity</th>
               <th>Total Price</th>
           </tr>
           <tr>
               <td>Transmission</td>
               <td>TK 10000</td>
               <td align="center"><?php echo $product_one; ?></td>
               <td>TK <?php $p_one =$product_one*1000; echo $p_one; ?></td> total price that is multiplication of quantity and price -->
           </tr>
           <tr>
            <td>Battery</td>
            <td>TK 15000</td>
            <td align="center"><?php echo $product_two; ?></td>
            <td>TK <?php $p_two = $product_two*15000; echo $p_two; ?></td>
           </tr>
            <tr>
            <td>Radiator</td>
            <td>TK 4000</td>
            <td align="center"><?php echo $product_three; ?></td>
            <td>TK <?php $p_three=$product_three*4000; echo $p_three; ?></td>
           </tr>
            <tr>
            <td>Front Axel</td>
            <td>TK 7000</td>
            <td align="center"><?php echo $product_four; ?></td>
            <td>TK <?php $p_four=$product_four*7000; echo $product_four*7000; ?></td>
           </tr>
           <tr>
               <td colspan="2"></td>
               <td>Billing Amount:</td>
               <td>TK <?php echo $p_one+$p_two+$p_three+$p_four; ?> </td>
           </tr>		  
	 
       </table>
			<a href="home.html">back to home</a>
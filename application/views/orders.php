<div class="container">
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th style="width:1%; " scope=""><center>Order #<center></th>
      <th style="width:1%"scope="col">Name</th>
      <th style="width:1%" >Quantity</th>
      <th style="width:1%">Subtotal</th>
      
    </tr>
  </thead>
  <tbody>
    <?php foreach($orders as $order): ?>
    <tr>
      <td style="text-align:center"><strong><?php echo $order['order_id']; ?></strong></td>
      <td><?php echo $order['name'];  ?></td>
      <td><?php echo $order['quantity']; ?></td>
      <td><?php echo $order['subtotal']; ?></td>
      
    </tr>
    <?php endforeach; ?>
    
  </tbody>
</table>
</div>
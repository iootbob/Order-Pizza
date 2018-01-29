<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping_cart extends CI_Controller {
 

 function add()
 {
  $this->load->library("cart");
  $data = array(
   "id"  => $_POST["product_id"],
   "name"  => $_POST["product_name"],
   "qty"  => $_POST["quantity"],
   "price"  => $_POST["product_price"]
  );
  $this->cart->insert($data); //return rowid 
  echo $this->view();
 }

 function load()
 {
  echo $this->view();
 }

 function remove()
 {
  $this->load->library("cart");
  $row_id = $_POST["row_id"];
  $data = array(
   'rowid'  => $row_id,
   'qty'  => 0
  );
  $this->cart->update($data);
  echo $this->view();
 }

 function clear()
 {
  $this->load->library("cart");
  $this->cart->destroy();
  echo $this->view();
 }
 
 function view()
 {
  $this->load->library("cart");
  
  $output = '';
  $output .= '
  
  <div class="table-responsive">
   
    
   
   <br />
   <table class="table table-bordered">
    <tr>
     <th width="40%">Name</th>
     <th width="5%">Qty</th>
     <th width="25%">Price</th>
     <th width="15%">Total</th>
     <th width="15%">Action</th>
    </tr>

  ';
  $count = 0;
  foreach($this->cart->contents() as $items)
  {
   $count++;
   $output .= '
   <tr> 
    <td>'.$items["name"].'</td>
    <td><input class="special_field" id="'.$items["rowid"].'"  type="text" value="'.$items["qty"].'"></input></td>
    <td>Php '.$items["price"].'</td>
    <td>'.$items["subtotal"].'</td>
    <td><button style="width:100%" type="button" name="remove" class="btn btn-outline-danger btn-xs remove_inventory icon-trash" id="'.$items["rowid"].'">Remove</button>
    <button style="width:100%" id="update"  type="button"  name="update" class="btn btn-outline-primary update_inventory icon-edit" data-productid="'.$items["rowid"].'">Update</button></td>
    
   </tr>
   
   ';
  }
  $output .= '
   <tr>
    <td colspan="4" align="right">Total</td>
    <td>Php '.$this->cart->total().'</td>
   </tr>
  </table>

  </div>
  ';

  if($count == 0)
  {
   $output = '<h6 align="center">Cart is Empty</h6>';
  }
  return $output;
 }

 function update(){
  $this->load->library("cart");
// Recieve post values,calcute them and update
 
 
  

  $data = array(
  'rowid' => $product_id = $_POST['product_id'], 
  'qty' =>  $quantity = $_POST['quantity']
   );
   
  $this->cart->update($data);
  echo $this->view();

}

}
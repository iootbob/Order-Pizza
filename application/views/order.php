
<body>


  <div  id="alerts" style="text-align:center; display:none " class="alert alert-danger " role="alert">
    
  </div>

  <div style="text-align:center; display:none" class="alert alert-success add" role="alert">
    
  </div>

  <div style="text-align:center; display:none" class="alert alert-success" id="cleared" role="alert">
    
  </div>

  <div style="text-align:center;display:none" class="alert alert-success" id="clearedRow" role="alert">
  
  </div>

  <?php if($this->session->flashdata('order_made')): ?>
    <div style="text-align:center;" class="alert alert-success" id="ordered" role="alert">
    <h3><?php echo $this->session->flashdata('order_made')?></h3>
    </div>
      <?php endif; ?>


<div id="container" class="orderTable">



<div class="row">
  <div class="col-md-8 " style="margin:0px auto">
<div align="right">
  <a style="width:15%; margin:10px 15px 5px 0px;" href="#" class="btn btn-lg btn-warning  " 
   data-toggle="modal" 
   data-target="#basicModal" >Cart</a>
   <div style="display:none" class="notification"></div>
</div>

  <div id="accordion" role="tablist" aria-multiselectable="true">
    <div class="card">
      <div class="card-header" role="tab" id="headingOne">
        <h5 class="mb-0">
          <a class="collapsed"  data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <center><strong class="links">Classic pizza</strong><center>
          </a>
        </h5>
      </div>

      <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
        <div class="card-block">
          <table class="table table-hover table-responsive " style="text-align:center">
              <thead>
                <tr style="font-size:1.28em">
                    <th>Classic Pizza</th>
                    <th style="font-weight:lighter">10"</th>
                    <th style="font-weight:lighter">14"</th>
                    <th style="font-weight:lighter">18"</th>
                    <th style="font-weight:normal">Quantity</th>
                    <th></th>
                    
                    
                    
                </tr>
              </thead>

              <tbody>
                
              <form action="#" id="orderForm">
                <?php foreach($classics as $classic): ?>
                <tr>
                  <td><strong><?php echo $classic['name']; ?></strong><br> <small><?php echo $classic['summary'] ?></small></td>
                  <div class="size">              
                      <td><input type="radio" name="size" value="<?php echo $classic['small']; ?>" data-toggle="tooltip" data-placement="right" data-animation="true" data-html="true"  title="<h6>Php <?php echo $classic['small'] ?></h6> "  ></td>
                      <td><input type="radio" name="size" value="<?php echo $classic['medium'] ?>" data-toggle="tooltip" data-placement="right" data-animation="true" data-html="true"  title="<h6>Php <?php echo $classic['medium'] ?></h6>" ></td>
                      <td><input type="radio" name="size" value="<?php echo $classic['large'] ?>"  data-toggle="tooltip" data-placement="right" data-animation="true" data-html="true"  title="<h6>Php <?php echo $classic['large'] ?></h6>"></td>
                  </div>
                  <td><input style="width:50%; margin:0px auto"  name="quantity" class="form-control quantity" id="<?php echo $classic['product_id']; ?>" type="text"></td>
                  
                  <td><input class="btn btn-outline-info add_cart" data-productid="<?php echo $classic['product_id']; ?>" data-productname="<?php echo $classic['name'] ?>" data-price="<?php echo $classic['small'] ?>" name="add_cart" type="button" value="Add to cart"></td>
                

                  
                  
                </tr>
                <?php endforeach; ?>
              </form>
              </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" role="tab" id="headingTwo">
        <h5 class="mb-0">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <center><strong class="links" id="sp">Specialty pizza</strong><center>
          </a>
        </h5>
      </div>
      <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="card-block">
        <table class="table table-hover table-responsive " style="text-align:center">
              <thead>
                <tr style="font-size:1.28em">
                    <th ><strong>Specialty</strong> <span style="font-weight:10">Pizza<span></th>
                    <th>10"</th>
                    <th>14"</th>
                    <th>18"</th>
                    <th>Quantity</th>
                    
                    <th></th>
                    
                </tr>
              </thead>

              <tbody>
                
              <form action="#" id="orderForm">
                <?php foreach($specials as $special): ?>
                <tr>
                  <td><strong><?php echo $special['name']; ?></strong><br> <small><?php echo $special['summary'] ?></small></td>
                  <div class="size">              
                      <td><input type="radio" name="size" value="<?php echo $special['small']; ?>" data-toggle="tooltip" data-placement="right" data-animation="true" data-html="true"  title="<h6>Php <?php echo $special['small'] ?></h6> "  ></td>
                      <td><input type="radio" name="size" value="<?php echo $special['medium'] ?>" data-toggle="tooltip" data-placement="right" data-animation="true" data-html="true"  title="<h6>Php <?php echo $special['medium'] ?></h6>" ></td>
                      <td><input type="radio" name="size" value="<?php echo $special['large'] ?>"  data-toggle="tooltip" data-placement="right" data-animation="true" data-html="true"  title="<h6>Php <?php echo $special['large'] ?></h6>"></td>
                  </div>
                  <td><input style="width:50%; margin:0px auto"  name="quantity" class="form-control quantity" id="<?php echo $special['product_id']; ?>" type="text"></td>
                  
                  <td><input class="btn btn-default add_cart" data-productid="<?php echo $special['product_id']; ?>" data-productname="<?php echo $special['name'] ?>" data-price="<?php echo $special['small'] ?>" name="add_cart" type="button" value="Add to cart"></td>
                

                  
                  
                </tr>
                <?php endforeach; ?>
              </form>
              </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" role="tab" id="headingThree">
        <h5 class="mb-0">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <center><strong class="links" id="sp">More Toppings</strong><center>
          </a>
        </h5>
      </div>
      <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
        <div class="card-block">
        <table class="table table-hover table-responsive " style="text-align:center">
              <thead>
                <tr style="font-size:1.28em">
                    <th >More Toppings</th>
                    <th>10"</th>
                    <th>14"</th>
                    <th>18"</th>
                    <th>Quantity</th>
                    
                    <th></th>
                    
                </tr>
              </thead>

              <tbody>
                
              <form action="#" id="orderForm">
                <?php foreach($toppings as $topping): ?>
                <tr>
                  <td><strong><?php echo $topping['name']; ?></strong><br></td>
                  <div class="size">              
                      <td><input type="radio" name="size" value="<?php echo $topping['small']; ?>" data-toggle="tooltip" data-placement="right" data-animation="true" data-html="true"  title="<h6>Php <?php echo $topping['small'] ?></h6> "  ></td>
                      <td><input type="radio" name="size" value="<?php echo $topping['medium'] ?>" data-toggle="tooltip" data-placement="right" data-animation="true" data-html="true"  title="<h6>Php <?php echo $topping['medium'] ?></h6>" ></td>
                      <td><input type="radio" name="size" value="<?php echo $topping['large'] ?>"  data-toggle="tooltip" data-placement="right" data-animation="true" data-html="true"  title="<h6>Php <?php echo $topping['large'] ?></h6>"></td>
                  </div>
                  <td><input style="width:50%; margin:0px auto"  name="quantity" class="form-control quantity" id="<?php echo $topping['product_id']; ?>" type="text"></td>
                  
                  <td><input class="btn btn-default add_cart" data-productid="<?php echo $topping['product_id']; ?>" data-productname="<?php echo $topping['name'] ?>" data-price="<?php echo $topping['small'] ?>" name="add_cart" type="button" value="Add to cart"></td>
                

                  
                  
                </tr>
                <?php endforeach; ?>
              </form>
              </tbody>
          </table>
        </div>
      </div>
    </div>
    
  </div>  
  
        
  </div>
</div>





<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h3>Pizza Cart</h3><br />
            
            </div>
            <div class="modal-body">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div id="cart_details">
                <h3 align="center">Cart is Empty</h3>
                </div>
              </div>
              </div>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-default" data-dismiss="modal">Close</button>
                
                <div id="saveButton">
                <button href="#" class="btn btn-warning " data-toggle="modal" data-target="#clearCart" type="button" id="clear_cart" class="btn btn-outline-warning">Clear Cart</button>
                <form style="display:inline-block" method="POST" action="<?php echo base_url()?>order/setOrder">
                <input  type="submit" class="btn btn-outline-primary" value="Order">
                </form>
                </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="clearCart" tabindex="-1" role="dialog" aria-labelledby="clearCart" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
              <p style="text-align:center">Are you sure you want to clear the cart?</p><br />
            </div>
            
            <div class="modal-footer" style="margin:0px auto">
                <button type="button" class="btn btn-primary" id="clear">Clear</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                
        </div>
    </div>
  </div>
</div>




     
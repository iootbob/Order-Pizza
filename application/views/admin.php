
<body>

<div class="container-fluid">
<table style="width:70%" class="table table-hover">
  <thead>
    <tr>
      <th style="width:5%">#</th>
      <th style="width:28%">Classic Pizza</th>
      <th style="width:15%">10"</th>
      <th style="width:15%">14"</th>
      <th >18"</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($classics as $classic): ?>
    <tr>
      <th scope="row"><?php echo $classic['id'] ?></th>
      <td><?php echo $classic['name'] ?></td>
      <td>Php <?php echo $classic['small'] ?></td>
      <td>Php <?php echo $classic['medium'] ?></td>
      <td>Php <?php echo $classic['large'] ?></td>
      <td><button id="<?php echo $classic['product_id'] ?>" style="width:100%;"  class="btn btn-primary updateClassic" data-toggle="modal" data-target="#updateModal">Edit</button><td>
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<br>

<table style="width:70%" class="table table-hover">
  <thead>
    <tr>
      <th style="width:5%">#</th>
      <th style="width:28%">Special Pizza</th>
      <th style="width:15%">10"</th>
      <th style="width:15%">14"</th>
      <th >18"</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($specials as $special): ?>
    <tr>
      <th scope="row"><?php echo $special['id'] ?></th>
      <td><?php echo $special['name'] ?></td>
      <td>Php <?php echo $special['small'] ?></td>
      <td>Php <?php echo $special['medium'] ?></td>
      <td>Php <?php echo $special['large'] ?></td>
      <td><button id="<?php echo $special['product_id'] ?>" style="width:100%;"  class="btn btn-primary updateSpecial" data-toggle="modal" data-target="#updateModalSpecial">Edit</button><td>
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>

<br>

<table style="width:70%" class="table table-hover">
  <thead>
    <tr>
      <th style="width:5%">#</th>
      <th style="width:28%">Topping Pizza</th>
      <th style="width:15%">10"</th>
      <th style="width:15%">14"</th>
      <th >18"</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($toppings as $topping): ?>
    <tr>
      <th scope="row"><?php echo $topping['id'] ?></th>
      <td><?php echo $topping['name'] ?></td>
      <td>Php <?php echo $topping['small'] ?></td>
      <td>Php <?php echo $topping['medium'] ?></td>
      <td>Php <?php echo $topping['large'] ?></td>
      <td><button id="<?php echo $topping['product_id'] ?>" style="width:100%;"  class="btn btn-primary updateTopping" data-toggle="modal" data-target="#updateModalTopping">Edit</button><td>
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>

<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <form action="<?php echo base_url() ?>order/update" id="pizza_form" method="post">
          <center><h6 id="pizza_type">Pizza Type</h6></center>
          <input type="hidden" id="item_id" name="item_id" value="">
          <div class="form-group row">
            <div class="col-md-4">
            <label for="small" class="form-control-label">10"</label>
            <input type="text" name="small" class="form-control" id="small-price" value="" >
            </div>
          
            <div class="col-md-4">
            <label for="medium" class="form-control-label">14"</label>
            <input type="text" name="medium" class="form-control" id="medium-price" value="" >
          </div>

            <div class="col-md-4">
            <label for="large" class="form-control-label">18"</label>
            <input type="text" name="large" class="form-control" id="large-price" value="" >
            </div>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" name="action" value="Edit" class="btn btn-warning">Edit Price</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" id="updateModalSpecial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <form action="<?php echo base_url() ?>order/updateSpecial" id="pizza_form" method="post">
          <center><h6 id="pizza_type">Special Pizza</h6></center>
          <input type="hidden" id="item_idSpecial" name="item_idSpecial" value="">
          <div class="form-group row">
            <div class="col-md-4">
            <label for="small" class="form-control-label">10"</label>
            <input type="text" name="small" class="form-control" id="small-priceSpecial" value="" >
            </div>
          
            <div class="col-md-4">
            <label for="medium" class="form-control-label">14"</label>
            <input type="text" name="medium" class="form-control" id="medium-priceSpecial" value="" >
          </div>

            <div class="col-md-4">
            <label for="large" class="form-control-label">18"</label>
            <input type="text" name="large" class="form-control" id="large-priceSpecial" value="" >
            </div>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" name="action" value="Edit" class="btn btn-warning">Edit Price</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" id="updateModalTopping" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <form action="<?php echo base_url() ?>order/updateTopping" id="pizza_form" method="post">
          <center><h6 id="pizza_type">Topping Pizza</h6></center>
          <input type="hidden" id="item_idTopping" name="item_idTopping" value="">
          <div class="form-group row">
            <div class="col-md-4">
            <label for="small" class="form-control-label">10"</label>
            <input type="text" name="small" class="form-control" id="small-priceTopping" value="" >
            </div>
          
            <div class="col-md-4">
            <label for="medium" class="form-control-label">14"</label>
            <input type="text" name="medium" class="form-control" id="medium-priceTopping" value="" >
          </div>

            <div class="col-md-4">
            <label for="large" class="form-control-label">18"</label>
            <input type="text" name="large" class="form-control" id="large-priceTopping" value="" >
            </div>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" name="action" value="Edit" class="btn btn-warning">Edit Price</button>
      </div>
    </form>
    </div>
  </div>
</div>





   
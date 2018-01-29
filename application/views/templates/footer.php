
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src=" <?php echo base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.bundle.js"></script>
         
      



<script>
$(document).ready(function() {
    $(".alert").alert()
    
    $("#cleared").hide();
    var countCart = <?php echo  count($this->cart->contents()); ?>;

    if(countCart == 0){
      $("#saveButton").hide();
      $(".notification").css("display","none");
    }
    

    $('[data-toggle="tooltip"]').tooltip()
});


</script>   

<script>
$(document).ready(function(){
  var countCart = <?php echo  count($this->cart->contents()); ?>;

  

  $("#ordered").slideDown(500).delay(2500).slideUp(500).html("<strong>Thank You!</strong> Your order is being processed!");

  $('.notification').html(countCart);
 $('.collapsed').click(function(){
  $('[name=size]:checked').prop('checked', false);
 });
 $('.links').mouseenter(function(){
  $(this).animate({
    fontSize: "1.35em"
  },80);
 }).mouseleave(function(){
  $(this).animate({
    fontSize: "1em"
  },80);
 });
 

 $('.add_cart').click(function(){  
      
        
  var price = $('[name=size]:checked').val();
  var product_id = $(this).data("productid");
  var product_name = $(this).data("productname");
  var product_price = price;
  var quantity = $('#' + product_id).val();



  if(quantity != '' && quantity > 0 )
  {
   $.ajax({
    url:"<?php echo base_url(); ?>shopping_cart/add",
    method:"POST",
    data:{product_id:product_id, product_name:product_name, product_price:product_price, quantity:quantity},
    success:function(data)
    {
     
     $(window).scrollTop(0);
     $(".add").slideDown(500).delay(2500).slideUp(500).html("<strong>Success!</strong> Your item has been added to the Pizza Cart!");
     $('#cart_details').html(data);
     $('#' + product_id).val('');
     $("#saveButton").css("display","inline");
     $('[name=size]:checked').prop('checked', false);

     countCart += 1;
     $('.notification').html(countCart);
      
     if($(".notification").css("display") == "none"){
     $(".notification").css("display","inline");
     }  
      
     
    }
   });
  }
  else
  {
   $(window).scrollTop(0);
   $(".alert-danger").slideDown(500).delay(2500).slideUp(500).html("<strong>Error!</strong> Please enter Quantity.");
                    
                  
  }
 });

 $("#cart_details").on("click","#update", function(){
  var price = $('[name=size]:checked').val();
  var product_id = $(this).data("productid");
  
  //var product_price = price;
  var quantity = $('#' + product_id).val();

  if(quantity != '' && quantity > 0 )
  {
   $.ajax({
    url:"<?php echo base_url(); ?>shopping_cart/update",
    method:"POST",
    data:{product_id:product_id, quantity:quantity},
    success:function(data){
    $('#cart_details').html(data);
    
    }
  });
  }
});

 $('#cart_details').load("<?php echo base_url(); ?>shopping_cart/load");

 $(document).on('click', '.remove_inventory', function(){
  var row_id = $(this).attr("id");
  countCart -= 1;
  $(".notification").html(countCart);

   $.ajax({
    url:"<?php echo base_url(); ?>shopping_cart/remove",
    method:"POST",
    data:{row_id:row_id},
    success:function(data)
    {
     
    
     $("#clearedRow").slideDown(500).delay(2500).slideUp(500).html("<strong>Success!</strong> The item has been removed");
     $('#cart_details').html(data);
     if(countCart == 0){
      $("#saveButton").hide();
      
      $(".notification").css("display","none");
     }
     
     
      
     
    }
   });
  
 
 });


 $(document).on('click', '#clear', function(){
  countCart = 0;
  if(countCart == 0){
    $(".notification").css("display","none");
  }
  
   $.ajax({
    url:"<?php echo base_url(); ?>shopping_cart/clear",
    success:function(data)
    {
     $("#basicModal").modal('hide');
     $("#clearCart").modal('hide');
     $("#cleared").slideDown(500).delay(2500).slideUp(500).html("<strong>Success!</strong> The cart has been cleared");
     $('#cart_details').html(data);
     $("#saveButton").hide();
    }
   });
 });


 /*$(document).on('submit', '#pizza_form',function(event){
  event.preventDefault();

  var small = $("#small-price").val();
  var medium = $("#medium-price").val();
  var large = $('#large-price').val();

  if(small != "" && medium != "" && large != ""){
    $.ajax({
    url:"<?php echo base_url(); ?>order/user_action",
    method: "POST",
    data: new FormData(this),
    contentType: false,
    processData:false,
    success:function(data){
      alert(data);
      $("#pizza_form")[0].reset();
      $("#updateModal").modal('hide');
      
    }
    });
    
  }
 });*/


 $(document).on('click','.updateClassic',function(){

  var item_id = $(this).attr('id');
  $.ajax({
    url:"<?php echo base_url(); ?>order/getItemClassic",
    method: "POST",
    data:{item_id:item_id},
    dataType:"json",
    success:function(data){

      

      $("#updateModal").show();
      $("#small-price").val(data.small);
      $("#medium-price").val(data.medium);
      $("#large-price").val(data.large);
      $("#item_id").val(item_id);
      $("#pizza_type").html('Classic Pizza');
    }
  });

 });

 $(document).on('click','.updateSpecial',function(){

var item_id = $(this).attr('id');

$.ajax({
  url:"<?php echo base_url(); ?>order/getItemSpecial",
  method: "POST",
  data:{item_id:item_id},
  dataType:"json",
  success:function(data){

    

    $("#updateModalSpecial").show();
    $("#small-priceSpecial").val(data.small);
    $("#medium-priceSpecial").val(data.medium);
    $("#large-priceSpecial").val(data.large);
    $("#item_idSpecial").val(item_id);
    
  }
});

});

$(document).on('click','.updateTopping',function(){

var item_id = $(this).attr('id');

$.ajax({
  url:"<?php echo base_url(); ?>order/getItemTopping",
  method: "POST",
  data:{item_id:item_id},
  dataType:"json",
  success:function(data){

    

    $("#updateModalTopping").show();
    $("#small-priceTopping").val(data.small);
    $("#medium-priceTopping").val(data.medium);
    $("#large-priceTopping").val(data.large);
    $("#item_idTopping").val(item_id);
    
  }
});

});

});
</script>

</div>
</body>
</html>
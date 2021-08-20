

@php
    $page_title = "Code of a Pirate";
@endphp

@include('header')

<h2>Products</h2>

<div class="row">
    <div class="responsive col-sm-12 col-md-6">
        <div class="gallery">
          <a target="_blank" href="images/products/cart.png">
            <img src="images/products/cart.png" alt="Forest" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>
      
      <div class="responsive col-sm-12 col-md-6">
        <div class="gallery">
          <a target="_blank" href="images/products/cart.png">
            <img src="images/products/cart.png" alt="Forest" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>
      
      <div class="responsive col-sm-12 col-md-6">
        <div class="gallery">
          <a target="_blank" href="images/products/checkout.png">
            <img src="images/products/checkout.png" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>
      
      <div class="responsive col-sm-12 col-md-6">
        <div class="gallery">
          <a target="_blank" href="images/products/checkout.png">
            <img src="images/products/checkout.png" alt="Mountains" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>
</div>

<div class="clearfix"></div>

@include('footer')
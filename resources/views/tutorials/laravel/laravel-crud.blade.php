

@php
$page_title = "Covid19-Tracker Android App";
@endphp

@include('header')

<div class="container-fluid" style="padding: 0 100px 0 100px;">
  <div class="row">
    <div class="col-sm-12 col-md-6">
      <p class="title">{{ $tutorial->title }}</p>
    </div>
    
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img class="img-thumbnail" src="{{ asset('storage/'.$tutorial->image) }}" alt=""></div>
        <div class="swiper-slide"><img class="img-thumbnail" src="{{ asset('storage/'.$tutorial->image) }}" alt=""></div>
        <div class="swiper-slide"><img class="img-thumbnail" src="{{ asset('storage/'.$tutorial->image) }}" alt=""></div>
      </div>
    
      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    
    </div>

    <div class="col-12" style="margin-bottom: 50px;">

      <table class="table table-data responsive table-hover tbl-features mb50px" width="100%">                               
        <thead>
          <tr>
            <th width='80%'>Features</th> 
            <th width='20%'>Basic</th>
          </tr>      
        </thead> 
        <tbody>  
          <tr>
            <td>Create Product</td> 
            <td><i class="fas fa-check"></i></td>    
          </tr> 
          <tr>
            <td>Read Product</td> 
            <td><i class="fas fa-check"></i></td>     
          </tr>   
          <tr> 
            <td>Update Product</td> 
            <td><i class="fas fa-check"></i></td>  
          </tr>   
          <tr>  
            <td>Delete Product</td> 
            <td><i class="fas fa-check"></i></td>   
          </tr>  
          <tr> 
            <td>Bootstrap User Interface</td> 
            <td><i class="fas fa-check"></i></td>  
          </tr>
          <tr> 
            <td>Multiple delete</td> 
            <td><i class="fas fa-times"></i></td>  
          </tr> 
          <tr> 
            <td>Export / download records to CSV</td> 
            <td><i class="fas fa-times"></i></td>   
          </tr>
          <tr> 
            <td>YajraBox Datatables </td> 
            <td><i class="fas fa-times"></i></td>   
          </tr>   
          <tr> 
            <td>Email support</td> 
            <td><i class="fas fa-check"></i></td>   
          </tr>  
          <tr> 
            <td></td>  
            <td></td> 
          </tr>     
        </tbody>
        
    </table>
    <button style="width: 100%" class="btn btn-success">Download Source Code - ${{ $tutorial->price }}</button>
    </div>
</div>
</div>



<button onclick="topFunction()" id="btn-scroll-up" title="Go to top"><i class="fa fa-angle-up"></i></button>

@include('footer')
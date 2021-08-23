@php
    $page_title = "Code of a Pirate | Products"
@endphp

@include('header')


@if(\Session::has('success'))
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h5><i class="icon fas fa-check"></i> </h5>
  {{ \Session::get('success') }}
</div>      
@endif

<section class="content-header">
  <h1>
     Products
  </h1>
  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Products</li>
  </ol>
</section>

<div class="row">

  <div class="col-sm-2 col-md-2 col-lg-10 mb-3">
    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addProductModal" id="btn-add-product"><span class='fa fa-plus'></span> Add Product</button> 

    </div>

  <div class="col-md-12 col-lg-12">

  <div class="card" style="height: 800px;">
    <div class="card-body"> 
        @if(count($product) > 0) 
            <table class="table table-data responsive  table-hover" id="product-table" width="100%">                               
                <thead>
                    <tr>
                        <th>Title</th> 
                        <th>Description</th> 
                        <th>Category</th>   
                        <th>Price</th>
                        <th>Tutorial link</th>
                        <th>Download link</th>
                        <th style="width: 100px;">Action</th>
                    </tr>
                </thead> 
                
                @foreach ($product as $data)    
                <tbody>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->description }}</td>
                    <td>{{ $data->category }}</td>
                    <td>{{ $data->price }}</td>
                    <td>{{ $data->tutorial_link }}</td>
                    <td>{{ $data->file_path }}</td>
                    <td>
                        <a class="btn btn-sm btn-primary btn-edit" product-id={{ $data->id }} data-toggle="modal" data-target="#editProductModal"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-delete"  delete-id={{ $data->id }}><i style="color:#DC3545;" class="fas fa-trash"></i></a>
                    </td>         
                </tbody>
                @endforeach 
                
            </table>
            @else
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-exclamation-triangle"></i> </h5>No data found
              </div>  
            @endif
          </div>
        </div>
        
       
    </div>
</div>
@extends('admin.modals.product_modal')
@include('admin.footer')
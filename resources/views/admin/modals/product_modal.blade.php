<div id="addProductModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Product</h4>
        </div>
        <div class="modal-body">
            <form action="addProduct" method="POST" enctype="multipart/form-data">

                <div class="row">
                  {{ csrf_field() }}
                  <div class="col-md-12" style="margin-bottom: 15px;">
                    <label class="col-form-label">Title</label>
                    <input class="form-control" name="title" rows="4">
                  </div>
                  <div class="col-md-12" style="margin-bottom: 15px;">
                    <label class="col-form-label">Description</label>
                    <textarea class="form-control" name="description" rows="4"></textarea>
                  </div>
                  <div class="col-md-12" style="margin-bottom: 15px;">
                    <label class="col-form-label">Tutorial link</label>
                    <input type="text" class="form-control" name="tutorial_link">
                  </div>
                  <div class="col-md-12" style="margin-bottom: 15px;">
                    <label class="col-form-label">Direcory</label>
                    <input type="text" class="form-control" name="file_path">
                  </div>
        
                  <div class="col-md-6 mb-2">    
                    <label class="col-form-label">Category</label>
                    <select class="form-control" name="category">
                      
                      @foreach($category as $data)
                    <option value={{ $data->id }}>{{ $data->category }}</option>
                      @endforeach
                    </select>
                  </div>
                  
                  <div class="col-md-6">
                    <label class="col-form-label">Price</label>
                    <input  type="text" step=".01" min="0" class="form-control orig_price" name="price" required onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                  </div>
      
                  <div class="col-md-4" style="margin-top: 15px;">
                    <label class="col-form-label">Upload Photo</label>
                    <input type="file"  name="image" id="image">
                  <div>{{ $errors->first('image') }}</div>
                  </div> 
      
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-sm btn-primary" id="btn-add-product">Save</button>
        </div>
    </form>
      </div>
  
    </div>
  </div>


  <div id="editProductModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Product</h4>
        </div>
        <div class="modal-body">
            <form action="{{action('App\Http\Controllers\Admin\ProductCtr@updateProduct')}}" method="POST" enctype="multipart/form-data">

                <div class="row">
                  {{ csrf_field() }}
                  <input type="hidden" id="product-id" name="product-id">
                  <div class="col-md-12" style="margin-bottom: 15px;">
                    <label class="col-form-label">Title</label>
                    <input class="form-control" name="title" id="title" rows="4">
                  </div>
                  <div class="col-md-12" style="margin-bottom: 15px;">
                    <label class="col-form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="4"></textarea>
                  </div>
                  <div class="col-md-12" style="margin-bottom: 15px;">
                    <label class="col-form-label">Tutorial link</label>
                    <input type="text" class="form-control" name="tutorial_link" id="tutorial_link">
                  </div>
                  <div class="col-md-12" style="margin-bottom: 15px;">
                    <label class="col-form-label">Direcory</label>
                    <input type="text" class="form-control" name="file_path" id="file_path">
                  </div>
        
                  <div class="col-md-6 mb-2">    
                    <label class="col-form-label">Category</label>
                    <select class="form-control" name="category" id="category">
                      
                      @foreach($category as $data)
                        <option value={{ $data->id }}>{{ $data->category }}</option>
                      @endforeach
                    </select>
                  </div>
                  
                  <div class="col-md-6">
                    <label class="col-form-label">Price</label>
                    <input  type="text" step=".01" min="0" class="form-control" name="price" id="price" required onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                  </div>
      
                  <div class="col-md-4" style="margin-top: 15px;">
                    <label class="col-form-label">Update Photo</label>
                    <input type="file"  name="image" id="image">
                  <div>{{ $errors->first('image') }}</div>
                  </div> 

                  <div class="col-md-12" style="margin-top: 15px;">
                    <img id="img_view" class="img-thumbnail" alt="">
                  </div> 
      
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-sm btn-primary" id="btn-add-product">Update</button>
        </div>
    </form>
      </div>
  
    </div>
  </div>


  <!--Confirm Modal-->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Confirmation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="delete-message"></p>
        </div>
        <div class="delete-success" style="display: none;">
          <span style="margin-left:180px;" class="text-success">Deleted Successfully!</span>
          </div>
        <div class="modal-footer">
          <button class="btn btn-sm btn-outline-dark" type="button" id="btn-confirm-delete">Yes</button>
            <button class="btn btn-sm btn-danger cancel-delete" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>



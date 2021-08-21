<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Input;
use Auth;

class ProductCtr extends Controller
{
    public function index () {
        $category = DB::table('tbl_category')->get();
        return view('admin/product',['product' => $this->getAllProducts(), 'category' => $category]);
    }

    public function getAllProducts () {
        return DB::table('tbl_product as P')
                ->select('P.*',  'C.category')
                ->leftJoin('tbl_category AS C', 'C.id', '=', 'P.category_id')
                ->get();
    }

    public function getOneProduct ($id) {
        return DB::table('tbl_product as P')
                ->select('P.*',  'C.category')
                ->leftJoin('tbl_category AS C', 'C.id', '=', 'P.category_id')
                ->where('P.id', $id)
                ->get();
    }

    public function addProduct () {
        $data = Input::all();
        $product = new Product;
        $product->title = $data['title'];
        $product->description = $data['description'];
        $product->category_id = $data['category'];
        $product->price = $data['price'];
        $product->file_path = $data['file_path'];

        $product->save();

        if(request()->hasFile('image')){
            request()->validate([
                'image' => 'file|image|max:5000',
            ]);
        }
        $this->storeImage($product->id);

        return redirect('admin/product')->with('success', 'Data updated successfully');
    }

    public function deleteProduct($id){
        $product = Product::findOrFail($id);
        return $product->delete();
    }

    public function updateProduct(){
        $data = Input::all();
        $product = new Product;
        $product->id = $data['product-id'];
        $product->title = $data['title'];
        $product->description = $data['description'];
        $product->category_id = $data['category'];
        $product->price = $data['price'];
        $product->file_path = $data['file_path'];

        Product::where('id', $product->id)
        ->update([
            'title' => $product->title,
            'description' => $product->description,
            'category_id' => $product->category_id,
            'price' => $product->price,
            'file_path' => $product->file_path,
            ]);

        if(request()->hasFile('image')){
            request()->validate([
                'image' => 'file|image|max:5000',
            ]);
            
        $this->storeImage($product->id);
        }

        return redirect('admin/product')->with('success', 'Data updated successfully');
    }

    public function getDownload($file_path)
    {
        $file_path = public_path(). "/SourceCodes/".$file_path;
        return response()->download($file_path);
    }

    public function storeImage($id){
      
        if(request()->has('image')){
            Product::where('id', $id)
            ->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);
        }
    }
}

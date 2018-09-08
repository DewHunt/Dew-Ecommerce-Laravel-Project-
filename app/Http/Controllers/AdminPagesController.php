<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\ProductImage;
use Image;

class AdminPagesController extends Controller
{
    public function index()
    {
    	return view('admin/pages/index');
    }

    public function productsCreate()
    {
    	return view('admin/pages/product/create');
    }

    public function productsStore(Request $request)
    {
    	$request->validate([
    		'title' => 'required|max:150',
    		'description' => 'required',
    		'price' => 'required|numeric',
    		'quantity' => 'required|numeric',
    	]);
    	
    	// Product Model for Insert Product Information
    	$product = new Product;

    	$product->title = $request->inputProductTitle;
    	$product->description = $request->inputProductDescription;
    	$product->slug = str_slug($request->inputProductTitle);
    	$product->price = $request->inputProductPrice;
    	$product->quantity = $request->inputProductQuantity;

    	$product->category_id = 1;
    	$product->brand_id = 1;
    	$product->admin_id = 1;

    	$product->save();

    	// ProductImage Model for Insert Image Location and Name

    	// if ($request->hasFile('inputProductImage'))
    	// {
    	// 	$image = $request->file('inputProductImage');
    	// 	$image_name = time(). '.' . $image->getClientOriginalExtension();
    	// 	$image_location = public_path('images/products/'.$image_name);

    	// 	Image::make($image)->save($image_location);

    	// 	$productImage = New ProductImage;

    	// 	$productImage->product_id = $product->id;
    	// 	$productImage->image = $image_name;

    	// 	$productImage->save();
    	// }

    	foreach ($request->inputProductImage as $image)
    	{
    		$image_name = time(). '.' . $image->getClientOriginalExtension();
    		$image_location = public_path('images/products/'.$image_name);

    		Image::make($image)->save($image_location);

    		$productImage = New ProductImage;

    		$productImage->product_id = $product->id;
    		$productImage->image = $image_name;

    		$productImage->save();
    	}

    	return redirect()->route('admin.products.create');
    }
}

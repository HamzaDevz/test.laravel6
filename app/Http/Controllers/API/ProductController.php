<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Product;
use Validator;
use App\Http\Resources\Product as ProductResource;

class ProductController extends BaseController
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
$products = Product::all();

return $this->sendResponse(ProductResource::collection($products), 'Products retrieved successfully.');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
    $input = $request->all();


$validator = Validator::make($request->all(), [
'name' => 'required',
'description' => 'required',
'cost' => 'required',
'category' => 'required',
'stock' => 'required',
'barcode' => 'required'
]);

if($validator->fails()){
return $this->sendError('Validation Error.', $validator->errors());
}

$product = Product::create($input);

return $this->sendResponse(new ProductResource($product), 'Product created successfully.');
}

/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
$product = Product::find($id);

if (is_null($product)) {
return $this->sendError('Product not found.');
}

return $this->sendResponse(new ProductResource($product), 'Product retrieved successfully.');
}

/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$input = $request->all();

$product = Product::find($id);

var_dump($input);

$validator = Validator::make($input, [
'name' => 'required',
'description' => 'required',
'cost' => 'required',
'category' => 'required',
'stock' => 'required',
'barcode' => 'required'
]);

if($validator->fails()){
return $this->sendError('Validation Error.', $validator->errors());
}

$product->name = $input['name'];
$product->description = $input['description'];
$product->cost = $input['cost'];
$product->category = $input['category'];
$product->stock = $input['stock'];
$product->barcode = $input['barcode'];
$product->save();

return $this->sendResponse(new ProductResource($product), 'Product updated successfully.');
}

/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy(Product $product)
{
$product->delete();

return $this->sendResponse([], 'Product deleted successfully.');
}
}

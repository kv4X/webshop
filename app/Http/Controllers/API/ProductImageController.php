<?php
namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\ProductImage;
use App\Http\Resources\ProductImage as ImageResource;
use App\Http\Resources\ProductImageCollection;

use App\Http\Requests\API\ProductImageStoreRequest;

class ProductImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('CheckOwnerUploadProductImage')->only('store');
        $this->middleware('CheckOwnerDeleteProductImage')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = ProductImage::paginate(10);
        return new ProductImageCollection($images);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductImageStoreRequest $request)
    {
        $requests = $request->only('product_id', 'image');

        if($files = $request->file('image')) 
        {
           $destinationPath = 'productImages/';
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
        }

        $product = ProductImage::create([
            'product_id' => $requests['product_id'], 
            'name' => $profileImage,
            'url' => $profileImage,
        ]);
        return (new ImageResource($product))->response()->setStatusCode(201);         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function show(ProductImage $image)
    {
        return (new ImageResource($image))->response()->setStatusCode(201);         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductImage $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductImage $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = ProductImage::findOrFail($id);
        $image->delete();        
    }
}

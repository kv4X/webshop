<?php

namespace App\Http\Middleware;

use Closure;
use App\Product;
use App\ProductImage;
use Illuminate\Support\Facades\Auth;

class CheckOwnerDeleteProductImage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $product_id = $request->route()->parameter('image');
        $productImage = ProductImage::find($product_id);
        if($productImage){
            $product = Product::find($productImage->product_id);
            if($product){
                if($product->user_id != Auth::user()->id){
                    return response()->json([
                        'error' => [
                            'message' => "You don't have permission for this action.",
                            'status_code' => 403
                        ]
                    ], 403);                    
                }
            }
        }
        return $next($request);
    }
}

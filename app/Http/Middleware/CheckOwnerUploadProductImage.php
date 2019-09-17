<?php

namespace App\Http\Middleware;
use Closure;
use App\Product;
use Illuminate\Support\Facades\Auth;

class CheckOwnerUploadProductImage
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
        $requests = $request->only('product_id');
        $product = Product::find($requests['product_id']);

        if($product)
        {
            if($product->user_id != Auth::user()->id)
            {
                return response()->json([
                    'error' => [
                        'message' => "You don't have permission for this action.",
                        'status_code' => 403
                    ]
                ], 403);
            }
        }
        else
        {
            return response()->json([
                'error' => [
                    'message' => "Item could not be found.1",
                    'status_code' => 404
                ]
            ], 404);    
        }
        return $next($request);
    }
}

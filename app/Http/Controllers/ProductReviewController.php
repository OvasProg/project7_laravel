<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductReviewController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Product $product)
    {
        $validated = $request->validate([
            'content' => 'required|string',
            'rating'  => 'required|integer|min:1|max:5',
        ]);

        $review = new \App\Models\Review();
        $review->content = $validated['content'];
        $review->rating = $validated['rating'];
        $product->reviews()->save($review);

        return back();
    }
}

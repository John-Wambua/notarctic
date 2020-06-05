<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Wishlist;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //

    public function homePageProducts(){
        $products=Product::all();
        return view('home',compact('products'));
    }

    public function displayByCategory(){

        $category=Category::all();

        return view('category',compact('category'));
    }



    public function productDescription($id){
        $product=Product::where('id',$id)->get();
        return view('view_single_product',compact('product'));
    }

    public function show(Category $category)
    {
        $category->load('products');
//        dd($category);
        return view('specific_category',compact('category'));
    }
    public function addToWishlist(){

        $user_id=request('user_id');
        $product_id= request('product_id');

        $wishlist = Wishlist::where('user_id', $user_id)->first();

        if ($wishlist == null) {
            $wishlist = new Wishlist([
                'user_id' => $user_id
            ]);
            $wishlist->save();

        }

        $wishlistItem = $wishlist->products()->where('product_id', $product_id)->first();

        if ($wishlistItem == null){
            $wishlist->products()->attach($product_id);
        }
        return redirect('/description/'.$product_id);

    }

    public function showWishlist($id)
    {
        $wishlists=\App\Wishlist::where('user_id',$id)->first();

        $products = $wishlists->products;
        return view('wishlist',compact('products'));
//        return $products;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function Home(){
        $products = Product::latest()->paginate(15);
        return view('Home',compact('products'));
    }


    public function AddProduct(Request $request){

        $request->validate(
            [
                'name' => 'required|unique:products',
                'price' => 'required'
            ],
            [
                'name.required'=>'Name is Required',
                'name.unique'=>'Product Alredady Exists',
                'price.required'=>'Price is Required',

            ]
        );

        $proudct = new Product();
        $proudct->name = $request->name;
        $proudct->price = $request->price;
        $proudct->save();
        return response()->json([
            'status'=>'success',
        ]);

    }


    public function UpdateProduct(Request $request){

        $request->validate(
            [
                'up_name' => 'required|unique:products,name,'.$request->up_id,
                'up_price' => 'required'
            ],
            [
                'up_name.required'=>'Name is Required',
                'up_name.unique'=>'Product Alredady Exists',
                'up_price.required'=>'Price is Required',

            ]
        );

        Product::where('id', $request->up_id)->update([
            'name' => $request-> up_name,
            'price' => $request-> up_price,

        ]);
        return response()->json([
            'status'=>'success',
        ]);

    }

    public function About(){
        return view('About');
    }


    public function DeleteProduct(Request $request){
        Product::find($request->product_id)->delete();

        return response()->json([
            'status'=>'success',
        ]);
    }

    public function pagination(Request $request){
        $products = Product::latest()->paginate(15);
        return view('PaginetionPage',compact('products'))->render();
    }

    public function search(Request $request){
        $products = Product::where('name','like','%'.$request->search_string.'%')
        ->orwhere('price','like','%'.$request->search_string.'%')
        ->orderBy('id','desc')
        ->paginate(15);

        if($products->count()>= 1){
            return view('SearchResult', compact('products'))->render();
        }else{
            return response()->json([
                'status' => 'nating_fund',
            ]);
        }
    }
}

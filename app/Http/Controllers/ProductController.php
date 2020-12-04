<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Session;

class ProductController extends Controller
{
    function index(){
        $data = Product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id){
        $data = Product::find($id);
        return view('detail', ['product'=>$data]);
    }

    function search(Request $req){
        $data = Product::where('name','like', '%'.$req->input('query').'%')->get();
        return view('search', ['products'=>$data]);     
    }
    
    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();     
            return redirect('/');
        }else{
            return redirect('login');
        }
    }

    static function cartItem(){
        $user_id = Session::get('user')['id'];
        return Cart::where('user_id', $user_id)->count(); 
    }

    function cartList(){
        $user_id = Session::get('user')['id'];
        $result = DB::table('carts')
        ->join('products', 'carts.product_id', 'products.id')
        ->select('products.*', 'carts.id as cart_id')
        ->where('carts.user_id', $user_id)
        ->get();
        return view('cartlist', ['products'=>$result]);
    }

    function removeCart($id){
        Cart::destroy($id);
        return redirect('/cart_list');
    }

    function orderNow(){
        $user_id = Session::get('user')['id'];
        $result = DB::table('carts')
        ->join('products', 'carts.product_id', 'products.id')
        ->where('carts.user_id', $user_id)
        ->sum('products.price');
        return view('ordernow', ['total'=>$result]);
        // return $result;
    }
}

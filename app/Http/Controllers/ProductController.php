<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use Session;

class ProductController extends Controller
{
    //
    function index()
    {$data=Product::all();
        return view("product",["products"=>$data]);
    }
    function detail($id)
    {
        $data=Product::find($id);
        return view("productDetail",["product"=>$data]);
    }

    function search(Request $req)
    {
        $data=Product::where('name','like',"%".$req->input("query")."%")->get();
        return view("search",["products"=>$data]);

    }
    function  add_to_cart(Request $req)
    {
        if($req->session()->has("user"))
        {
           $data=new Cart();
           $data->user_id=$req->session()->get("user")["id"];
           $data->product_id=$req->input("product_id");
           $data->save();
           return redirect("/");

        }
        else{
            return redirect("login");
        }
    }
   static function cart_item()
    {
        $user_id=Session::get("user")["id"];
        return Cart::where("user_id",$user_id)->count();
    }
    function cartList()
    {
       $user=Session::get("user")["id"];
        $data=DB::table("cart")
            ->join("products","cart.product_id","products.id")
            ->where("cart.user_id",$user)
            ->select("products.*","cart.id as cart_id")
            ->get();
       return view("cartList",["products"=>$data]);

    }
    function remove($id)
    {
        Cart::destroy($id);
        return redirect("cart-list");
    }

    function orderNow()
    {
        $user=Session::get("user")["id"];
        $total=DB::table("cart")
            ->join("products","cart.product_id","products.id")
            ->where("cart.user_id",$user)
            ->sum("products.price");
        return view("orderNow",["total"=>$total]);
    }

    function orderPlace(Request $req)
    {

        $user=Session::get("user")["id"];
        $order=DB::table("cart")
            ->join("products","cart.product_id","products.id")
            ->where("cart.user_id",$user)
            ->get();
        foreach ($order as $item)
        {   $data=new Order();
            $data->user_id=$item->user_id;
            $data->product_id=$item->product_id;
            $data->status="pending";
            $data->payment_method=$req->payment_method;
            $data->payment_status="pending";
            $data->address=$req->address;
            $data->save();
            Cart::where("user_id",$user)->delete();
        }

      return redirect("/");
    }

    function order()
    {
        $user=Session::get("user")["id"];
        $order=DB::table("orders")
            ->join("products","orders.product_id","products.id")
            ->where("orders.user_id",$user)
            ->get();
        return view("order",["products"=>$order]);
    }

}

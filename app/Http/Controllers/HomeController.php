<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\User;

use App\Models\Cart;

use App\Models\Order;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::where('usertype','user')->get()->count();

        $product = Product::all()->count();

        $order = Order::all()->count();

        $delivered = Order::where('status','Delivered')->get()->count();

        return view('admin.index',compact('user','product','order','delivered'));
    }


    public function home()
    {

        $product = Product::all();

        if(Auth::id()){

            $user = Auth::user();

            $userid = $user?->id;
    
            $count = Cart::where('user_id', $userid)->count();
        }
        
        else{

            $count = '';
        }

        return view('home.index',compact('product','count'));
    }

    public function login_home(){

        $product = Product::all();

        if(Auth::id()){

            $user = Auth::user();

            $userid = $user->id;
    
            $count = Cart::where('user_id', $userid)->count();
        }
        
        else{

            $count = '';
        }

        return view('home.index',compact('product','count'));

    }

    public function product_details($id){

        $data = Product::find($id);

        if(Auth::id()){

            $user = Auth::user();

            $userid = $user->id;
    
            $count = Cart::where('user_id', $userid)->count();
        }
        
        else{

            $count = '';
        }

        return view('home.product_details',compact('data','count'));
    }

    public function add_cart($id){

        $product_id = $id;

        $user = Auth::user();

        $user_id = $user->id;

        $data = new Cart;

        $data->user_id = $user_id;

        $data->product_id = $product_id;

        $data->save();

        toastr()->timeOut(10000)->closeButton()->addSuccess('Product Added To The Cart Succesfully');

        return redirect()->back();

    }

    public function mycart()
    {

        

        if(Auth::id())
        {
            $user = Auth::user();

            $userid = $user->id;

            $count = Cart::where('user_id',$userid)->count();

            $counts = Order::where('user_id',$userid)->count();

            $cart = Cart::where('user_id',$userid)->get();
        }
        
        $cart = Cart::paginate(3);
        return view('home.mycart',compact('count','cart','counts'));

    }

    public function delete_cart($id) {
        $data = Cart::find($id);

        if ($data) {
            $data->delete();
            sweetalert()->success('Product Removed Successfully.');
        } else {
            sweetalert()->error('Product not found.');
        }

        return redirect()->back();
    }

    public function confirm_order(Request $request){

        $name = $request->name;

        $address = $request->address;

        $phone = $request->phone;

        $userid = Auth::user()->id;

        $cart = Cart::where('user_id',$userid)->get();

        foreach($cart as $carts){

            $order = new Order;

            $order->name = $name;

            $order->rec_address = $address;

            $order->phone = $phone;

            $order->user_id = $userid;

            $order->product_id = $carts->product_id;

            $order->save();

            
        }

        $cart_remove = Cart::where('user_id',$userid)->get();

        foreach($cart_remove as $remove){

            $data = Cart::find($remove->id);

            $data->delete();
        }

        sweetalert()->success('Product Ordered Successfully.');

        return redirect()->back();
        
    }

    public function myorders()
    {
        $user = Auth::user()->id;
        $count = Cart::where('user_id',$user)->get()->count();
        $order = Order::where('user_id',$user)->get();

        return view('home.order',compact('count','order'));
    }

    public function cancelReset(){
        return view('auth.login');
    }

    

public function product()
    {
        
        $product = Product::all();

        $count = '';
        $counts = null; // Set $counts to null by default
        if(Auth::id())
        {

        $user = Auth::user();

        $userid = $user->id;

        $count = Cart::where('user_id',$userid)->count();

        $counts = Order::where('user_id',$userid)->count();
        }

        
        

        return view('home.shop',compact('product','count','counts'));
    }


    public function about_us()
    {

        $count = '';
        $counts = null; // Set $counts to null by default
        if(Auth::id())
        {

        $user = Auth::user();

        $userid = $user->id;

        $count = Cart::where('user_id',$userid)->count();

        $counts = Order::where('user_id',$userid)->count();
        }

        
        

        return view('home.about_us',compact('count'));
    }

    public function contact_us()
    {

        $count = '';
        $counts = null; // Set $counts to null by default
        if(Auth::id())
        {

        $user = Auth::user();

        $userid = $user->id;

        $count = Cart::where('user_id',$userid)->count();

        $counts = Order::where('user_id',$userid)->count();
        }


        return view('home.contact_us',compact('count'));
    }

    public function privacy_policy()
    {

        $count = '';
        $counts = null; // Set $counts to null by default
        if(Auth::id())
        {

        $user = Auth::user();

        $userid = $user->id;

        $count = Cart::where('user_id',$userid)->count();

        $counts = Order::where('user_id',$userid)->count();
        }


        return view('home.privacy_policy',compact('count'));
    }

}

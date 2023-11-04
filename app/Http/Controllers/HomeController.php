<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Session;
use App\Models\User;
use App\Models\Team;
use App\Models\Order;

class HomeController extends Controller
{
    public function home()
    {
        if(!Session::has('user_id')){
            return redirect('login');
        }
        return view('home');
    }
    public function shop()
    {
        if(!Session::has('user_id')){
            return redirect('login');
        }
        return view('shop');
    }
    public function about()
    {
        if(!Session::has('user_id')){
            return redirect('login');
        }
        $team = Team::all();
        return view('about')->with('teams', $team);
    }
    public function contact()
    {
        if(!Session::has('user_id')){
            return redirect('login');
        }
        return view('contact');
    }
    public function cart()
    {
        if(!Session::has('user_id')){
            return redirect('login');
        }
        return view('cart');
    }

    public function account()
    {
        if(!Session::has('user_id')){
            return redirect('login');
        }
        $user = User::where('id', Session::get('user_id'))->first();
        $user_now = User::find(Session::get('user_id'));
        return view('account')->with('user', $user);//->with('orders', $user_now->orders);
    }

    public function account_data()
    {
        if(!Session::has('user_id')){
            [];
        }
        $user_now = User::find(Session::get('user_id'));
        return $user_now->orders;
    }

    public function account_data_receive($ordId, $useId)
    {
        if(!Session::has('user_id')){
            [];
        }
        $order = Order::where('order_id', $ordId)->where('user_id', $useId);
        $order->delete();
        $user_now = User::find(Session::get('user_id'));
        return $user_now->orders;
    }
}

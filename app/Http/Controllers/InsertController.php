<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\User;
use App\Models\Order;

class InsertController extends Controller
{
    public function insert(){
        if(!Session::get('user_id')){
            return [];
        }
        $user = Session::get('user_id');
        $orderTrovato = Order::where('order_id', request('id'))
                        ->where('user_id', $user)
                        ->get();
        if($orderTrovato->count() <= 0){
            $order = new Order;
            $order->order_id = request('id');
            $order->image = request('image');
            $order->title = request('title');
            $order->price = request('price');
            $order->user_id = Session::get('user_id');
            $order->save();
        }
        return ['message' => 'Done!'];
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request){
        // Create order
        $order = Order::create($request->all());
        
        return 'Succesfull!';
    }
}

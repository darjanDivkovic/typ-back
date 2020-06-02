<?php

namespace App\Http\Controllers\Api;

use App\Kitchen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemsToMakeController extends Controller
{
    public function store(Request $request){
        
        $credentials = $request->input('credentials');
        $itemsToMake = $request->input('itemsToMake');

        foreach($itemsToMake as $item){
            $name = $item['name'];
            $quantity = $item['quantity'];
           
            $result = Kitchen::create([
                'credentials' => $credentials,
                'item' => $name,
                'quantity' => $quantity,
            ]);
        }
    
        return $result;

    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Typ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pizzas = Typ::all();
        
        return response()->json($pizzas);
    }
}

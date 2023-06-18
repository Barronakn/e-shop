<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompteController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $orders = Order::latest()->get();

        return view('compte',[
            'user' => $user,
            'orders' => $orders
        ] );
    }

}

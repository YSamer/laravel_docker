<?php


namespace App\Http\Controllers;

use App\Models\Plan;

class PricingController extends Controller
{
    public function index()
    {
        $pricing = Plan::all();
        return view('pricing', compact('pricing'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(Request $request, $name)
    {
        $plan = Plan::whereName($name)->first();
        return $request->user()
            ->newSubscription('default', $plan->stripe_price_id)
            ->allowPromotionCodes()
            ->checkout([
                'success_url' => route('checkout.success'),
                'cancel_url' => route('checkout.cancel'),
            ]);
    }

    public function success(Request $request)
    {
        return view('checkout-success');
    }
    public function cancel(Request $request)
    {
        return view('checkout-cancel');
    }
}

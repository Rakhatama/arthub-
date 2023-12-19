<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        $checkout = Checkout::all();
        return view('checkout.index', ['checkouts' => $checkout]);
    }

    public function create(){
        return view('checkout.checkout-form');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'email' => 'required|email:dns',
            'nama' => 'required|max:20',
            'alamat' => 'required',
            'order' => 'required',
            'qty' => 'required',
        ]);
        
        $checkout = new Checkout();
        $checkout->email = $validateData['email'];
        $checkout->nama = $validateData['nama'];
        $checkout->alamat = $validateData['alamat'];
        $checkout->order = $validateData['order'];
        $checkout->qty = $validateData['qty'];

        $checkout->save();

        return redirect('checkouts');
    }

}

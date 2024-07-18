<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        return view('cart', [
            'title' => 'Cart',
            'carts' => Auth::user()->cart,
            'iteration' => 1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cart::create([
          'user_id' => Auth::user()->id,
          'book_id' => $request->book,
          'amount' => 1
        ]);
        return redirect()->route('show-cart');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $booksCart = Cart::where('user_id', Auth::user()->id)->get();
        $payments = [];
        $i = 0;
        $total = 0;
        foreach($request->book as $req){
          if(isset($req['id'])){
            if($request->checkout){
              array_push($payments, $req);
              foreach($booksCart as $cart){
                  if($cart['id'] == $req['id']){
                      $payments[$i]['title'] = $cart->book->name;
                      $payments[$i]['cost'] = $cart->book->price;
                      $i++;
                  }
              }
            }elseif($request->delete){
              Cart::destroy($req['id']);
            }
          }
        }
        foreach($payments as $payment){
          $total += ($payment['cost'] * $payment['amount']);
        }

        if($request->checkout){
          return view('paymentdetails', [
              'title' => 'Detail Pembayaran',
              'payments' => $payments,
              'total' => $total
          ]);
        }elseif($request->delete){
          return redirect()->route('show-cart');
        }    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}

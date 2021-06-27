<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseHistory as History;
use App\Models\PurchaseDetail as Detail;
use App\Models\User;
use App\Models\Product;

class PurchaseHistoryController extends Controller
{
    public function index() {
        $items = History::all();
        foreach ($items as $item) {
            $item->products;
            // $item->details;
            // $item->name = $product
            // $item->history;
        //     $test = $item->products[0];
        //     // $item->name = $test[0]->name;
        //     // $item->test = History::find('35a5821e-3cce-41f1-b320-a133dd0d343f')->details;
        //     // $item->users = History::with('user')->get();
        //     // $item->product = Detail::with('product')->get();
        //     // $item->details = Detail::with('PurchaseHistory')->get();
        //     // $item->hasHistory = History::has('PurchaseHistory')->get();
        }


        // $items = History::all();
        // foreach ($items as $item) {
        //     $details = Detail::where('purchase_history_uuid', $item->uuid)->get();
            // foreach($details as $detail) {
            //     $product = Product::where('id',$detail->product_id)->get();
            //     $item->amount = $detail->amount;
            // }
        // }
        return response()->json([
            'data' => $items,
            'mes' =>'ok'
        ], 200);
    }
    public function store(Request $request) {
        $item = History::create($request->all());
        
        return response()->json([
            'data' => $item
        ], 201);
    }
}


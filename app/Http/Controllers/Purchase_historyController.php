<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase_history as History;
use App\Models\purchase_detail as Detail;
use App\Models\User;
use App\Models\Product;

class Purchase_historyController extends Controller
{
    public function index() {
        $items = History::all();
        foreach ($items as $item) {
            $user = User::where('id', $item->user_id)->first();
            $details = Detail::where('history_id', $item->history_id)->get();
            foreach($details as $detail) {
                $product = Product::where('id',$detail->product_id)->get();
                $item->amount = $detail->amount;
            }
        }
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

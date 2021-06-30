<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseHistory as History;

class PurchaseHistoryController extends Controller
{
    public function index() {
        $items = History::all();
        foreach ($items as $item) {
            $item->products;
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


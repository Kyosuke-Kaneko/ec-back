<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseDetail as Detail;
use App\Models\PurchaseHistory as History;
use App\Models\User;
use App\Models\Product;

class PurchaseDetailController extends Controller
{
    public function store(Request $request) {
        $detailData = $request->all();
        foreach ($detailData as $detailDatum) {
            $item = [
                "purchase_history_uuid"=> $detailDatum['purchase_history_uuid'],
                "product_id"=>$detailDatum['product_id'],
                "amount" => $detailDatum['amount']
            ];
            $item = Detail::create($item);
        }
        return response()->json([
            'data' => $detailData,
            'mes' => "作成完了",
        ], 201);
    }
}


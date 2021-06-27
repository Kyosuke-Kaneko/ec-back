<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseDetail as Detail;
use App\Models\PurchaseHistory as History;
use App\Models\User;
use App\Models\Product;

class PurchaseDetailController extends Controller
{
    public function index() {
        $items = Detail::all();
        foreach ($items as $item) {
             $item->user_id = History::find($item->purchase_history_uuid)["user_id"];
            $item->name = Product::find($item->product_id)["name"];
            $item->price = Product::find($item->product_id)["price"];
            $item->header = Product::find($item->product_id)["header"];
            $item->description = Product::find($item->product_id)["description"];
            $item->url = Product::find($item->product_id)["url"];
            $date=date_create($item->created_at);
            $item->orderedDate =  date_format($date,"Y年m月d日");
        }
        
        return response()->json([
            'data' => $items,
            'mes' =>'ok'
        ], 200);
    }
    public function store(Request $request) {
        $detailData = $request->all();
        foreach ($detailData as $detailDatum) {
            $item = [
                //連想配列になってしまっているので書き換える
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


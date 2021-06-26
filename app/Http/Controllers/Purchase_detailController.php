<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\purchase_detail as Detail;
use App\Models\Purchase_history as History;
use App\Models\User;
use App\Models\Product;

class Purchase_detailController extends Controller
{
    public function index() {
        $items = Detail::all();
        foreach ($items as $item) {
            $item->user_id = History::find($item->history_id)["user_id"];
            $item->name = Product::find($item->product_id)["name"];
            $item->price = Product::find($item->product_id)["price"];
            $item->header = Product::find($item->product_id)["header"];
            $item->description = Product::find($item->product_id)["description"];
            $item->url = Product::find($item->product_id)["url"];
            $date=date_create($item->created_at);
            $item->orderedDate =  date_format($date,"Y年m月d日");
        }
        // $items = Detail::all();
        // foreach ($items as $item) {
        //     $history = History::where('history_id',$item->history_id)->get();
        //     $product = Product::where('id',$item->product_id)->get();
        //         $replace = '$1年$2月$3日';
        //         $replacedDate = preg_replace('/(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})/',$replace,$item->created_at);
        //         $item->orderedDate = $replacedDate;
        //         $item->user_id = $history[0]->user_id;
        //         $item->name = $product[0]->name;
        //         $item->price = $product[0]->price;
        //         $item->header = $product[0]->header;
        //         $item->description = $product[0]->description;
        //         $item->url = $product[0]->url;
        // }  
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
                "product_id"=>$detailDatum["product_id"],
                "history_id"=> $detailDatum["history_id"],
                "amount" => $detailDatum["amount"]
            ];
            $item = Detail::create($item);
        }
        return response()->json([
            'mes' => "作成完了",
        ], 201);
    }
}


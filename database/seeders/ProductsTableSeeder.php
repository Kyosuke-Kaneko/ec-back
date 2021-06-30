<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'sandal',
            'price' => 3000,
            'header' => '毎日履きたくなる、スニーカー。',
            'description' => '朝の支度が、格段にラクになる一足。シンプルで飽きのこないチームコートは、クリーンでモダンなデザインが魅力。合わせたいのは、デニムやバギースウェット。スタイリッシュなレザーアッパーとフレッシュなカラーが、どんなコーディネートも引き締めてくれる。もちろん、履き心地の良さも言うことなし。
            ',
            'url' => 'http://127.0.0.1:8000/storage/images/sandal.jpg'
        ];
        DB::table('products')->insert($param);
    }
}

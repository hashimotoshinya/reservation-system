<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Owner;
use App\Models\Area;
use App\Models\Genre;
use App\Models\Shop;


class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner = Owner::first();

        $shops = [
            [
                'name' => '仙人',
                'area_id' => Area::where('name', '東京都')->first()->id,
                'genre_id' => Genre::where('name', '寿司')->first()->id,
                'description' => '料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日のお食事、ビジネス接待まで気軽に使用することができます。',
                'image_path' => 'storage/images/sushi.jpg',
                'owner_id' => $owner->id,
            ],
            [
                'name' => '牛助',
                'area_id' => Area::where('name', '大阪府')->first()->id,
                'genre_id' => Genre::where('name', '焼肉')->first()->id,
                'description' => '焼肉業界で20年間経験を積み、肉を熟知したマスターによる実力派焼肉店。長年の実績とお付き合いをもとに、なかなか食べられない希少部位も仕入れております。また、ゆったりとくつろげる空間はお仕事終わりの一杯や女子会にぴったりです。',
                'image_path' => 'storage/images/yakiniku.jpg',
                'owner_id' => $owner->id,
            ],
            [
                'name' => '戦慄',
                'area_id' => Area::where('name', '福岡県')->first()->id,
                'genre_id' => Genre::where('name', '居酒屋')->first()->id,
                'description' => '気軽に立ち寄れる昔懐かしの大衆居酒屋です。キンキンに冷えたビールを、なんと199円で。鳥かわ煮込み串は販売総数100000本突破の名物料理です。仕事帰りに是非御来店ください。',
                'image_path' => 'storage/images/izakaya.jpg',
                'owner_id' => $owner->id,
            ],
            [
                'name' => 'ルーク',
                'area_id' => Area::where('name', '東京都')->first()->id,
                'genre_id' => Genre::where('name', 'イタリアン')->first()->id,
                'description' => '都会にひっそりと佇む、古民家を改築した落ち着いた空間です。イタリアで修業を重ねたシェフによるモダンなイタリア料理とソムリエセレクトによる厳選ワインとのペアリングが好評です。ゆっくりと上質な時間をお楽しみください。',
                'image_path' => 'storage/images/italian.jpg',
                'owner_id' => $owner->id,
            ],
            [
                'name' => '志摩屋',
                'area_id' => Area::where('name', '福岡県')->first()->id,
                'genre_id' => Genre::where('name', 'ラーメン')->first()->id,
                'description' => 'ラーメン屋とは思えない店内にはカウンター席はもちろん、個室も用意してあります。ラーメンはこってり系・あっさり系共に揃っています。その他豊富な一品料理やアルコールも用意しており、居酒屋としても利用できます。ぜひご来店をお待ちしております。',
                'image_path' => 'storage/images/ramen.jpg',
                'owner_id' => $owner->id,
            ],
            [
                'name' => '香',
                'area_id' => Area::where('name', '東京都')->first()->id,
                'genre_id' => Genre::where('name', '焼肉')->first()->id,
                'description' => '大小さまざまなお部屋をご用意してます。デートや接待、記念日や誕生日など特別な日にご利用ください。皆様のご来店をお待ちしております。',
                'image_path' => 'storage/images/yakiniku.jpg',
                'owner_id' => $owner->id,
            ],
            [
                'name' => 'JJ',
                'area_id' => Area::where('name', '大阪府')->first()->id,
                'genre_id' => Genre::where('name', 'イタリアン')->first()->id,
                'description' => 'イタリア製ピザ窯芳ばしく焼き上げた極薄のミラノピッツァや厳選されたワインをお楽しみいただけます。女子会や男子会、記念日やお誕生日会にもオススメです。',
                'image_path' => 'storage/images/italian.jpg',
                'owner_id' => $owner->id,
            ],
            [
                'name' => 'らーめん極み',
                'area_id' => Area::where('name', '東京都')->first()->id,
                'genre_id' => Genre::where('name', 'ラーメン')->first()->id,
                'description' => '一杯、一杯心を込めて職人が作っております。味付けは少し濃いめです。 食べやすく最後の一滴まで美味しく飲めると好評です。',
                'image_path' => 'storage/images/ramen.jpg',
                'owner_id' => $owner->id,
            ],
            [
                'name' => '鳥雨',
                'area_id' => Area::where('name', '大阪府')->first()->id,
                'genre_id' => Genre::where('name', '居酒屋')->first()->id,
                'description' => '素材の旨味を存分に引き出す為に、塩焼を中心としたお店です。比内地鶏を中心に、厳選素材を職人が備長炭で豪快に焼き上げます。清潔な内装に包まれた大人の隠れ家で贅沢で優雅な時間をお過ごし下さい。',
                'image_path' => 'storage/images/izakaya.jpg',
                'owner_id' => $owner->id,
            ],
            [
                'name' => '築地色合',
                'area_id' => Area::where('name', '東京都')->first()->id,
                'genre_id' => Genre::where('name', '寿司')->first()->id,
                'description' => '鮨好きの方の為の鮨屋として、迫力ある大きさの握りを1貫ずつ提供致します。',
                'image_path' => 'storage/images/sushi.jpg',
                'owner_id' => $owner->id,
            ],
            [
                'name' => '晴海',
                'area_id' => Area::where('name', '大阪府')->first()->id,
                'genre_id' => Genre::where('name', '焼肉')->first()->id,
                'description' => '毎年チャンピオン牛を買い付け、仙台市長から表彰されるほどの上質な仕入れをする精肉店オーナーの本当に美味しい国産牛を食べてもらいたいという思いから誕生したお店です。',
                'image_path' => 'storage/images/yakiniku.jpg',
                'owner_id' => $owner->id,
            ],
            [
                'name' => '三子',
                'area_id' => Area::where('name', '福岡県')->first()->id,
                'genre_id' => Genre::where('name', '焼肉')->first()->id,
                'description' => '最高級の美味しいお肉で日々の疲れを軽減していただければと贅沢にサーロインを盛り込んだ御膳をご用意しております。',
                'image_path' => 'storage/images/yakiniku.jpg',
                'owner_id' => $owner->id,
            ],
            [
                'name' => '八戒',
                'area_id' => Area::where('name', '東京都')->first()->id,
                'genre_id' => Genre::where('name', '居酒屋')->first()->id,
                'description' => '当店自慢の鍋や焼き鳥などお好きなだけ堪能できる食べ放題プランをご用意しております。飲み放題は2時間と3時間がございます。',
                'image_path' => 'storage/images/izakaya.jpg',
                'owner_id' => $owner->id,
            ],
            [
                'name' => '福助',
                'area_id' => Area::where('name', '大阪府')->first()->id,
                'genre_id' => Genre::where('name', '寿司')->first()->id,
                'description' => 'ミシュラン掲載店で磨いた、寿司職人の旨さへのこだわりはもちろん、 食事をゆっくりと楽しんでいただける空間作りも意識し続けております。 接待や大切なお食事にはぜひご利用ください。',
                'image_path' => 'storage/images/sushi.jpg',
                'owner_id' => $owner->id,
            ],
        ];

        foreach ($shops as $shop) {
            Shop::create(array_merge($shop, ['owner_id' => $owner->id]));
        }
    }
}

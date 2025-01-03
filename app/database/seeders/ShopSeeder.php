<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // TODO : 日曜始まり
        $businessDays = [
            ['0','0','0','0','1','0','0'],
            ['0','0','0','0','1','0','0'],
            ['0','0','0','0','1','0','0'],
            ['0','0','0','0','1','0','0'],
            ['0','0','0','0','1','0','0'],
        ];
        $businessHour = [
            'start_time'=>'21:00',
            'end_time'=>'24:00',
            'last_order' => '23:30',
        ];
        Shop::factory()->create([
            'name' => '竜胆ーRINDOUー',
            'title' => '今宵素敵な夜を貴方と',
            'detail' => '当店の名前には\n悲しむ貴方に寄り添う\nそんな言葉が込められています\n悲しいときも貴方に寄り添う\n癒しの場所を\nどうぞ心行くまでお楽しみください',
            'logo' => null,
            'favicon' => null,
            'is_sunday_start' => true,
            'business_days' => json_encode($businessDays),
            'business_hour' => json_encode($businessHour),
        ]);
    }
}

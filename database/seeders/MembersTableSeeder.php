<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembersTableSeeder extends Seeder
{
    public function run()
    {
        // サンプルとなる日本人の氏名（漢字）の配列
        $names = [
            '佐藤太郎', '鈴木花子', '高橋一郎', '田中美咲', '伊藤健一',
            '渡辺直子', '山本次郎', '中村幸子', '小林大輔', '加藤真理',
            '吉田雄一', '山田裕子', '佐々木隆', '山口明子', '斎藤英樹',
            '松本さやか', '井上信一', '木村恵美', '林剛', '清水恭子',
            '山崎智也', '森由美', '阿部正樹', '後藤香織', '村上誠'
        ];

        $genders = ['男', '女', '不明'];

        for ($i = 0; $i < 25; $i++) {
            DB::table('members')->insert([  // 'users' を 'members' に変更
                'name'       => $names[$i],
                'age'        => rand(65, 94),
                'gender'     => $genders[array_rand($genders)],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
    }
}

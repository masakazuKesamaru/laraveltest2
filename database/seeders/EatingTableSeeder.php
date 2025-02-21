<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EatingTableSeeder extends Seeder
{
    public function run()
    {
        $members = DB::table('members')->get();

        $types = ['morging', 'noon', 'evennig', 'snack'];
        $results = ['comp', '8th', '5th', '3th', 'none'];

        foreach ($members as $member) {
            for ($i = 0; $i < 3; $i++) {
                $type = $types[array_rand($types)];
                $result = $results[array_rand($results)];
                $randomSeconds = mt_rand(0, 86399);
                $time = gmdate("H:i:s", $randomSeconds);

                DB::table('eatings')->insert([
                    'type'       => $type,
                    'result'     => $result,
                    'time'       => $time,
                    'date'       => Carbon::now()->toDateString(), // ここで日付を設定
                    'member_id'  => $member->id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
    }
}

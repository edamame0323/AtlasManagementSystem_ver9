<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'over_name' => '山田',
                'under_name' => '太郎',
                'over_name_kana' => 'ヤマダ',
                'under_name_kana' => 'タロウ',
                'mail_address' => 'yamada@example.com',
                'sex' => 1,
                'birth_day' => '2000-01-01',
                'role' => 1,
                'password' => bcrypt('password123'),
            ],
            [
                'over_name' => '佐藤',
                'under_name' => '花子',
                'over_name_kana' => 'サトウ',
                'under_name_kana' => 'ハナコ',
                'mail_address' => 'sato@example.com',
                'sex' => 2,
                'birth_day' => '2000-02-02',
                'role' => 2,
                'password' => bcrypt('password123'),
            ],
            [
                'over_name' => '鈴木',
                'under_name' => '一郎',
                'over_name_kana' => 'スズキ',
                'under_name_kana' => 'イチロウ',
                'mail_address' => 'suzuki@example.com',
                'sex' => 1,
                'birth_day' => '2000-03-03',
                'role' => 3,
                'password' => bcrypt('password123'),
            ],
            [
                'over_name' => '田中',
                'under_name' => '次郎',
                'over_name_kana' => 'タナカ',
                'under_name_kana' => 'ジロウ',
                'mail_address' => 'tanaka@example.com',
                'sex' => 1,
                'birth_day' => '2005-04-04',
                'role' => 4,
                'password' => bcrypt('password123'),
            ],
        ]);
    }
}

<?php

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
        $param = [
            'name' => 'taro',
            'email' => 'taro@yamada.jp',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'ichiro',
            'email' => 'ichiro@yamada.jp',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'morii',
            'email' => 'morii@yamada.jp',
        ];
        DB::table('users')->insert($param);
    }
}

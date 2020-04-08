<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // テーブルのクリア
      DB::table('types')->truncate();

      // 初期データを用意
      $types = [
        ['name' => 'Top page'],
        ['name' => 'Side bar'],
        ['name' => 'Menu bar']
      ];

      // 登録
      foreach ($types as $type) {
        \App\Type::create($type);
      }
    }
}

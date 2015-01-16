<?php

class CityTableSeeder extends Seeder{
    public function run(){

        DB::table('cities')->delete();
        $now = date('Y-m-d H:i:s');

        $cities = array(
            array(
                'name'=>'Ohrid',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            array(
                'name'=>'Skopje',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            array(
                'name'=>'Struga',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            array(
                'name'=>'Bitola',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            array(
                'name'=>'Prilep',
                'created_at' => $now,
                'updated_at' => $now,
            )
        );

        DB::table('cities')->insert($cities);

    }
}
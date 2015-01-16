<?php

class CityTransporterTableSeeder extends Seeder{
    public function run(){

        DB::table('city_transporter')->delete();
        $now = date('Y-m-d H:i:s');

        $data = array(
            array(
                'city_id'=>2,
                'transporter_id'=>1
            ),
            array(
                'city_id'=>3,
                'transporter_id'=>2
            ),
            array(
                'city_id'=>4,
                'transporter_id'=>1
            ),
            array(
                'city_id'=>5,
                'transporter_id'=>2
            )
        );

        DB::table('city_transporter')->insert($data);

    }
}
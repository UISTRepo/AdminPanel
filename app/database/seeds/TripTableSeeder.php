<?php

class TripTableSeeder extends Seeder{
    public function run(){

        DB::table('trips')->delete();
        $now = date('Y-m-d H:i:s');

        $trips = array(
            array(
                'city_id'=>2,
                'transporter_id'=>1,
                'time'=>'12:00',
                'seats'=>30,
                'price'=>250,
                'created_at' => $now,
                'updated_at' => $now,
            ),
            array(
                'city_id'=>2,
                'transporter_id'=>1,
                'time'=>'13:00',
                'seats'=>20,
                'price'=>150,
                'created_at' => $now,
                'updated_at' => $now,
            ),
            array(
                'city_id'=>2,
                'transporter_id'=>1,
                'time'=>'14:00',
                'seats'=>10,
                'price'=>200,
                'created_at' => $now,
                'updated_at' => $now,
            ),
            array(
                'city_id'=>3,
                'transporter_id'=>2,
                'time'=>'12:00',
                'seats'=>30,
                'price'=>250,
                'created_at' => $now,
                'updated_at' => $now,
            ),
            array(
                'city_id'=>4,
                'transporter_id'=>2,
                'time'=>'13:00',
                'seats'=>20,
                'price'=>150,
                'created_at' => $now,
                'updated_at' => $now,
            ),
            array(
                'city_id'=>5,
                'transporter_id'=>2,
                'time'=>'14:00',
                'seats'=>10,
                'price'=>200,
                'created_at' => $now,
                'updated_at' => $now,
            ),
        );

        DB::table('trips')->insert($trips);

    }
}
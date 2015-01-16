<?php

class TransporterTableSeeder extends Seeder{
    public function run(){

        DB::table('transporters')->delete();
        $now = date('Y-m-d H:i:s');

        $transporters = array(
            array(
                'name'=>'Transporter 1',
                'phone'=>'070123456',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            array(
                'name'=>'Transporter 2',
                'phone'=>'070999999',
                'created_at' => $now,
                'updated_at' => $now,
            )
        );

        DB::table('transporters')->insert($transporters);

    }
}
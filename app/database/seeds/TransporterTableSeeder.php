<?php

class TransporterTableSeeder extends Seeder{
    public function run(){

        DB::table('transporters')->delete();
        $now = date('Y-m-d H:i:s');

        $transporters = array(
            array(
                'name'=>'Transporter 1',
                'phone'=>'070123456',
                'info'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
',
                'image_url' => 'http://localhost/TransportLaravel/public/docs/1/538a53a21559f.png',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            array(
                'name'=>'Transporter 2',
                'phone'=>'070999999',
                'info'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'image_url'=>'http://localhost/TransportLaravel/public/docs/2/makssgame.gif',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            array(
                'name'=>'Transporter 3',
                'phone'=>'077654321',
                'info'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'image_url'=>'http://localhost/TransportLaravel/public/docs/3/air_50x50.gif',
                'created_at' => $now,
                'updated_at' => $now,
            )
        );

        DB::table('transporters')->insert($transporters);

    }
}
<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		 $this->call('UserTableSeeder');
		 $this->call('CityTableSeeder');
		 $this->call('TransporterTableSeeder');
		 $this->call('TripTableSeeder');
		 $this->call('CityTransporterTableSeeder');
	}

}

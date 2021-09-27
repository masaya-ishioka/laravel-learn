<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
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
			'name' => 'test',
			'email' => 'hoge@email.com',
			// bcrypt暗号化用の関数
			'password' => bcrypt('test1234'),
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
	}
}

<?php

use Illuminate\Database\Seeder;
use App\Person;
use Faker\Factory as Faker;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('person') -> insert([
            'ci' => '171884264-2',
            'name' => 'Johao Perlaza',
            'phone' => '0978970998',
            'email' => 'perlazajohao@gmail.com',
            'password' => '1234johao:v',
        ]);
    }
}

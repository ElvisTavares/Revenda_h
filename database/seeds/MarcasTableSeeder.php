<?php

use Illuminate\Database\Seeder;

class MarcasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcas')->insert(['nome'=>'Ford']);
        DB::table('marcas')->insert(['nome'=> 'Chevrolet']);
    }
}

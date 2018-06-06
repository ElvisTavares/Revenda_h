<?php

use Illuminate\Database\Seeder;

class CarrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('carros')->insert([
          'modelo' => 'Sandero',
          'marca_id'=> '1',
          'cor' =>'Azul',
           'ano'=>2015,
           'preco' =>27500,
           'combustivel' =>'G',
           'created_at'=> date('Y-m-d h:i:s'),
        'updated_at'=>date('Y-m-d h:i:s')




       ]);


        DB::table('carros')->insert([
            'modelo' => 'Fiat',
            'marca_id'=> '2',
            'cor' =>'Verde',
            'ano'=>2017,
            'preco' =>17500,
            'combustivel' =>'G',
            'created_at'=> date('Y-m-d h:i:s'),
            'updated_at'=>date('Y-m-d h:i:s')




        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('categoria')->insert([

         	'id'=> 1,
         	'descripcion'=>'futbol'
         ]);

        DB::table('categoria')->insert([

         	'id'=> 2,
         	'descripcion'=>'tenis'
        ]);

        DB::table('categoria')->insert([

         	'id'=> 3,
         	'descripcion'=>'rugby'
         ]);

        DB::table('categoria')->insert([

         	'id'=> 4,
         	'descripcion'=>'e-sport'
         ]);
    }
}

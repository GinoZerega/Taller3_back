<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
        	'nombre'=>'gino',
        	'email'=>'asda@askdga.sa',
        	'password'=>bcrypt('123456'),
        ]);
        DB::table('user')->insert([
        	'nombre'=>'pepe',
        	'email'=>'pape@gmail.cl',
        	'password'=>bcrypt('qwerty'),
        ]);
        DB::table('user')->insert([
        	'nombre'=>'juan',
        	'email'=>'juano@gmail.com',
        	'password'=>bcrypt('qwe123'),
        ]);
    }
}

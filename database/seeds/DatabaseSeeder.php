<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('perfil')->insert([
    		['nome' => "Administrador"],
    		['nome' => "Autor"]
    	]);

    	DB::table('usuario')->insert([
        	[
        		'nome' => str_random(10),
    			'perfil_id'=>1
    		],
    		[
        		'nome' => str_random(10),
    			'perfil_id'=>1
    		],
    		[
        		'nome' => str_random(10),
    			'perfil_id'=>1
    		],
    		[
        		'nome' => str_random(10),
    			'perfil_id'=>2
    		],
    		[
        		'nome' => str_random(10),
    			'perfil_id'=>2
    		]
        ]);
    }
}

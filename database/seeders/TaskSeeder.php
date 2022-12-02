<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert(
            [
            [
                'name' => 'comprar',
                'status' => false
                
            ],
            [
                'name' => 'vender',
                'status' => false
                
            ]
        ]
    );

        //ESTO LO HEMOS PASADO A ARRIBA.
        // DB::table('tasks')->insert([
        //     [
        //         'name' => 'vender',
        //         'status' => false
                
        //     ]
        // ]);
    }
}

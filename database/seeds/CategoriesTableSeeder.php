<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'baño',
                'created_at' => '2020-03-06 09:30:52',
                'updated_at' => '2020-03-06 09:30:52',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'cocina',
                'created_at' => '2020-03-06 09:30:52',
                'updated_at' => '2020-03-06 09:30:52',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'insecticidas',
                'created_at' => '2020-03-06 09:30:52',
                'updated_at' => '2020-03-06 09:30:52',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'limpieza',
                'created_at' => '2020-03-06 09:30:52',
                'updated_at' => '2020-03-06 09:30:52',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'papeleria',
                'created_at' => '2020-03-06 09:30:52',
                'updated_at' => '2020-03-06 09:30:52',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'pisos',
                'created_at' => '2020-03-06 09:30:52',
                'updated_at' => '2020-03-06 09:30:52',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'piscina',
                'created_at' => '2020-03-06 09:30:52',
                'updated_at' => '2020-03-06 09:30:52',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'ropa',
                'created_at' => '2020-03-06 09:30:52',
                'updated_at' => '2020-03-06 09:30:52',
            ),
        ));
        
        
    }
}
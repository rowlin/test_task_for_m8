<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Data;
class DataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('data')->delete();

        Data::create(array(
            'name1' => 'Lorem ipsum dolor sit amet.',
            'name2' => 'Lorem ipsum dolor sit amet.',
            'name3' => 'Lorem ipsum dolor sit amet.',
        ));


        Data::create(array(
            'name1' => 'Lorem ipsum dolor sit amet.',
            'name2' => 'Lorem ipsum dolor sit amet.',
            'name3' => 'Lorem ipsum dolor sit amet.',
        ));


        Data::create(array(
            'name1' => 'Lorem ipsum dolor sit amet.',
            'name2' => 'Lorem ipsum dolor sit amet.',
            'name3' => 'Lorem ipsum dolor sit amet.',
        ));


    }
}

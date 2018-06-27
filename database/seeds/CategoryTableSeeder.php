<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_cellphone = new Category();
	    $category_cellphone->name = 'cellphone';
	    $category_cellphone->save();

	    $role_laptop = new Category();
	    $role_laptop->name = 'laptop';
	    $role_laptop->save();
    }
}

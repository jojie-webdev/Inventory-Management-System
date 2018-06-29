<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model
{

	protected $fillable = [
        'c_name', 'p_name','b_name','y_model','description','stock','price',
    ];

    public function categories()
    {
      return $this->belongsToMany(Category::class);
    }

    // TOTAL PRODUCTS
    public static function getTotalProduct() {
	    return $query = DB::table('products')
	    				->sum('stock');	
	}
	public static function getTotalCellphone() {
	    return $query = DB::table('products')
	    				->where('c_name', 'Cellphone')
	    				->sum('stock');	
	}
	public static function getTotalLaptop() {
	    return $query = DB::table('products')
	    				->where('c_name', 'Laptop')
	    				->sum('stock');	
	}

	// TOTAL PRICE
	public static function getTotalPrice() {
	    return $query = DB::table('products')
	    				->value(DB::raw("SUM(price * stock)"));
	}
	public static function getTotalPriceCellphone() {
	    return $query = DB::table('products')
	    				->where('c_name', 'Cellphone')
	    				->value(DB::raw("SUM(price * stock)"));
	}
	public static function getTotalPriceLaptop() {
	    return $query = DB::table('products')
	    				->where('c_name', 'Laptop')
	    				->value(DB::raw("SUM(price * stock)"));
	}
}

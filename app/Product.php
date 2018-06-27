<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	protected $fillable = [
        'c_name', 'p_name','b_name','y_model','description','qty','price',
    ];

    public function categories()
    {
      return $this->belongsToMany(Category::class);
    }
}

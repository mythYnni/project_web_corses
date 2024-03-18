<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'slug',
        'imgIcon',
        'classify',
        'status',
        'timeCreate',
        'iconText',
        'categoryCha',
        'checkCate',
        'nameCha'
    ];
    
    public function get_all_where_status(){
        $obj = DB::table('categories')
                ->where('status', 0)
                ->where('classify', '!=', 6)
                ->select('categories.*', 
                         DB::raw('(SELECT COUNT(*) FROM courses WHERE idCategory = categories.id) as courses_count'),
                         DB::raw('(SELECT COUNT(*) FROM categories AS c2 WHERE c2.classify = categories.id) as subcategories_count'))
                ->get();
        return $obj;
    }

    public function Courses(){
        return $this->hasMany('App\Models\Cours', 'idCategory','id');
    }
}

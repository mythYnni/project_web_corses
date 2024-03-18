<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $table = 'courses';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'author',
        'idCourses',
        'lickFacebook',
        'linkTest',
        'slug',
        'imgCourse',
        'linkDriver',
        'linkUdemy',
        'price',
        'discount',
        'priceSale',
        'courseDetails',
        'studyProgram',
        'classify',
        'lectures',
        'status',
        'timeCreate',
        'tag',
        'idCategory',
        'linkZalo',
        'nguoiTao',
        'emailTao',
        'idCategoryCha'
    ];

    public function timkiem($slug) {
        $list = Courses::with('category')
            ->where('status', '=', 0)
            ->where('name', 'LIKE', '%' . $slug . '%')
            ->orderBy('timeCreate', 'DESC')
            ->paginate(5);
    
        // Nhóm các bản ghi theo trường 'name' và chọn bản ghi đầu tiên trong mỗi nhóm
        $uniqueList = $list->groupBy('name')->map(function ($group) {
            return $group->first();
        })->values();
    
        $tagsArray = [];
        foreach ($list as $item) {
            $tags = json_decode($item->tag, true);
            $tagsArray = array_merge($tagsArray, $tags);
        }
    
        // Loại bỏ các giá trị trùng lặp
        $uniqueTags = array_unique($tagsArray);

        // Lấy 10 phần tử đầu tiên của mảng uniqueTags
        $uniqueTags = array_slice($uniqueTags, 0, 10);
    
        return [$uniqueList, $uniqueTags];
    }

    public function Category(){
        return $this->belongsTo(Category::class, 'idCategory');
    }

}

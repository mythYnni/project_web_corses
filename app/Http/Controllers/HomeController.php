<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Courses;

class HomeController extends Controller
{
    public function index(Category $category){
        $list_category= $category -> get_all_where_status();
        $list_category = $list_category->sortByDesc('subcategories_count');
        return view('FEuser.Pages.viewHome', compact('list_category'));
    }

    public function index_search_name(Courses $cours, $slug){
        $results = $cours->timkiem($slug);
        return response()->json($results);
    }
}

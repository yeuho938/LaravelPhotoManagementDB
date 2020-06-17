<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    function index(){
    	// lay tat cac category
    	$category = Category::all();
    	//
    	foreach ($category as $cate) {
    	 $cate->photos;//goi ham ben Category la category()
    	}
    	echo "<pre>".json_encode($category,JSON_PRETTY_PRINT)."</pre>";
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    //

    public  function subAddCategory(){
        return view('admin.sub-add-category');

    }
    public  function subAllCategory(){
  return view('admin.sub-all-category');
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryCtr extends Controller
{
    public function getAllCategorties () {
        return DB::table('tbl_category')->get();
    }
}

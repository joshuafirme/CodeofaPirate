<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Input;
use Auth;

class TutorialCtr extends Controller
{
    public function covid19Tracker(){
        $data =  DB::table('tbl_product as P')
                ->select('P.*',  'C.category')
                ->leftJoin('tbl_category AS C', 'C.id', '=', 'P.category_id')
                ->where('P.title', 'Covid19-Tracker Android App')
                ->first();
        return view('tutorials.android.covid19-tracker',['tutorial' => $data]);
    }
}

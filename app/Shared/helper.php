<?php 

namespace App\Classes;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;

class Helper {


    public function recordAction($module, $action)
    {
        $audit = new AuditTrail;
        $audit->user_name = session()->get('emp-username');
        $audit->module = $module;
        $audit->action = $action;
        $audit->save();
    }


}
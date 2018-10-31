<?php

namespace App\Http\Controllers\User;

use App\Area;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AreaController extends Controller
{
    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function store(Area $area)
    {
        session()->put('area',$area->slug);
        //redirect to category index
        return redirect()->back();
    }
}

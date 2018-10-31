<?php

namespace App\Http\ViewComposers;

use App\Area;
use Illuminate\View\View;

class AreaComposer 
{
    private $area;
    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function compose(View $view)
    {
        //put za in config
        if (!$this->area){
            $this->area = Area::where('slug', session()->get('area', config('classifieds.defaults.area')))->first();
        }
        return $view->with('area', $this->area);
    }
}
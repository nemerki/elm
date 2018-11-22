<?php namespace Avirdigital\Elm\Components;

use Avirdigital\Elm\Models\Group;
use Avirdigital\Elm\Models\Kategory;
use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;

class NavComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Nav',
            'description' => 'Nav Component'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['q']=$this->slug = Input::get('q');
        $this->page['categories'] = $this->listCategory();
        $this->page['subcat'] = $this->subCategory();
        $this->page['maincat'] = $this->mainCategory();


    }



    protected function listCategory()
    {
        $model = Kategory::where('is_active', 1)->get();

        return $model;

    }

    protected function subCategory()
    {
        $model = Kategory::where('is_active', 1)->where('sub_id', '<>', 0)->get();

        return $model;

    }

    protected function mainCategory()
    {
        $model = Kategory::where('is_active', 1)->where('sub_id', 0)->get();

        return $model;

    }
}

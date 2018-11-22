<?php namespace Avirdigital\Elm\Components;

use Avirdigital\Elm\Models\Kategory;
use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;

class CategoryComponent extends ComponentBase
{
    public $slug;

    public function componentDetails()
    {
        return [
            'name' => 'Category',
            'description' => 'Category Page Component'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    protected function prepareVars()
    {
        $this->slug = $this->param('slug');

    }

    public function onRun()
    {
        $this->prepareVars();

        $a = $this->page['products'] = $this->listProduct();
    }

    protected function listProduct()
    {

        $model = Kategory::with('products')->where("slug", $this->slug)->first();
        return $model->products()->where('is_active', "1")->get();
    }

}

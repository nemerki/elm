<?php namespace Avirdigital\Elm\Components;

use Avirdigital\Elm\Models\Product;
use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;

class SearchComponent extends ComponentBase
{
    public $slug;

    public function componentDetails()
    {
        return [
            'name' => 'Search',
            'description' => 'Search Result page Component'
        ];
    }

    public function defineProperties()
    {
        return [];
    }


    protected function prepareVars()
    {
        $this->page['q'] = $this->slug = Input::get('q');

    }


    public function onRun()
    {
        $this->prepareVars();

        $this->page['products'] = $this->listProduct();

    }


    protected function listProduct()
    {
        $model = Product::with('category')
            ->where('is_active', "1")
            ->where('name', 'like', "%" . $this->slug . "%")
            ->orWhere('description', 'like', "%" . $this->slug . "%")
            ->orWhere('short_description', 'like', "%" . $this->slug . "%")
            ->paginate(12);
        return $model;
    }


}

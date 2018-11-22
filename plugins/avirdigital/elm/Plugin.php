<?php namespace Avirdigital\Elm;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Avirdigital\Elm\Components\NavComponent' => 'Nav',
            'Avirdigital\Elm\Components\SearchComponent' => 'Search',
            'Avirdigital\Elm\Components\CategoryComponent' => 'Category',

        ];
    }


    public function registerFormWidgets()
    {
        return [
            'Avirdigital\Elm\FormWidgets\SubcategoryFormWidget' => [
                'label' => 'Subcategory field',
                'code' => 'sub_id'
            ],
            'Avirdigital\Elm\FormWidgets\CategoryFormWidget' => [
                'label' => 'Category field',
                'code' => 'category_id'
            ],

        ];

    }

    public function registerSettings()
    {
    }
}

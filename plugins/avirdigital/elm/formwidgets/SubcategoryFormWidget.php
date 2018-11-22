<?php namespace Avirdigital\Elm\FormWidgets;

use Avirdigital\Elm\Models\Kategory;
use Backend\Classes\FormWidgetBase;

/**
 * SubcategoryFormWidget Form Widget
 */
class SubcategoryFormWidget extends FormWidgetBase
{
    /**
     * @inheritDoc
     */
    protected $defaultAlias = 'avirdigital_elm_subcategory_form_widget';

    /**
     * @inheritDoc
     */
    public function init()
    {
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('subcategoryformwidget');
    }

    /**
     * Prepares the form widget view data
     */
    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();

        $this->vars['model'] = $this->model;
        $this->vars['category'] = Kategory::where("is_active", "1")->where("sub_id", 0)->lists('name', 'id');
        if (!empty($this->getLoadValue())) {
            $a= $this->vars['value'] = $this->getLoadValue();
        } else {
           $a= $this->vars['value'] = [];
        }



    }

    /**
     * @inheritDoc
     */
    public function loadAssets()
    {
        $this->addCss('css/subcategoryformwidget.css', 'Avirdigital.Elm');
        $this->addJs('js/subcategoryformwidget.js', 'Avirdigital.Elm');
    }

    /**
     * @inheritDoc
     */
    public function getSaveValue($value)
    {
        return $value;
    }
}

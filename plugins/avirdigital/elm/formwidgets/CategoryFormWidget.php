<?php namespace Avirdigital\Elm\FormWidgets;

use Avirdigital\Elm\Models\Kategory;
use Backend\Classes\FormWidgetBase;

/**
 * CategoryFormWidget Form Widget
 */
class CategoryFormWidget extends FormWidgetBase
{
    /**
     * @inheritDoc
     */
    protected $defaultAlias = 'avirdigital_elm_category_form_widget';

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
        return $this->makePartial('categoryformwidget');
    }

    /**
     * Prepares the form widget view data
     */
    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();

        $this->vars['model'] = $this->model;
        $this->vars['category'] = Kategory::where("is_active", "1")->lists('name', 'id');
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
        $this->addCss('css/categoryformwidget.css', 'Avirdigital.Elm');
        $this->addJs('js/categoryformwidget.js', 'Avirdigital.Elm');
    }

    /**
     * @inheritDoc
     */
    public function getSaveValue($value)
    {
        return $value;
    }
}

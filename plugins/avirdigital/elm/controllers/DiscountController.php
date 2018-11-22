<?php namespace Avirdigital\Elm\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class DiscountController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'manage_discount' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Avirdigital.Elm', 'main-menu-elm', 'side-menu-discount');
    }
}

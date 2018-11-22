<?php namespace Avirdigital\Elm\Models;

use Model;

/**
 * Model
 */
class Product extends Model
{


    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    use \October\Rain\Database\Traits\Sluggable;

    protected $dates = ['deleted_at'];


    /**
     * @var array Generate slugs for these attributes.
     */

    protected $slugs = ['slug' => 'name'];


    /**
     * Softly implement the TranslatableModel behavior.
     */
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    /**
     * @var array Attributes that support translation, if available.
     */
    public $translatable = ['name', 'description', 'short_description'];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'description' => 'required',
        'short_description' => 'required',
        'image' => 'required',
        'category' => 'required',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'avirdigital_elm_products';


    public $attachOne = [
        'image' => 'System\Models\File',

    ];
    public $attachMany = [
        'gallery' => 'System\Models\File',

    ];

    public $belongsTo = [
        'category' => ['Avirdigital\Elm\Models\Category'],
    ];
}

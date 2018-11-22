<?php namespace Avirdigital\Elm\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\Sluggable;

    protected $dates = ['deleted_at'];

    protected $slugs = ['slug' => 'name'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'avirdigital_elm_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'group' => 'required',
    ];

    /**
     * Softly implement the TranslatableModel behavior.
     */
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    /**
     * @var array Attributes that support translation, if available.
     */
    public $translatable = ['name'];

    public $hasMany = [
        'products' => ['Avirdigital\Elm\Models\Product', 'key' => 'category_id', 'softDelete' => true],

    ];
    public $belongsTo = [
        'group' => ['Avirdigital\Elm\Models\Group'],
    ];
    public $attachOne = [
        'image' => 'System\Models\File',

    ];

}

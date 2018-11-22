<?php namespace Avirdigital\Elm\Models;

use Model;

/**
 * Model
 */
class Kategory extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Sluggable;

    protected $dates = ['deleted_at'];
    protected $slugs = ['slug' => 'name'];



    /**
     * @var string The database table used by the model.
     */
    public $table = 'avirdigital_elm_kategories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public $hasMany = [
        'subcat' => ['Avirdigital\Elm\Models\Kategory',
            'key' => 'sub_id',
            'softDelete' => true,
            'order' => 'sort_order asc'],
        'products' => ['Avirdigital\Elm\Models\Product', 'key' => 'category_id', 'softDelete' => true],


    ];
    public $attachOne = [
        'image' => 'System\Models\File',
    ];

}

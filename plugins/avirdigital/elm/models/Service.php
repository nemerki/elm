<?php namespace Avirdigital\Elm\Models;

use Model;

/**
 * Model
 */
class Service extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sluggable;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    protected $slugs = ['slug' => 'title'];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'avirdigital_elm_services';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public $attachOne = [
        'image' => 'System\Models\File',
    ];

}

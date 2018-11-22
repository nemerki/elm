<?php namespace Avirdigital\Elm\Models;

use Model;

/**
 * Model
 */
class Support extends Model
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
    public $table = 'avirdigital_elm_supports';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'icon' => 'System\Models\File',
    ];
}

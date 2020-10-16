<?php namespace Undirezt\Telegramfeedback\Models;

use Model;

/**
 * Model
 */
class Settings extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'undirezt_telegramfeedback_settings';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}

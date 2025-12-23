<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 *
 * @property int $id
 * @property string|null $stage
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $name
 * @property string|null $tel
 * @property string|null $email
 * @property string|null $source
 * @property string|null $address
 */
class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = [
        'stage_id',
        'name',
        'tel',
        'email',
        'source',
        'address',
    ];
}

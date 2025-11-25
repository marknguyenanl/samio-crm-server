<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 * 
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $email
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $company
 *
 * @package App\Models
 */
class Customer extends Model
{
	protected $table = 'customers';

	protected $fillable = [
		'email',
		'name',
		'phone',
		'company'
	];
}

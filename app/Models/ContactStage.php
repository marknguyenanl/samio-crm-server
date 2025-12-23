<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactStage
 * @property int $id
 * @property string $key
 * @property string $label
 * @property int $order
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class ContactStage extends Model
{
	protected $table = 'contact_stages';

	protected $casts = [
		'order' => 'int'
	];

	protected $fillable = [
		'key',
		'label',
		'order'
	];
}

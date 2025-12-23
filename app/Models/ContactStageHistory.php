<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactStageHistory extends Model
{
    const UPDATED_AT = null;

    protected $fillable = [
        'contact_id',
        'contact_stage_id',
    ];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function stage()
    {
        return $this->belongsTo(ContactStage::class, 'contact_stage_id');
    }
}

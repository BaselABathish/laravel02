<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assistant extends Model
{
    protected $fillable = [
        'name',
        'company_id',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    //
}

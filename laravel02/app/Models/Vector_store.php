<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Vector_store extends Model
{
    protected $fillable = [
        'name',
        'description',
        'company_id',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    //
}

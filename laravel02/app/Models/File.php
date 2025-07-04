<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['filename', 'uploader_id', 'vector_store_id'];

    public function vector_store()
    {
        return $this->belongsTo(Vector_store::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    //
}

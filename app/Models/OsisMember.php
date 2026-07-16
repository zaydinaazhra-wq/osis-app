<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OsisMember extends Model
{
    protected $fillable = [
        'id',
        'uuid',
        'osis_class_id',
        'osis_departement_id',
        'name',
        'position',
        'description',
        'image',
        'phone',
        'email',
        'created_at',
        'updated_at'

    ];
}

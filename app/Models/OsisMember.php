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

    public function osisClass()
    {
        return $this->belongsTo(OsisClass::class, 'osis_class_id');
    }

    public function osisDepartement()
    {
        return $this->belongsTo(OsisDepartement::class, 'osis_departement_id');
    }
}

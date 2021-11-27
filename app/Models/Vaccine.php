<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    /**
     * database vaccines table
     *
     * @var string
     */
    protected $table = 'vaccines';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'vaccine_type_id',
    ];

    public function vaccineType()
    {
        return $this->belongsTo(VaccineType::class);
    }
}

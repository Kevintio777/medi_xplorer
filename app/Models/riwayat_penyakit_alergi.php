<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat_penyakit_alergi extends Model
{
    protected $table="riwayat_penyakit_alergi";
    use HasFactory;

    // Add a new attribute
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    // Tell Voyager about this accessor
    public $additional_attributes = ['full_name'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name', 'kuerzel', 'deputat'];
    public $timestamps = true;
    /**
     * Accessor/Mutator mapping for columns with different names (case/umlaut).
     */
    public function getNameAttribute()
    {
        return $this->attributes['Name'] ?? $this->attributes['name'] ?? null;
    }

    public function setNameAttribute($value)
    {
        $this->attributes['Name'] = $value;
    }

    public function getKuerzelAttribute()
    {
        return $this->attributes['Kürzel'] ?? $this->attributes['kuerzel'] ?? null;
    }

    public function setKuerzelAttribute($value)
    {
        $this->attributes['Kürzel'] = $value;
    }

    public function getDeputatAttribute()
    {
        return $this->attributes['Deputat'] ?? $this->attributes['deputat'] ?? null;
    }

    public function setDeputatAttribute($value)
    {
        $this->attributes['Deputat'] = $value;
    }
}

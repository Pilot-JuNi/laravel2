<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['Name', 'Kürzel', 'Deputat'];
    public $timestamps = true;
    
    // Mappin: Kleinbuchstaben Attribute zu Großbuchstaben Spalten
    public function getAttribute($key)
    {
        if ($key === 'name') {
            return parent::getAttribute('Name');
        }
        if ($key === 'kuerzel') {
            return parent::getAttribute('Kürzel');
        }
        if ($key === 'deputat') {
            return parent::getAttribute('Deputat');
        }
        return parent::getAttribute($key);
    }

    public function setAttribute($key, $value)
    {
        if ($key === 'name') {
            return parent::setAttribute('Name', $value);
        }
        if ($key === 'kuerzel') {
            return parent::setAttribute('Kürzel', $value);
        }
        if ($key === 'deputat') {
            return parent::setAttribute('Deputat', $value);
        }
        return parent::setAttribute($key, $value);
    }
}

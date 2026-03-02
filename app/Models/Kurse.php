<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Kurse extends Model
{
    /** @use HasFactory<\Database\Factories\KurseFactory> */
    use HasFactory;
    /**
     * Explicit table name because the default pluralizer
     * produces `kurses` but the actual table is `kurse`.
     */
    protected $table = 'kurse';

    /**
     * Allow mass assignment for these attributes.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kursname',
        'beschreibung',
        'anzahl_studenten',
        'anzahl_stunden',
        'teacher_id',
    ];

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
 
}
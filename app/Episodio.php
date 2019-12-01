<?php
namespace App;

use Iluminate\Database\Eloquent\Model;
class Episodio extends Model
{
    public $timestamps = false;
    protected $fillable = ['temporada', 'numero', 'assistido'];

    public function Serie(){
        return $this->belongsTo(Serie::class);
    }
}

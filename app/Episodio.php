<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    public $timestamps = false;
    protected $fillable = ['temporada', 'numero', 'assistido','serie_id'];

    public function Serie(){
        return $this->belongsTo(Serie::class);
    }
}

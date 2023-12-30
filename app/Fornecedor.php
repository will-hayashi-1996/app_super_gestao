<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    //
    use SoftDeletes;
    
    protected $table = 'fornecedors';
    protected $fillable = ['nome', 'site', 'uf', 'email'];

    public function produtos(){
        return $this->hasMany('App\item','fornecedor_id','id');
        //return $this->hasMany('App\item');
    }
}

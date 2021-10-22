<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'produits';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'quantite', 'prix_unitaire', 'description', 'category'];

    public static function boot(){
        parent::boot();
        self::creating(function($model){
            $model->user_id = auth()->user()->id;
        });
    }

    
}

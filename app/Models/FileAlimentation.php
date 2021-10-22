<?php

namespace App\Models;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;

class FileAlimentation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'file_alimentations';

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
    protected $fillable = ['produit_id', 'quantite', 'prix_unitaire', 'observations', 'description'];

    public static function boot(){
        parent::boot();

        static::creating(function($model){
            $model->user_id = auth()->user()->id;
        });
    }

    public function produit(){
        return $this->belongsTo(Produit::class, 'produit_id');
    }

    
}

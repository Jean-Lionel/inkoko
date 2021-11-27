<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerteProduit extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'perte_produits';

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
    protected $fillable = ['quantite', 'produit_id'];

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VentePoule extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vente_poules';

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
    protected $fillable = ['quantite', 'client_id','type', 'prix_unitaire'];

    
}

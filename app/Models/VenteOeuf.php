<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;

class VenteOeuf extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vente_oeufs';

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
    protected $fillable = ['quantite','type', 'client_id', 'prix_unitaire'];

    public function client(){
        return $this->belongsTo(Client::class,  'client_id','id');
    }
    
}

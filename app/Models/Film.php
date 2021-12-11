<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'films';

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
    protected $fillable = ['titre', 'cover', 'category_id', 'prix', 'quantite'];

    
}

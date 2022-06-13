<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adocao extends Model
{
    use HasFactory;
    protected $table = 'adocoes';
    //Permite que só sejam definidos dados desse tipo (protege contra ataques)
    protected $fillable = ['email', 'valor', 'pet_id'];

    /**
     * Define a relação entre adoção e pet
     *
     * @return BelongsTo
     */
    public function pet(){
        return $this->belongsTo(Pet::class);
    }
}

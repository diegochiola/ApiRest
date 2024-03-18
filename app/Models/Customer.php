<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;
    //agregamos los campos que vamos a rellenar
    protected $fillable = [
        //lo rellenaremos luego
    ];
   //relacion has many (un clkiente puede tener muchas facturas)
   public function invoices () {
    return $this->hasMany(Invoice::class);
   }
    
}

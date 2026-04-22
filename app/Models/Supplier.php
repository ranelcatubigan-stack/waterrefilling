<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';

    protected $fillable = [
        'supplier_name',
        'contact_number',
        'email_address',
        'address',
    ];

    public function inventory_transaction()
       {
        return $this->hasMany(Inventory_Transaction::class);
       }
}

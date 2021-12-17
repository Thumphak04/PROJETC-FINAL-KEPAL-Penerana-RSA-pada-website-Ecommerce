<?php

namespace App;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';
    protected $fillable = ['cipher', 'encrypt_ky', 'signaiv', 'private_key', 'public_key'];

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}

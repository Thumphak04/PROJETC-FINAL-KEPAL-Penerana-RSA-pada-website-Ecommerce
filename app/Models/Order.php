<?php

namespace App\Models;

use App\Http\Helpers\RSA_Transaction;
use App\Transaction;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'order_number', 'sub_total', 'quantity', 'delivery_charge', 'status', 'total_amount', 'first_name', 'last_name', 'country', 'post_code', 'address1', 'address2', 'phone', 'email', 'payment_method', 'payment_status', 'shipping_id', 'coupon', 'cipher', 'encrypt_ky', 'signaiv', 'private_key', 'public_key'];

    public function cart_info()
    {
        return $this->hasMany('App\Models\Cart', 'order_id', 'id');
    }
    public static function getAllOrder($id)
    {
        return Order::with('cart_info')->find($id);
    }
    public static function countActiveOrder()
    {
        $data = Order::count();
        if ($data) {
            return $data;
        }
        return 0;
    }
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function shipping()
    {
        return $this->belongsTo(Shipping::class, 'shipping_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
    public function addressdecrypt()
    {
        $rsa = new RSA_Transaction();
        $rsa->setSignaiv($this->signaiv);
        $rsa->setEncryption($this->encrypt_ky);
        $address = $rsa->decrypt($this->cipher);
        return $address;
        // $rsa->verify([
        //     'cipher'=>$this->cipher private
        // ])

    }
}

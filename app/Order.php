<?php

namespace App;

use Cart;
use DB;
use Illuminate\Database\Eloquent\Model;
use Session;

class Order extends Model
{
    public static function save_new()
    {
        $order = new self();
        $order->user_id = Session::get('user_id');
        $order->total = Cart::getTotal();
        $order->data = serialize(Cart::getContent()->toArray());
        $order->save();
        Session::flash('sm', 'We received your order!, Thank you for choosing us. yours - iSupplement');
        Cart::clear();

    }
    public static function getAll()
    {
        return DB::table('orders AS o')
            ->join('users AS u', 'u.id', '=', 'o.user_id')
            ->select('u.name', 'o.*')->orderBy('o.created_at', 'desc')
            ->get()
            ->toArray();
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: mahmoud
 * Date: 14/05/2018
 * Time: 09:54 ص
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class ProvidersOrder extends Model
{
    protected $table = 'providers_order';
    protected $primaryKey = 'providers_order_id';
    protected $fillable = [
        'provider_id',
        'order_id'
    ];

    public function Order()
    {
        return $this->belongsTo('App\Http\Models\Order', 'order_id');
    }

}
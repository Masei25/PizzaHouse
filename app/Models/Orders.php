<?php

namespace App\Models;

use App\Models\Items;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Orders extends Model
{
    use HasFactory, Notifiable;

    public function items()
    {
        return $this->belongsToMany(Items::class, 'ordered_item', 'order_id', 'product_id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'firstname',
        'lastname',
        'address',
        'city',
        'country',
        'state',
        'postal',
        'phone',
        'payment'
    ];

    protected $defaults = [
        'apartment',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

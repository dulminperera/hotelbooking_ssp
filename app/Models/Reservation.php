<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'event_id',
        'event_name',
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'number_of_tickets',
        'card_number',
        'expiry_date',
        'cvv',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

        public function user()
    {
        return $this->belongsTo(User::class)->withDefault([
            'name' => 'Guest',
        ]);
    }
}


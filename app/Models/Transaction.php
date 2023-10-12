<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, HasUlids, SoftDeletes;

    protected $fillable = [
        'account_id',
        'date',
        'descriptor_one',
        'descriptor_two',
        'amount',
        'currency',
        'exchange_rate'
    ];

    protected $casts = [
        'date' => 'date:d M Y'
    ];
}

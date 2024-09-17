<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'test';

    protected $fillable = [
        'first_name',
        'middle_initial',
        'last_name',
        'loan',
        'value',
    ];


    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->middle_initial} {$this->last_name}";
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'tel', 'email',
        'postcode', 'address', 'birthday', 'gender', 'memo'
    ];

    public function scopeSearchCustomers($query, $input = null) {
        if (!empty($input)) {
            return $query->where('name', 'like', $input . '%')
                         ->orWhere('tel', 'like', $input . '%');
        }
        return $query;
    }
}

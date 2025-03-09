<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaType extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'customer_id'];
    public function customers() { return $this->hasMany(Customer::class); }
}

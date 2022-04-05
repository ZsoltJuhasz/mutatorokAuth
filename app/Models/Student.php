<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "name",
        "phone"
    ];

    public function setPhoneAttribute($value)
    {
        $this->attributes["phone"] = "+36" . $value;
    }
}

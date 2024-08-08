<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeaponType extends Model
{
    use HasFactory;
    protected $table = "weapontype";
    protected $fillable = ['weapontype_id', 'weapontype_name', 'weapon_id'];
}

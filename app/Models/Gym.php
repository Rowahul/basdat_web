<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    use HasFactory;
    protected $fillable = ["nama","description","price", "image_gym", "senin_open", "senin_close", 
            "selasa_open", "selasa_close", "rabu_open", "rabu_close", 
            "kamis_open", "kamis_close", "jumat_open","jumat_close", 
            "sabtu_open", "sabtu_close", "minggu_open", "minggu_close", "user_id",
            "senin_is_closed", "selasa_is_closed", "rabu_is_closed", "kamis_is_closed",
            "jumat_is_closed", "sabtu_is_closed", "minggu_is_closed"
        ];
    protected $casts = [
        "senin_is_closed" => "boolean",
        "selasa_is_closed" => "boolean",
        "rabu_is_closed" => "boolean",
        "kamis_is_closed" => "boolean",
        "jumat_is_closed" => "boolean",
        "sabtu_is_closed" => "boolean",
        "minggu_is_closed" => "boolean",

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

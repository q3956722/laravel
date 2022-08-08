<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    protected $table="courses";
    protected $primaryKey = "coid";


    protected $fillable=[
        "coid",
        "level",
        "order",
        "coname",
        "pid",
        "content",
        "cointro",
        "visible"
    ];

    public function unit(){
        return $this->hasMany(Unit::class, "unid", "level", "order", "unname", "pid", "video_id", "uncontent", "unintro");
    }
}


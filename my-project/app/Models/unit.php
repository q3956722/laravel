<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unit extends Model
{
    use HasFactory;

    protected $table="units";
    protected $primaryKey = "unid";


    protected $fillable=[
        "unid",
        "level",
        "unname",
        "parent_id",
        "video_id",
        "ucontent"
    ];
}

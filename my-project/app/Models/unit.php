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
        "order",
        "unname",
        "pid",
        "video_id",
        "uncontent",
        "unintro",
        "visible"
    ];

    public function note(){
        return $this->hasMany(Note::class, 'noid', 'nocontent', 'userid', 'coid');
    }

    public function course(){
        return $this->hasMany(Course::class, "coid", "level", "order", "coname", "pid", "content", "cointro");
    }
}

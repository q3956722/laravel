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
        "coname",
        "parent_id",
        "video_id",
        "content"
    ];

    public function unit(){
        return $this->hasMany(Unit::class, 'unid', 'level', 'unname', 'parent_id', 'video_id', 'ucontent');
    }
}

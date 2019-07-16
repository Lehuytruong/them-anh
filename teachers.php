<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    protected $table ="teachers";
    protected $primaryKey ="teacher_id";
    protected $fillable=["teacher_name","teacher_image","teacher_age","teacher_gender","Active","lop_id"];

    public function getLop(){
        return $this->belongsTo("App\lops","lop_id","lop_id");
    }
}

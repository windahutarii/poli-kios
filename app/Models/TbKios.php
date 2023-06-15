<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbKios extends Model
{
    use HasFactory;

    protected $guarded = ["id_kios"];

    protected $table = "tb_kios";


    public function pemilik()
    {
        return $this->belongsTo(TbPemilik::class, 'id_pemilik', 'id_pemilik');
    }
}

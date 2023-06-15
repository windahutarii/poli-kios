<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbPemilik extends Model
{
    use HasFactory;

    protected $table = "tb_pemiliks";

    protected $primaryKey = "id_pemilik";

    protected $fillable = [
        'nama_pemilik',
        'alamat',
        'email',
        'no_hp',
        'no_wa',
        'foto',
    ];

    public function kios()
    {
        return $this->hasMany(TbKios::class, 'id_pemilik', 'id_pemilik');
    }
}

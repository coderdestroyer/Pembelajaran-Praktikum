<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table ='dosen';

    protected $primaryKey='id_dosen';

    public function nip()
    {
        return $this->hasOne(Nip::class, 'id_dosen', 'id_dosen');
    }

    // public $timestamps = false;

    // protected $fillable = [
    //     'nip',
    //     'nama_dosen',
    //     'matkul_dosen' 
    // ];
}

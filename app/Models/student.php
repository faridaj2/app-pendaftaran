<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class student extends Model
{
    use HasFactory, Searchable;

    protected $guarded = [];

     
    public function toSearchableArray()
    {
        return [
            'nama' => $this->nama,
            'kk' => $this->kk,
            'nik' => $this->nik,
            'nisn' => $this->nisn,
            'kelamin' => $this->kelamin,
            'pob' => $this->pob,
            'dob' => $this->dob,
            'alamat' => $this->alamat,
            'ayah' => $this->ayah,
            'ibu' => $this->ibu,
            'hp_ayah' => $this->hp_ayah,
            'hp_ibu' => $this->hp_ibu
        ];
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}

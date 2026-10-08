<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'mata_kuliah';

    protected $fillable = [
        'kode_matakuliah',
        'nama_matakuliah',
        'sks',
    ];

    public function getAllMK()
    {
        return $this->all();
    }
}

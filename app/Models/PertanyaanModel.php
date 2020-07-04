<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PertanyaanModel extends Model
{
    protected $table = 'pertanyaan';
    protected $fillable = ['judul','isi'];
}

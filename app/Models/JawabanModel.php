<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JawabanModel extends Model
{
    protected $table = 'jawaban';
    protected $fillable = ['isi','pertanyaan_id'];
}

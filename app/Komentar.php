<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    /*
    * menggunakan tabel komentar
    */
    protected $table = "komentar";

    public function user()
    {
        return $this->belongsTo("App\User", "user_id");
    }

    public function pertanyaan()
    {
        return $this->belongsTo("App\Pertanyaan", "jawaban_id");
    }
}

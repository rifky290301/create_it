<?php

namespace App\Models;

use App\Models\JenisProyek;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jenisProyek()
    {
        return $this->belongsTo(JenisProyek::class);
    }
}

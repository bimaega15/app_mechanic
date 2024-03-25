<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceHistory extends Model
{
    use HasFactory;
    protected $table = 'service_histori';
    protected $guarded = [];
    public $timestamps = true;

    public function penerimaanServis()
    {
        return $this->belongsTo(PenerimaanServis::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubPembayaran extends Model
{
    use HasFactory;
    protected $table = 'sub_pembayaran';
    protected $guarded = [];

    public function scopeDataTable($query)
    {
        return $query->where('cabang_id', session()->get('cabang_id'));
    }

    public function kategoriPembayaran()
    {
        return $this->belongsTo(KategoriPembayaran::class);
    }
}
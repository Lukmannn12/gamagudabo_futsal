<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class pemesanan extends Model
{
    use HasFactory;
    protected $fillable = ['nama','email','no_hp','jumlah_tiket','tanggal_id','user_id','status','total',];

    public function tanggal(): BelongsTo
    {
        return $this->belongsTo(tanggal::class);
    }
    public function pemesanan():BelongsTo
        {
            return $this->belongsTo(pemesanan::class);
        }
}

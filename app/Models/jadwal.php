<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class jadwal extends Model
    {
        use HasFactory;
        protected $fillable = ['pertandingan','waktu','tanggal_id'];

        public function tanggal(): BelongsTo
        {
            return $this->belongsTo(tanggal::class);
        }
    }

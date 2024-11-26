<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehadiran_siswa extends Model
{
    use HasFactory;
    protected $table = 'kehadiran_siswa';
    protected $fillable = [
        'id',
        'tanggal',
        'nama',
        'distrik',       // Use 'pl_pb' instead of 'pl/pb'
        'status_kehadiran',
        'mata_pelajaran',
        // 'created_at' and 'updated_at' are automatically managed by Eloquent, so no need to include them here
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TidakMampu extends Model
{
    use HasFactory;
    protected $table = 'tidak_mampu';
    protected $fillable = ['nomor', 'nama', 'nik', 'jenis_kelamin', 'tempat', 'tanggal_lahir', 'kewarganegaraan', 'agama', 'status_perkawinan', 'pekerjaan', 'alamat', 'deskripsi'];
}

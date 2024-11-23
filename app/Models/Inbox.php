<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    use HasFactory;
    protected $table = 'inbox';
    protected $fillable = ['uuid', 'tanggal', 'dari', 'message', 'ready_by'];
}

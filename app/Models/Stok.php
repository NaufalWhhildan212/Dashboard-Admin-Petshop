<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    protected $table = 'stok';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id', 'Nama', 'Kategori','Harga','Supplier','Stok'];
}

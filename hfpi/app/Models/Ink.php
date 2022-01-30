<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ink extends Model
{
    use HasFactory;

    protected $primaryKey = 'ink_id';
    public $incrementing = true;
    //i tutaj są właściwości, tylko trzeba pamiętać żeby to też w migracji odpowiednio dać żeby się potem zrobiło w bazie danych
    protected $fillable = ['name'];
}

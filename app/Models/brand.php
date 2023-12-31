<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;
    protected $table = "brands";

    protected $fillable= [
        'name',
    ];

    public function product()
    {
        return $this->belongsTo(product::class);
    }
}

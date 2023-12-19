<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table='posts';
    protected $fillable = [
        'name',
        'title',
        'description',
        'section_id'
    ];
    public function section(){
        return $this->belongsTo(Section::class, 'section_id', 'id');
    }
}

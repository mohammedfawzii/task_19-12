<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements TranslatableContract
{
    use Translatable;

    use HasFactory;
    protected $table = 'posts';
    protected $translatedAttributes = [
        'name',
        'title',
        'description',
    ];
    protected $fillable = [
        'section_id'
    ];
    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id', 'id');
    }
}

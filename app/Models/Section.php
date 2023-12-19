<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    // use Translatable;
    use HasFactory;
    protected $table='sections';
    protected $fillable = [
        'name','title'
    ];
    // protected $translatedAttributes = [
    //     'name',
    //     'title'];

        public function post(){
            return $this->hasMany(Post::class, 'section_id', 'id');
        }
}

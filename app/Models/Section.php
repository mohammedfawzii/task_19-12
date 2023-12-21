<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;
    protected $table='sections';


    protected $fillable = [
        '_token'
    ];
        protected $translatedAttributes = [
        'name',
        'title'];

        public function post(){
            return $this->hasMany(Post::class, 'section_id', 'id');
        }
}

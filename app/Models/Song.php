<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Song extends Model
{
    use HasFactory;

    // By default, Laravel assume the table name is 'songs'
    // If table name is singular create a property
    // protected $table = 'song_table';


    // By default, it assumes the primary key is name 'id'
    // if not--
    // protected $primaryKey = 'myprimarykey';

    // If you are not using timestamps featire (created_at/updated_at)
    public $timestamps = false;

    public $fillable = ['title', 'release_date', 'artist_id', 'categ_id'];

    // Accessors and Mutators
    public function title(): Attribute {
        return Attribute::make(
            get: fn ($value) => strtoupper($value),
            set: fn ($value) => strtolower($value)
        );
    }
}

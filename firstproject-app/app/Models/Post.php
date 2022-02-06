<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /*Ini Yang gak boleh diisi, lainnya gak boleh boleh*/
    /*protected $fillable = [
        'title','excerpt','body'
    ];*/

    /*Ini Yang gak boleh diisi, lainnya boleh*/
    protected $guarded = ['id'];
}

<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = 'about_us';
    protected $fillable = [
        'story',
        'instagram',
        'whatsapp',
        'maps_embed'
    ];
}

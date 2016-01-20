<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoReelList extends Model
{
    protected $rules = [];
    protected $fillable = ['title', 'url', 'image_url'];
    protected $table = 'video_reel_list';
}

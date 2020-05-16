<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function profileImage(){
        $imagePath = ($this->image) ? $this->image : 'uploads/xg5kaNk9d0Z0Rvc1RShZf1yrVPoXX88Irga8wU5y.jpeg';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
// use App\Models\City;
use App\Models\Phone;
// use App\Models\Post;
// use App\Models\Company;
// use App\Models\Profile;



class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'city_id',
        'name',
        'email',
        'active',
    ];

    /**
     * Get the city associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    //One to One
    public function phone(){
        return $this->hasOne(Phone::class);
    }

    //One to Many
    public function post(){
        return $this->hasMany(Post::class);
    }

    //Many to Many
    public function company(){
        return $this->belongsToMany(Company::class);
    }
    //Many to Many
    public function profile(){
        return $this->belongsToMany(Profile::class);
    }

}

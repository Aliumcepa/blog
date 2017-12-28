<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    protected $table = ['user_details'];
    
    public $fillable = [
        'email',
        'password',
        
    ];
}

?>
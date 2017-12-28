<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Assistantmodel extends Model
{
    //namespace App;
    
    
    protected $table = 'reg_table';
    
    public $fillable = [
        'prefix',
        'first_name',
        'last_name',
        'Mobile_no',
        'email',
        'mci_no',
        'iap_no',
        'designation',
        'clinic_id'
        
        
        
    ];
    
    
}

?>

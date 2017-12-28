<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Trialmodel extends Model
{
    //namespace App;
    
    
        protected $table = 'reg_table';
        
        public $fillable = [
            'prefix',
            'first_name',
            'last_name',
            'Mobile_no',
            'Phone_no',
            'email',
            'iap_no',
            'mci_no'
            
        ];
        
        
    }
    
    ?>

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'fullName',
        'gender',
        'age_id',
        'email',
        'is_send_email',
        'feedback',
    ];

    public function getGenderTextAttribute()
    {
        switch($this->gender) {
            case 1:
                return '男性';
            case 2:
                return '女性';
        }
    }

    public function getAgeTextAttribute()
    {
        switch($this->age_id) {
            case 1:
                return "10代";
            case 2:
                return "20代";
            case 3:
                return "30代";
            case 4:
                return "40代";
            case 5:
                return "50代";
            case 6:
                return "60代以上";
        }
    }
}

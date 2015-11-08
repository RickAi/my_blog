<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {

    const PRIORITY_FIRST = 1;
    const PRIORITY_SECONDE = 2;
    const PRIORITY_THIRD = 3;

    const TYPE_WORK = 1;
    const TYPE_STUDY = 2;
    const TYPE_DAILY = 3;


}

<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {

    const PRIORITY_1 = 0;
    const PRIORITY_2 = 1;
    const PRIORITY_3 = 2;

    // 侧滑栏点击后获取列表,客户端发到服务端的标志,和数据库中的数据没有关联
    const TYPE_DAILY = 0;
    const TYPE_WORK = 1;
    const TYPE_STUDY = 2;
    const TYPE_TODAY = 3;
    const TYPE_PAST = 4;
    const TYPE_FUTURE = 5;

    // 保存表单后,发到服务器后,服务端为其分配stamp
    const TYPE_PROJECT_TODAY = 0;
    const TYPE_PROJECT_TOMMOROW = 1;
    const TYPE_PROJECT_NEXT_2_DAYS = 2;
    const TYPE_PROJECT_NEXT_3_DAYS = 3;



    protected $fillable = ['name', 'deadline', 'is_finished', 'priority', 'project_type', 'stamp'];

}

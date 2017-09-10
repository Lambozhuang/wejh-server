<?php

namespace App\Http\Controllers\ApplicationsList;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function applicationsList(Request $request) {
        $icons = [
            'timetable' => [
                'bg' => 'blue',
                'icon' => url('img/app-list/timetable.png'),
            ],
            'score' => [
                'bg' => 'red',
                'icon' => url('img/app-list/score.png'),
            ],
            'exam' => [
                'bg' => 'green',
                'icon' => url('img/app-list/exam.png'),
            ],
            'freeroom' => [
                'bg' => 'red',
                'icon' => url('img/app-list/freeroom.png'),
            ],
            'student' => [
                'bg' => 'purple',
                'icon' => url('img/app-list/student.png'),
            ],
            'card' => [
                'bg' => 'yellow',
                'icon' => url('img/app-list/card.png'),
            ],
            'borrow' => [
                'bg' => 'blue',
                'icon' => url('img/app-list/borrow.png'),
            ],
        ];
        $applicationsList = [
            [
                'title' => '课表查询',
                'route' => '/pages/timetable/timetable',
                'bg' => $icons['timetable']['bg'],
                'icon' => $icons['timetable']['icon'],
                'disabled' => false,
            ],
            [
                'title' => '成绩查询',
                'route' => '/pages/score/score',
                'bg' => $icons['score']['bg'],
                'icon' => $icons['score']['icon'],
            ],
            [
                'title' => '考试安排',
                'route' => '/pages/exam/exam',
                'bg' => $icons['exam']['bg'],
                'icon' => $icons['exam']['icon'],
            ],
            [
                'title' => '空教室',
                'route' => '/pages/freeroom/freeroom',
                'bg' => $icons['freeroom']['bg'],
                'icon' => $icons['freeroom']['icon'],
            ],
            [
                'title' => '学生查询',
                'route' => '/pages/student/student',
                'bg' => $icons['student']['bg'],
                'icon' => $icons['student']['icon'],
            ],
            [
                'title' => '一卡通',
                'route' => '/pages/card/card',
                'bg' => $icons['card']['bg'],
                'icon' => $icons['card']['icon'],
            ],
            [
                'title' => '借阅信息',
                'route' => '/pages/borrow/borrow',
                'bg' => $icons['borrow']['bg'],
                'icon' => $icons['borrow']['icon'],
            ],
        ];

        $res = [
            'icons' => $icons,
            'app-list' => $applicationsList
        ];
        return RJM($res, 1, 'ok');
    }
}
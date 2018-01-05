<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use App\Post;
use App\Comment;
use App\User;

class DashboardController extends Controller
{


    public function getDashboard()
    {
        $chart = Charts::database(Post::all(), 'bar', 'highcharts')
            ->title('Posts added overview')
            ->elementLabel("Total")
            ->dimensions(400, 400)
            ->responsive(false)
            ->groupByDay();

        $chart2 = Charts::database(Comment::all(), 'bar', 'highcharts')
            ->title('Comments added overview')
            ->elementLabel("Total")
            ->dimensions(400, 400)
            ->responsive(false)
            ->dateFormat('j F y')
            ->groupByDay();

        $chart3 = Charts::database(User::all(), 'bar', 'highcharts')
            ->title('Registered to blog overview')
            ->elementLabel("Total")
            ->dimensions(400, 400)
            ->responsive(false)
            ->dateFormat('j F y')
            ->groupByDay();

        return view('admin.dashboard',['chart' => $chart , 'chart2'=> $chart2, 'chart3'=> $chart3]);
    }



}

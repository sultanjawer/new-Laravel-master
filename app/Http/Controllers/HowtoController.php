<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HowtoController extends Controller
{
    public function index()
    {
        $pagedata = array(
            'controller' => 'Documentation',
            'pagetitles' => 'System',
            'subtitles' => 'Documentation',
            'emphs' => 'Application Documentation',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon ='fal fa-books';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Documentation', 'List']; //add as much array item as needed
        return view('admin.howto.index', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function builds()
    {
        $pagedata = array(
            'controller' => 'Documentation',
            'pagetitles' => 'System',
            'subtitles' => 'Documentation',
            'emphs' => 'Application Documentation',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon ='fal fa-books';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Documentation', 'List']; //add as much array item as needed
        return view('admin.howto.build', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //v3 for this line and below
    public function index()
    {
        $pagedata = array(
            'controller' => 'Dashboard',
            'pagetitles' => 'Dashboard',
            'subtitles' => 'Monitoring Realisasi',
            'emphs' => 'Halaman ini berisi data pelaksanaan komitmen wajib tanam-produksi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-analytics';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Module Title', 'Page Title']; //add as much array item as needed
        return view('admin.dashboard.index', compact('pagedata', 'myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function verifikator()
    {
        $pagedata = array(
            'controller' => 'Dashboard',
            'pagetitles' => 'Dashboard',
            'subtitles' => 'Verifikator',
            'emphs' => 'Short brief for this page',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-analytics';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Module Title', 'Page Title']; //add as much array item as needed
        return view('verifikator.dashboard.index', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function user()
    {
        $pagedata = array(
            'controller' => 'Dashboard',
            'pagetitles' => 'Monitoring',
            'subtitles' => 'Realisasi',
            'emphs' => 'Short brief for this page',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-analytics';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Module Title', 'Page Title']; //add as much array item as needed
        return view('user.dashboard.index', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function peta_admin()
    {
        $pagedata = array(
            'controller' => 'Dashboard',
            'pagetitles' => 'Peta',
            'subtitles' => 'Realisasi',
            'emphs' => 'Short brief for this page',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-map';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Module Title', 'Page Title']; //add as much array item as needed
        return view('admin.dashboard.petaadmin', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function peta_verif()
    {
        $pagedata = array(
            'controller' => 'Dashboard',
            'pagetitles' => 'Peta',
            'subtitles' => 'Verifikasi',
            'emphs' => 'Short brief for this page',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-map';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Module Title', 'Page Title']; //add as much array item as needed
        return view('verifikator.dashboard.petaverif', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function peta_user()
    {
        $pagedata = array(
            'controller' => 'Dashboard',
            'pagetitles' => 'Peta Lahan',
            'subtitles' => 'Realisasi dan Verifikasi',
            'emphs' => 'Short brief for this page',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-map';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Module Title', 'Page Title']; //add as much array item as needed
        return view('user.dashboard.petauser', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    //V2 for this line and below
    public function indexv2()
    {
        $pagedata = array(
            'controller' => 'Dashboard',
            'pagetitles' => 'Page Title',
            'subtitles' => 'Sub Title',
            'emphs' => 'Short brief for this page',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-analytics';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Module Title', 'Page Title']; //add as much array item as needed
        return view('v2.dashboard.index', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function peta_v2()
    {
        $pagedata = array(
            'controller' => 'Dashboard',
            'pagetitles' => 'Page Title',
            'subtitles' => 'Sub Title',
            'emphs' => 'Short brief for this page',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-map';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Module Title', 'Page Title']; //add as much array item as needed
        return view('v2.dashboard.peta', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }
}

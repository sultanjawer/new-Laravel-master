<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PullsyncController extends Controller
{
    public function index()
    {
        $pagedata = array(
            'controller' => 'Pullsync',
            'pagetitles' => 'RIPH DATA',
            'subtitles' => 'Synchronization',
            'emphs' => 'Penyelarasan Data Wajib Tanam-Produksi dari aplikasi SIAP RIPH',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-sync';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Pullsync', 'Pull Data']; //add as much array item as needed
        return view('user.pullsync.index', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function detail()
    {
        $pagedata = array(
            'controller' => 'Pullsync',
            'pagetitles' => 'Synchronization',
            'subtitles' => 'Detail',
            'emphs' => 'Detail data yang telah diselaraskan.',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-sync';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Pullsync', 'Detail']; //add as much array item as needed
        return view('user.pullsync.detail', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function success()
    {
        $pagedata = array(
            'controller' => 'Pullsync',
            'pagetitles' => 'Synchronization',
            'subtitles' => 'Successfull',
            'emphs' => 'Penyelarasan Data berhasil dilakukan.',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-check';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Commitmen', 'Sync Result']; //add as much array item as needed
        return view('user.pullsync.success', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function fail()
    {
        $pagedata = array(
            'controller' => 'Pullsync',
            'pagetitles' => 'Synchronization',
            'subtitles' => 'Failed',
            'emphs' => 'Penyelarasan Data gagal dilakukan.',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-times-circle';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Pullsync', 'Sync Result']; //add as much array item as needed
        return view('user.pullsync.fail', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }
}

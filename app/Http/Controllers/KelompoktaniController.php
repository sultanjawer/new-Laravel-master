<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelompoktaniController extends Controller
{
    //v2 for this line and below
    public function index()
    {
        $pagedata = array(
            'controller' => 'KelompokTani',
            'pagetitles' => 'Daftar',
            'subtitles' => 'Kelompoktani',
            'emphs' => 'Daftar Kelompoktani Binaan Pelaku Usaha Wajib Tanam-Produksi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-users';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Kelompoktani', 'Daftar Kelompoktani']; //add as much array item as needed
        return view('v2.kelompoktani.index', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }
    public function create()
    {
        $pagedata = array(
            'controller' => 'KelompokTani',
            'pagetitles' => 'Form Data',
            'subtitles' => 'Kelompoktani',
            'emphs' => 'Form tambah data kelompoktani',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-users-edit';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Kelompoktani', 'Tambah Kelompoktani']; //add as much array item as needed
        return view('v2.kelompoktani.create', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function show()
    {
        $pagedata = array(
            'controller' => 'KelompokTani',
            'pagetitles' => 'Data',
            'subtitles' => 'Kelompoktani',
            'emphs' => '',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-users';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Kelompoktani', 'Data Kelompoktani']; //add as much array item as needed
        return view('v2.kelompoktani.show', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }
}

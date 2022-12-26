<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RiphController extends Controller
{
    //v3 start form this line
    public function index()
    {
        $pagedata = array(
            'controller' => 'Komitmen',
            'pagetitles' => 'Daftar',
            'subtitles' => 'Komitmen',
            'emphs' => 'Daftar Komitmen Wajib Tanam-Produksi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fab fa-stack-overflow';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Komitmen', 'Daftar Komitmen']; //add as much array item as needed
        return view('admin.riph.index', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function create()
    {
        $pagedata = array(
            'controller' => 'Komitmen',
            'pagetitles' => 'Form Tambah',
            'subtitles' => 'Data RIPH',
            'emphs' => 'Form tambah Data Acuan Target Realisasi Wajib Tanam-Produksi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-edit';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Komitmen', 'Data Acuan']; //add as much array item as needed
        return view('admin.riph.create', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function show()
    {
        $pagedata = array(
            'controller' => 'Komitmen',
            'pagetitles' => 'Form Ubah',
            'subtitles' => 'Data RIPH',
            'emphs' => 'Form ubah Data Acuan Target Realisasi Wajib Tanam-Produksi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-edit';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Komitmen', 'Data Acuan']; //add as much array item as needed
        return view('admin.riph.show', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }
}

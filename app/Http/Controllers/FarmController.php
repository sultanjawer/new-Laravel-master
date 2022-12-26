<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FarmController extends Controller
{
    public function index()
    {
        $pagedata = array(
            'controller' => 'Farm',
            'pagetitles' => 'Farm',
            'subtitles' => 'Management',
            'emphs' => 'Daftar PKS/Rencana Tanam',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-farm';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'PKS', 'Daftar PKS']; //add as much array item as needed
        return view('user.farm.index', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function create()
    {
        $pagedata = array(
            'controller' => 'Farm',
            'pagetitles' => 'Form Tambah',
            'subtitles' => 'Lokasi Tanam',
            'emphs' => 'Tambah Data Lokasi Baru',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-farm';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Farm', 'Lokasi Baru']; //add as much array item as needed
        return view('user.farm.create', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function show()
    {
        $pagedata = array(
            'controller' => 'Farm',
            'pagetitles' => 'Form Ubah',
            'subtitles' => 'Data Lokasi',
            'emphs' => 'Tambah Data Komitmen (RIPH) Baru',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-farm';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Farm', 'Ubah']; //add as much array item as needed
        return view('user.farm.show', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function notes()
    {
        $pagedata = array(
            'controller' => 'Farm',
            'pagetitles' => 'Farm',
            'subtitles' => 'Management',
            'emphs' => 'Daftar Kegiatan Usaha Tani',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-farm';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Farm', 'Farm Management']; //add as much array item as needed
        return view('user.farm.notes', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    //============== v2 for this line and below =============//
    public function indexv2()
    {
        $pagedata = array(
            'controller' => 'Farm',
            'pagetitles' => 'Farm',
            'subtitles' => 'Management',
            'emphs' => 'Daftar PKS/Rencana Tanam',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-farm';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'PKS', 'Daftar PKS']; //add as much array item as needed
        return view('v2.farm.index', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function createv2()
    {
        $pagedata = array(
            'controller' => 'Farm',
            'pagetitles' => 'Form Tambah',
            'subtitles' => 'Lokasi Tanam',
            'emphs' => 'Tambah Data Lokasi Baru',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-farm';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Farm', 'Lokasi Baru']; //add as much array item as needed
        return view('v2.farm.create', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function showv2()
    {
        $pagedata = array(
            'controller' => 'Farm',
            'pagetitles' => 'Form Ubah',
            'subtitles' => 'Data Lokasi',
            'emphs' => 'Tambah Data Komitmen (RIPH) Baru',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-farm';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Farm', 'Ubah']; //add as much array item as needed
        return view('v2.farm.show', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function notesv2()
    {
        $pagedata = array(
            'controller' => 'Farm',
            'pagetitles' => 'Farm',
            'subtitles' => 'Management',
            'emphs' => 'Daftar Kegiatan Usaha Tani',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-farm';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Farm', 'Farm Management']; //add as much array item as needed
        return view('v2.farm.notes', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }
}

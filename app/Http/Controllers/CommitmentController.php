<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use App\Models\Belanja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommitmentController extends Controller
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
        $myicon = 'fal fa-ballot';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Komitmen', 'Daftar Komitmen']; //add as much array item as needed
        return view('user.commitment.index', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function detail()
    {
        $pagedata = array(
            'controller' => 'Komitmen',
            'pagetitles' => 'Rincian',
            'subtitles' => 'Komitmen',
            'emphs' => 'Rincian Komitmen Wajib Tanam-Produksi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-file-invoice';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Komitmen', 'Rincian Komitmen']; //add as much array item as needed
        return view('user.commitment.detail', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
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
        $myicon = 'fal fa-file-invoice';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Komitmen', 'Data Acuan']; //add as much array item as needed
        return view('user.commitment.show', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }


    //v2 user
    public function v2index()
    {
        $pagedata = array(
            'controller' => 'Komitmen',
            'pagetitles' => 'Daftar',
            'subtitles' => 'Komitmen',
            'emphs' => 'Daftar Komitmen Wajib Tanam-Produksi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-ballot';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Komitmen', 'Daftar Komitmen']; //add as much array item as needed
        return view('v2.commitment.index', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function v2detail()
    {
        $pagedata = array(
            'controller' => 'Komitmen',
            'pagetitles' => 'Rincian',
            'subtitles' => 'Komitmen',
            'emphs' => 'Rincian Komitmen Wajib Tanam-Produksi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-file-invoice';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Komitmen', 'Rincian Komitmen']; //add as much array item as needed
        return view('v2.commitment.detail', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function v2create()
    {
        $pagedata = array(
            'controller' => 'Komitmen',
            'pagetitles' => 'Tambah',
            'subtitles' => 'Komitmen Baru',
            'emphs' => 'Form tambah data komitmen (RIPH) baru',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-file-invoice';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Komitmen', 'Tambah Data']; //add as much array item as needed
        return view('v2.commitment.create', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function v2show()
    {
        $pagedata = array(
            'controller' => 'Komitmen',
            'pagetitles' => 'Form Ubah',
            'subtitles' => 'Data RIPH',
            'emphs' => 'Form ubah Data Acuan Target Realisasi Wajib Tanam-Produksi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-file-invoice';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Komitmen', 'Data Acuan']; //add as much array item as needed
        return view('v2.commitment.show', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }
}

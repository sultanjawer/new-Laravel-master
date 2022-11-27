<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerificationOnfarmController extends Controller
{
    public function index()
    {
        //onfarm
        $pagedata = array(
            'controller' => 'Verification',
            'pagetitles' => 'Onfarm',
            'subtitles' => 'Verification',
            'emphs' => 'Daftar Verifikasi Lapangan & Online',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Verification', 'Onfarm']; //add as much array item as needed
        return view('verifikator.onfarm.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function add()
    {
        $pagedata = array(
            'controller' => 'Verification',
            'pagetitles' => 'Tambah Data',
            'subtitles' => 'Lokasi Sampling',
            'emphs' => 'Form tambah data sampling lokasi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Verification', 'Onfarm']; //add as much array item as needed
        return view('verifikator.onfarm.add', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function show()
    {
        $pagedata = array(
            'controller' => 'Verification',
            'pagetitles' => 'Ubah Data',
            'subtitles' => 'Lokasi Sampling',
            'emphs' => 'Form ubah data pemeriksaan sampling lokasi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Verification', 'Onfarm']; //add as much array item as needed
        return view('verifikator.onfarm.show', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function detail()
    {
        $pagedata = array(
            'controller' => 'Verification',
            'pagetitles' => 'Verifikasi',
            'subtitles' => 'Sampling',
            'emphs' => 'Lokasi sampling dan verifikasi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Verification', 'detail']; //add as much array item as needed
        return view('verifikator.onfarm.detail', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}

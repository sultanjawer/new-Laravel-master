<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerificationOnlineController extends Controller
{
    //online
    public function index()
    {
        $pagedata = array(
            'controller' => 'Verification',
            'pagetitles' => 'Online',
            'subtitles' => 'Verification',
            'emphs' => 'Daftar Verifikasi Online (data)',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Verification', 'Online']; //add as much array item as needed
        return view('verifikator.online.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function detail()
    {
        $pagedata = array(
            'controller' => 'Verification',
            'pagetitles' => 'Online',
            'subtitles' => 'Verification',
            'emphs' => 'Daftar Verifikasi Online (data)',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Verification', 'Online']; //add as much array item as needed
        return view('verifikator.online.detail', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function add()
    {
        $pagedata = array(
            'controller' => 'Verification',
            'pagetitles' => 'Tambah Data',
            'subtitles' => 'Lokasi',
            'emphs' => 'Form tambah data verifikasi lokasi dan kelompoktani',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Verification', 'Online']; //add as much array item as needed
        return view('verifikator.online.add', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function show()
    {
        $pagedata = array(
            'controller' => 'Verification',
            'pagetitles' => 'Ubah Data',
            'subtitles' => 'Lokasi',
            'emphs' => 'Form ubah data verifikasi lokasi dan kelompoktani',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Verification', 'Online']; //add as much array item as needed
        return view('verifikator.online.show', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function notes()
    {
        $pagedata = array(
            'controller' => 'Verification',
            'pagetitles' => 'Ubah Data',
            'subtitles' => 'Lokasi',
            'emphs' => 'Form ubah data verifikasi lokasi dan kelompoktani',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Verification', 'Online']; //add as much array item as needed
        return view('verifikator.online.notes', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}

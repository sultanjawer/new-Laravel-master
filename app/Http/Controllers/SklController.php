<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SklController extends Controller
{
    public function index()
    {
        $pagedata = array(
            'controller' => 'SKL',
            'pagetitles' => 'Daftar',
            'subtitles' => 'SKL',
            'emphs' => 'Daftar Pengajuan SKL dan Keterangan Lunas yang telah diterbitkan',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-award';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'SKL', 'Daftar SKL terbit']; //add as much array item as needed
        return view('admin.skl.index', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function check()
    {
        $pagedata = array(
            'controller' => 'SKL',
            'pagetitles' => 'Check SKl',
            'subtitles' => 'SKL Form',
            'emphs' => 'Terbitkan Surat Keterangan Baru',
            'alerttitle' => 'Perhatian!!!', //make it uppercase
            'alertcontent' => 'Form ini hanya diperuntukkan bagi penerbitan SKL untuk Wajib Tanam-Produksi sebelum 2022 yang telah merealisasikan wajib tanam-produksi namun data belum ada/input di Aplikasi SIAP RIPH.',
        );
        $myicon = 'fal fa-ballot';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'SKL', 'Form SKL Terbit']; //add as much array item as needed
        return view('admin.skl.check', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function create()
    {
        $pagedata = array(
            'controller' => 'SKL',
            'pagetitles' => 'Create New',
            'subtitles' => 'SKL Form',
            'emphs' => 'Terbitkan Surat Keterangan Baru',
            'alerttitle' => 'Perhatian!!!', //make it uppercase
            'alertcontent' => 'Form ini hanya diperuntukkan bagi penerbitan SKL untuk Wajib Tanam-Produksi sebelum 2022 yang telah merealisasikan wajib tanam-produksi namun data belum ada/input di Aplikasi SIAP RIPH.',
        );
        $myicon = 'fal fa-ballot';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'SKL', 'Form SKL Terbit']; //add as much array item as needed
        return view('admin.skl.create', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function show()
    {
        $pagedata = array(
            'controller' => 'SKL',
            'pagetitles' => 'Update SKL',
            'subtitles' => 'Data',
            'emphs' => 'Ubah data Surat Keterangan Baru',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-ballot';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'SKL', 'Form SKL Terbit']; //add as much array item as needed
        return view('admin.skl.show', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function form()
    {
        $pagedata = array(
            'controller' => 'SKL',
            'pagetitles' => 'Surat Keterangan Lunas',
            'subtitles' => 'SKL',
            'emphs' => 'Surat Keterangan Lunas yang telah diterbitkan',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-file-certificate';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'SKL', 'Form SKL Terbit']; //add as much array item as needed
        return view('admin.skl.form', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function success()
    {
        $pagedata = array(
            'controller' => 'SKL',
            'pagetitles' => 'Status',
            'subtitles' => 'Diterbitkan',
            'emphs' => 'Status Keterangan Lunas telah diterbitkan',
            'alerttitle' => 'SELAMAT!!!', //make it uppercase
            'alertcontent' => 'Status Wajib Tanam-Produksi untuk RIPH ini telah ditetapkan dan Surat Keterangan Lunas telah diterbitkan. .',
        );
        $myicon = 'fal fa-award';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'SKL', 'Form SKL Terbit']; //add as much array item as needed
        return view('admin.skl.success', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function postponed()
    {
        $pagedata = array(
            'controller' => 'SKL',
            'pagetitles' => 'Status:',
            'subtitles' => 'Dikembalikan',
            'emphs' => 'Status Keterangan Lunas dikembalikan untuk diperbaharui',
            'alerttitle' => 'SELAMAT!!!', //make it uppercase
            'alertcontent' => 'Status Wajib Tanam-Produksi untuk RIPH ini telah ditetapkan dan Surat Keterangan Lunas telah diterbitkan. .',
        );
        $myicon = 'fal fa-times';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'SKL', 'Form SKL Terbit']; //add as much array item as needed
        return view('admin.skl.postponed', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function userskl()
    {
        $pagedata = array(
            'controller' => 'SKL',
            'pagetitles' => 'Daftar:',
            'subtitles' => 'SKL',
            'emphs' => 'Surat Keterangan Lunas yang Telah Anda peroleh',
            'alerttitle' => 'SELAMAT!!!', //make it uppercase
            'alertcontent' => 'Status Wajib Tanam-Produksi untuk RIPH ini telah ditetapkan dan Surat Keterangan Lunas telah diterbitkan. .',
        );
        $myicon = 'fal fa-award';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'SKL', 'Form SKL Terbit']; //add as much array item as needed
        return view('admin.skl.userskl', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function usersklv2()
    {
        $pagedata = array(
            'controller' => 'SKL',
            'pagetitles' => 'Daftar:',
            'subtitles' => 'SKL',
            'emphs' => 'Surat Keterangan Lunas yang Telah Anda peroleh',
            'alerttitle' => 'SELAMAT!!!', //make it uppercase
            'alertcontent' => 'Status Wajib Tanam-Produksi untuk RIPH ini telah ditetapkan dan Surat Keterangan Lunas telah diterbitkan. .',
        );
        $myicon = 'fal fa-award';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'SKL', 'Form SKL Terbit']; //add as much array item as needed
        return view('v2.skl.userskl', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function formv2()
    {
        $pagedata = array(
            'controller' => 'SKL',
            'pagetitles' => 'Surat Keterangan Lunas',
            'subtitles' => 'SKL',
            'emphs' => 'Surat Keterangan Lunas yang telah diterbitkan',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-file-certificate';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'SKL', 'Form SKL Terbit']; //add as much array item as needed
        return view('v2.skl.form', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }
}

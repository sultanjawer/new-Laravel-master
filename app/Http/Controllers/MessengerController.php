<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessengerController extends Controller
{
    
    public function index()
    {
        $pagedata = array(
            'controller' => 'Messenger',
            'pagetitles' => 'All',
            'subtitles' => 'Messages',
            'emphs' => 'Daftar Seluruh Pesan Anda',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-mailbox';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Messenger', 'All Messages']; //add as much array item as needed
        return view('admin.messenger.index', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function inbox()
    {
        $pagedata = array(
            'controller' => 'Messenger',
            'pagetitles' => 'Pesan',
            'subtitles' => 'Kotak Masuk',
            'emphs' => 'Daftar Seluruh Pesan Masuk untuk Anda',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-inbox-in';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Messenger', 'Inbox']; //add as much array item as needed
        return view('admin.messenger.index', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function outbox()
    {
        $pagedata = array(
            'controller' => 'Messenger',
            'pagetitles' => 'Pesan',
            'subtitles' => 'Kotak Keluar',
            'emphs' => 'Daftar Seluruh Pesan Keluar dari Anda',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-paper-plane';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Messenger', 'Outbox']; //add as much array item as needed
        return view('admin.messenger.index', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function trash()
    {
        $pagedata = array(
            'controller' => 'Messenger',
            'pagetitles' => 'Pesan',
            'subtitles' => 'Kotak Sampah',
            'emphs' => 'Daftar Seluruh Pesan Dibuang',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-trash';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Messenger', 'Trahsed']; //add as much array item as needed
        return view('admin.messenger.index', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function create()
    {
        $pagedata = array(
            'controller' => 'Messenger',
            'pagetitles' => 'Pesan',
            'subtitles' => 'Buat Pesan Baru',
            'emphs' => 'Buat Pesan Baru',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-edit';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Messenger', 'New Message']; //add as much array item as needed
        return view('admin.messenger.create', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function read()
    {
        $pagedata = array(
            'controller' => 'Messenger',
            'pagetitles' => 'Pesan',
            'subtitles' => 'Baca Pesan Masuk',
            'emphs' => 'Baca Pesan',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-envelope-open';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Messenger', 'Read']; //add as much array item as needed
        return view('admin.messenger.read', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }
}

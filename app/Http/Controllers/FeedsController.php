<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedsController extends Controller
{
    public function index()
    {
        $pagedata = array(
            'controller' => 'Feeds',
            'pagetitles' => 'All',
            'subtitles' => 'Feeds',
            'emphs' => 'Daftar Berita & Informasi yang dikirim oleh Administrator untuk Anda',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-rss';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Feeds', 'Daftar Berita']; //add as much array item as needed
        return view('admin.feeds.index', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function show()
    {
        $pagedata = array(
            'controller' => 'Feeds',
            'pagetitles' => 'Feeds ',
            'subtitles' => 'Berita & Informasi',
            'emphs' => '',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-newspaper';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Feeds', 'Berita']; //add as much array item as needed
        $user = User::all();
        return view('admin.feeds.show', compact('pagedata', 'user','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function read()
    {
        $pagedata = array(
            'controller' => 'Feeds',
            'pagetitles' => 'Feeds',
            'subtitles' => 'Berita & Informasi',
            'emphs' => '',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-newspaper';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Feeds', 'Berita']; //add as much array item as needed
        return view('admin.feeds.read', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function create()
    {
        $pagedata = array(
            'controller' => 'Feeds',
            'pagetitles' => 'Tambah ',
            'subtitles' => 'Berita',
            'emphs' => 'Form untuk menambah berita dan informasi untuk dipublikasi',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-edit';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Feeds', 'Berita']; //add as much array item as needed
        return view('admin.feeds.create', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function update()
    {
        $pagedata = array(
            'controller' => 'Feeds',
            'pagetitles' => 'Perbarui',
            'subtitles' => 'Berita',
            'emphs' => 'Form untuk memperbarui atau mengubah berita.',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-edit';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Feeds', 'Berita']; //add as much array item as needed
        return view('admin.feeds.update', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }
}

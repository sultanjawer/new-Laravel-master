<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserFilesController extends Controller
{
    public function index()
    {
        $pagedata = array(
            'controller' => 'Files Management',
            'pagetitles' => 'Files',
            'subtitles' => 'All Files',
            'emphs' => 'Daftar Seluruh berkas unggahan Anda',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-folders';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Files Managemnet', 'Daftar Template']; //add as much array item as needed
        return view('user.files.index', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function mygalleries()
    {
        $pagedata = array(
            'controller' => 'Files Management',
            'pagetitles' => 'Files',
            'subtitles' => 'All Galleries',
            'emphs' => 'Daftar Seluruh unggahan berkas foto',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-folder-tree';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Files Managemnet', 'Daftar Template']; //add as much array item as needed
        return view('user.files.mygalleries', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }
    
    public function templates()
    {
        $pagedata = array(
            'controller' => 'Files Management',
            'pagetitles' => 'Templates',
            'subtitles' => 'Master',
            'emphs' => 'Daftar File Master Template',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-folder-tree';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Files Managemnet', 'Daftar Template']; //add as much array item as needed
        return view('user.files.templates', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }
}

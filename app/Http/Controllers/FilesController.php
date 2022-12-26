<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilesController extends Controller
{
    public function index()
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
        return view('admin.files.templates', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function add()
    {
        $pagedata = array(
            'controller' => 'Files Management',
            'pagetitles' => 'Add',
            'subtitles' => 'Template',
            'emphs' => 'Daftar File Master Template',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-file-upload';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Files Managemnet', 'Add Template']; //add as much array item as needed
        return view('admin.files.add', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function show()
    {
        $pagedata = array(
            'controller' => 'Files Management',
            'pagetitles' => 'Show',
            'subtitles' => 'Template',
            'emphs' => 'Daftar File Master Template',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-file-download';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Files Managemnet', 'Show Template']; //add as much array item as needed
        return view('admin.files.show', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
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
        return view('admin.files.mygalleries', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }
    
    public function myfiles()
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
        return view('admin.files.index', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }
}

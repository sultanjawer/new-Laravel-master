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
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Files Managemnet', 'Daftar Template']; //add as much array item as needed
        return view('admin.files.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
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
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Files Managemnet', 'Add Template']; //add as much array item as needed
        return view('admin.files.add', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
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
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Files Managemnet', 'Show Template']; //add as much array item as needed
        return view('admin.files.show', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}

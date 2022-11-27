<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommitmentReportController extends Controller
{
    public function index()
    {
        $pagedata = array(
            'controller' => 'Report',
            'pagetitles' => 'Data',
            'subtitles' => 'Report',
            'emphs' => 'Application Documentation',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Report', 'Index']; //add as much array item as needed
        return view('admin.reports.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function detail()
    {
        $pagedata = array(
            'controller' => 'Report',
            'pagetitles' => 'Data',
            'subtitles' => 'Report',
            'emphs' => 'Application Documentation',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Report', 'Index']; //add as much array item as needed
        return view('admin.reports.detail', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function realisasi()
    {
        $pagedata = array(
            'controller' => 'Report',
            'pagetitles' => 'Data',
            'subtitles' => 'Report',
            'emphs' => 'Application Documentation',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Report', 'Index']; //add as much array item as needed
        return view('admin.reports.realisasi', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function map()
    {
        $pagedata = array(
            'controller' => 'Report',
            'pagetitles' => 'Data',
            'subtitles' => 'Report',
            'emphs' => 'Application Documentation',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Report', 'Index']; //add as much array item as needed
        return view('admin.reports.map', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}

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
        $myicon = 'fal fa-file-alt';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Report', 'Index']; //add as much array item as needed
        return view('admin.reports.index', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function detail()
    {
        $pagedata = array(
            'controller' => 'Report',
            'pagetitles' => 'Detail',
            'subtitles' => 'Report',
            'emphs' => 'Application Documentation',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-ballot';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Report', 'Detail']; //add as much array item as needed
        return view('admin.reports.detail', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function realisasi()
    {
        $pagedata = array(
            'controller' => 'Report',
            'pagetitles' => 'Data Realisasi',
            'subtitles' => 'Report',
            'emphs' => 'Application Documentation',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-ballot';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Report', 'Index']; //add as much array item as needed
        return view('admin.reports.realisasi', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }

    public function map()
    {
        $pagedata = array(
            'controller' => 'Report',
            'pagetitles' => 'Data Peta',
            'subtitles' => 'Report',
            'emphs' => 'Application Documentation',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $myicon = 'fal fa-map';
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Simethris', 'Report', 'Index']; //add as much array item as needed
        return view('admin.reports.map', compact('pagedata','myicon'), ['breadcrumb' => $breadcrumbs]);
    }
}

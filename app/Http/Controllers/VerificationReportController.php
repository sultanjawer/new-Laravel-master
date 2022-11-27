<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerificationReportController extends Controller
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
        return view('admin.reports.verification', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function onfarm()
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
        return view('admin.reports.onfarm', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function detail_onfarm()
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
        return view('admin.reports.detail_onfarm', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function add_sampling()
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
        return view('admin.reports.add_sampling', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function show_sampling()
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
        return view('admin.reports.show_sampling', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    //online
    public function online()
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
        return view('admin.reports.online', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function detail_online()
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
        return view('admin.reports.detail_online', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function add_check()
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
        return view('admin.reports.add_check', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function show_check()
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
        return view('admin.reports.show_check', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}

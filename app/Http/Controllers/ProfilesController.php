<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profiles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class ProfilesController extends Controller
{
    public function index()
    {
        $pagedata = array(
            'controller'    => 'Profiles',
            'pagetitles'    => 'My',
            'subtitles'     => 'Profile',
            'emphs'         => 'Short brief for this page',
            'alerttitle'    => 'Alert/information Title', //make it uppercase
            'alertcontent'  => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = [
            'App Name',
            'Profile',
            'My Profile',
        ]; //add as much array item as needed;
        return view('admin.profile.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }


    public function edit()
    {
        $pagedata = array(
            'controller'    => 'Profiles',
            'pagetitles'    => 'My',
            'subtitles'     => 'Profile',
            'emphs'         => 'Short brief for this page',
            'alerttitle'    => 'Alert/information Title', //make it uppercase
            'alertcontent'  => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = [
            'App Name',
            'Profile',
            'My Profile',
        ]; //add as much array item as needed;
        return view('admin.profile.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function password()
    {
        $pagedata = array(
            'controller'    => 'Profiles',
            'pagetitles'    => 'Password',
            'subtitles'     => 'Change',
            'emphs'         => 'Short brief for this page',
            'alerttitle'    => 'Alert/information Title', //make it uppercase
            'alertcontent'  => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = [
            'App Name',
            'Profile',
            'Password',
        ]; //add as much array item as needed;
        return view('admin.profile.password', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profiles;

class UsersController extends Controller
{
    public function index()
    {
        $pagedata = array(
            'controller' => 'Users',
            'pagetitles' => 'Daftar',
            'subtitles' => 'User',
            'emphs' => 'Registered User',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['User', 'Registered User']; //add as much array item as needed
        return view('admin.users.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function create()
    {
        $pagedata = array(
            'controller' => 'Users',
            'pagetitles' => 'Add New',
            'subtitles' => 'User',
            'emphs' => 'Registered User',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['Users', 'New User']; //add as much array item as needed
        return view('admin.users.create', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }

    public function show()
    {
        $pagedata = array(
            'controller' => 'Users',
            'pagetitles' => 'User',
            'subtitles' => 'Profile',
            'emphs' => 'Profile of Registered User',
            'alerttitle' => 'Alert/information Title', //make it uppercase
            'alertcontent' => 'Alert/information should appear in here.',
        );
        $alertcontent = 'Apa yang ingin disampaikan pada halaman ini.';
        $breadcrumbs = ['User', 'Registered User', 'Profile']; //add as much array item as needed
        return view('admin.profile.index', compact('pagedata'), ['breadcrumb' => $breadcrumbs]);
    }
}

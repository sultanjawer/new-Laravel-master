<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

// ==================== Admin user ==================== //
Route::namespace('App\Http\Controllers')->middleware(['auth', 'user-access:admin'])->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/admin/home', 'index')->name('admin.home');
        //add another route for HomeController for this usertype
    });
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard/data', 'index')->name('admin.dashboard.data');
        Route::get('/admin/dashboard/peta', 'peta_admin')->name('admin.dashboard.peta');
        //add another route for HomeController for this usertype
    });
    Route::controller(FeedsController::class)->group(function () {
        Route::get('/admin/feeds/index', 'index')->name('admin.feeds.index');
        Route::get('/admin/feeds/create', 'create')->name('admin.feeds.create');
        Route::get('/admin/feeds/read', 'read')->name('admin.feeds.read');
        Route::get('/admin/feeds/show', 'show')->name('admin.feeds.show');
        Route::get('/admin/feeds/update', 'update')->name('admin.feeds.update');
        //add another route for this controller
    });
    Route::controller(MessengerController::class)->group(function () {
        Route::get('/messenger/index', 'index')->name('messenger.index');
        Route::get('/messenger/create', 'create')->name('messenger.create');
        Route::get('/messenger/read', 'read')->name('messenger.read');
        Route::get('/messenger/inbox', 'inbox')->name('messenger.inbox');
        Route::get('/messenger/outbox', 'outbox')->name('messenger.outbox');
        Route::get('/messenger/trash', 'trash')->name('messenger.trash');
        //add another route for this controller
    });
    Route::controller(PermissionsController::class)->group(function () {
        Route::get('/admin/manage/permissions', 'index')->name('admin.permissions');
        Route::get('/admin/manage/permissions/create', 'index')->name('admin.permissions.create');
        Route::get('/admin/manage/permissions/show', 'index')->name('admin.permissions.show');
        //add another route for this controller
    });
    Route::controller(RolesController::class)->group(function () {
        Route::get('/admin/manage/roles', 'index')->name('admin.roles');
        Route::get('/admin/manage/roles/create', 'index')->name('admin.users.roles');
        Route::get('/admin/manage/roles/show', 'index')->name('admin.roles.show');
        //add another route for this controller
    });
    Route::controller(UsersController::class)->group(function () {
        Route::get('/admin/manage/users', 'index')->name('admin.users');
        Route::get('/admin/manage/users/create', 'index')->name('admin.users.create');
        Route::get('/admin/manage/users/show', 'index')->name('admin.users.show');
        //add another route for this controller
    });

    //data master RIPH sebagai acuan/target/benchmark
    Route::controller(RiphController::class)->group(function () {
        Route::get('/admin/riph/index', 'index')->name('admin.riph.index');
        Route::get('/admin/riph/create', 'create')->name('admin.riph.create');
        Route::get('/admin/riph/show', 'show')->name('admin.riph.show');
        //add another route for this controller
    });

    //berkas master template
    Route::controller(FilesController::class)->group(function () {
        Route::get('/admin/files/index', 'index')->name('admin.files.index');
        Route::get('/admin/files/add', 'add')->name('admin.files.add');
        Route::get('/admin/files/show', 'show')->name('admin.files.show');
        //add another route for this controller
    });

    //laporan pelaksanaan wajib tanam-produksi dari pengguna
    Route::controller(CommitmentReportController::class)->group(function () {
        Route::get('/admin/report/commitment', 'index')->name('admin.report.commitment');
        Route::get('/admin/report/commitment/detail', 'detail')->name('admin.report.commitment.detail');
        Route::get('/admin/report/commitment/realisasi', 'realisasi')->name('admin.report.commitment.realisasi');
        Route::get('/admin/report/commitment/map', 'map')->name('admin.report.commitment.map');
        //add another route for this controller
    });

    //laporan pelaksanaan hasil verifikasi
    Route::controller(VerificationReportController::class)->group(function () {
        //onfarm
        Route::get('/admin/report/verification/onfarm', 'onfarm')->name('admin.report.verification.onfarm');
        Route::get('/admin/report/verification/onfarm/detail', 'detail_onfarm')->name('admin.report.verification.onfarm.detail');
        Route::get('/admin/report/verification/onfarm/add', 'add_sampling')->name('admin.report.verification.onfarm.add');
        Route::get('/admin/report/verification/onfarm/show', 'show_sampling')->name('admin.report.verification.onfarm.show');

        //online
        Route::get('/admin/report/verification/online', 'online')->name('admin.report.verification.online');
        Route::get('/admin/report/verification/online/detail', 'detail_online')->name('admin.report.verification.online.detail');
        Route::get('/admin/report/verification/online/add', 'add_check')->name('admin.report.verification.online.add');
        Route::get('/admin/report/verification/online/show', 'show_check')->name('admin.report.verification.online.show');
        //add another route for this controller
    });

    //daftar status dan pengajuan SKL, verifikasi SKL dan daftar SKL terbit
    Route::controller(SklController::class)->group(function () {
        Route::get('/admin/skl/index', 'index')->name('admin.skl.index');
        Route::get('/admin/skl/check', 'check')->name('admin.skl.check');
        Route::get('/admin/skl/success', 'success')->name('admin.skl.success');
        Route::get('/admin/skl/postponed', 'postponed')->name('admin.skl.postponed');
        Route::get('/admin/skl/create', 'create')->name('admin.skl.create');
        Route::get('/admin/skl/form', 'form')->name('admin.skl.form');
        Route::get('/admin/skl/userskl', 'userskl')->name('admin.skl.userskl');
        //add another route for this controller
    });

    //daftar pengguna
    Route::controller(UsersController::class)->group(function () {
        Route::get('/admin/manage/users', 'index')->name('admin.users');
        Route::get('/admin/manage/users/create', 'create')->name('admin.users.create');
        Route::get('/admin/manage/users/show', 'show')->name('admin.users.show');
        //add another route for this controller
    });
    Route::controller(RolesController::class)->group(function () {
        Route::get('/admin/manage/roles', 'index')->name('admin.roles');
        Route::get('/admin/manage/roles/create', 'create')->name('admin.roles.create');
        Route::get('/admin/manage/roles/show', 'show')->name('admin.roles.show');
        //add another route for this controller
    });
    //add another controller for admin user
});

// ==================== verifikator ==================== //
Route::namespace('App\Http\Controllers')->middleware(['auth', 'user-access:verifikator'])->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/verifikator/home', 'verifhome')->name('verif.home');
        //add another route for HomeController for this usertype
    });

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/verifikator/dashboard/data', 'verifikator')->name('verif.dashboard.data');
        Route::get('/verifikator/dashboard/peta', 'peta_verif')->name('verif.dashboard.peta');
        //add another route for HomeController for this usertype
    });

    //daftar pengajuan dan pelaksanaan verifikasi lapangan
    Route::controller(VerificationOnfarmController::class)->group(function () {
        Route::get('/verifikator/verify/onfarm', 'index')->name('verif.onfarm');
        Route::get('/verifikator/verify/onfarm/add', 'add')->name('verif.onfarm.add');
        Route::get('/verifikator/verify/onfarm/show', 'show')->name('verif.onfarm.show');
        Route::get('/verifikator/verify/onfarm/detail', 'detail')->name('verif.onfarm.detail');
        //add another route for HomeController for this usertype
    });

    //daftar pengajuan dan pelaksanaan verifikasi online
    Route::controller(VerificationOnlineController::class)->group(function () {
        Route::get('/verifikator/verify/online', 'index')->name('verif.online');
        Route::get('/verifikator/verify/online/add', 'add')->name('verif.online.add');
        Route::get('/verifikator/verify/online/add/notes', 'notes')->name('verif.online.add.notes');
        Route::get('/verifikator/verify/online/show', 'show')->name('verif.online.show');
        Route::get('/verifikator/verify/online/detail', 'detail')->name('verif.online.detail');
        Route::get('/verifikator/verify/online/show/notes', 'notes')->name('verif.online.show.notes');
        //add another route for HomeController for this usertype
    });
    //add another controller
});

// ==================== normal user ==================== //
Route::namespace('App\Http\Controllers')->middleware(['auth', 'user-access:user'])->group(function () {
    //landing
    Route::controller(HomeController::class)->group(function () {
        Route::get('/user/home', 'userhome')->name('user.home');
        //add another route for HomeController for this usertype
    });
    //dashboard
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/user/dashboard/data', 'user')->name('user.dashboard.data');
        Route::get('/user/dashboard/peta', 'peta_user')->name('user.dashboard.peta');
        //add another route for HomeController for this usertype
    });
    
    //sinkronisasi data dengan RIPH
    Route::controller(PullsyncController::class)->group(function () {
        Route::get('/user/pullsync/index', 'index')->name('user.pullsync');
        Route::get('/user/pullsync/detail', 'detail')->name('user.pullsync.detail');
        Route::get('/user/pullsync/success', 'success')->name('user.pullsync.success');
        Route::get('/user/pullsync/fail', 'fail')->name('user.pullsync.fail');
        //add another route for HomeController for this usertype
    });
    
    //data RIPH
    Route::controller(CommitmentController::class)->group(function () {
        Route::get('/user/commitment/index', 'index')->name('user.commitment.index');
        Route::get('/user/commitment/detail', 'detail')->name('user.commitment.detail');
        //add another route for HomeController for this usertype
    });
    
    //data perjanjian kerja, anggota poktan, saprodi
    Route::controller(PksController::class)->group(function () {
        Route::get('/user/pks/create', 'create')->name('user.pks.create');
        Route::get('/user/pks/show', 'show')->name('user.pks.show');
        Route::get('/user/pks/members', 'members')->name('user.pks.members');
        Route::get('/user/pks/saprodi', 'saprodi')->name('user.pks.saprodi');
        //add another route for HomeController for this usertype
    });
    
    //data pelaksanaan tanam-produksi dan catatan usaha tani
    Route::controller(FarmController::class)->group(function () {
        Route::get('/user/farm/index', 'index')->name('user.farm.index');
        Route::get('/user/farm/create', 'create')->name('user.farm.create');
        Route::get('/user/farm/show', 'show')->name('user.farm.show');
        Route::get('/user/farm/notes', 'notes')->name('user.farm.notes');
        //add another route for HomeController for this usertype
    });
    
    //pengajuan verifikasi oleh pengguna
    Route::controller(PengajuanController::class)->group(function () {
        Route::get('/user/submission/index', 'index')->name('user.submission.index');
        Route::get('/user/submission/vcheck', 'vcheck')->name('user.submission.vcheck');
        Route::get('/user/submission/sklcheck', 'sklcheck')->name('user.submission.sklcheck');
        Route::get('/user/submission/sklfail', 'sklfail')->name('user.submission.sklfail');
        Route::get('/user/submission/sklsuccess', 'sklsuccess')->name('user.submission.sklsuccess');
        Route::get('/user/submission/submitted', 'submitted')->name('user.submission.submitted');
        Route::get('/user/submission/vfail', 'vfail')->name('user.submission.vfail');
        Route::get('/user/submission/vsuccess', 'vsuccess')->name('user.submission.vsuccess');
        //add another route for HomeController for this usertype
    });

    //daftar surat keterangan lunas
    Route::controller(SKLController::class)->group(function () {
        Route::get('/user/myskl/index', 'userskl')->name('user.myskl.index');
        Route::get('/user/myskl/show', 'form')->name('user.myskl.show');
        //add another route for HomeController for this usertype
    });

    //file management
    Route::controller(FilesController::class)->group(function () {
        Route::get('/user/myfiles/index', 'myfiles')->name('user.myfiles.index');
        Route::get('/user/mygalleries/index', 'mygalleries')->name('user.mygalleries.index');
        Route::get('/user/templates/index', 'index')->name('user.templates.index');
        //add another route for HomeController for this usertype
    });
    //add another controller
});

// ==================== v2 ==================== //
/*
V2 ini dimaksudkan untuk memfasilitasi
importir/pelaku usaha wajib tanam-produksi yang
telah menyelesaikan komitmen/kewajiban
namun belum melaporkan dan atau mendapat SKL.
*/
Route::namespace('App\Http\Controllers')->middleware(['auth', 'user-access:v2'])->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/v2/home', 'v2Home')->name('v2.home');
        //add another route for HomeController for this usertype
    });

    //dashboard
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/v2/user/dashboard/data', 'indexv2')->name('v2.dashboard.data');
        Route::get('/v2/user/dashboard/peta', 'peta_user')->name('v2.dashboard.peta');
        //add another route for HomeController for this usertype
    });

    //v2 commitment
    Route::controller(CommitmentController::class)->group(function () {
        Route::get('/v2/user/commitment/index', 'v2index')->name('v2.commitment.index');
        Route::get('/v2/user/commitment/detail', 'v2detail')->name('v2.commitment.detail');
        Route::get('/v2/user/commitment/create', 'v2create')->name('v2.commitment.create');
        Route::get('/v2/user/commitment/show', 'v2show')->name('v2.commitment.show');
        //add another route for HomeController for this usertype
    });

    //v2 pks
    //data perjanjian kerja, anggota poktan, saprodi
    Route::controller(PksController::class)->group(function () {
        Route::get('/v2/user/pks/create', 'createv2')->name('v2.pks.create');
        Route::get('/v2/user/pks/show', 'showv2')->name('v2.pks.show');
        Route::get('/v2/user/pks/members', 'membersv2')->name('v2.pks.members');
        Route::get('/v2/user/pks/saprodi', 'saprodiv2')->name('v2.pks.saprodi');
        //add another route for HomeController for this usertype
    });

    //v2 farm
    //data pelaksanaan tanam-produksi dan catatan usaha tani
    Route::controller(FarmController::class)->group(function () {
        Route::get('/v2/user/farm/index', 'indexv2')->name('v2.farm.index');
        Route::get('/v2/user/farm/create', 'createv2')->name('v2.farm.create');
        Route::get('/v2/user/farm/show', 'showv2')->name('v2.farm.show');
        Route::get('/v2/user/farm/notes', 'notesv2')->name('v2.farm.notes');
        //add another route for HomeController for this usertype
    });

    //v2 kelompoktani
    //data pelaksanaan tanam-produksi dan catatan usaha tani
    Route::controller(KelompoktaniController::class)->group(function () {
        Route::get('/v2/user/keltan/index', 'index')->name('v2.keltan.index');
        Route::get('/v2/user/keltan/create', 'create')->name('v2.keltan.create');
        Route::get('/v2/user/keltan/show', 'show')->name('v2.keltan.show');
        //add another route for HomeController for this usertype
    });

    //v2 anggota keltan
    //data pelaksanaan tanam-produksi dan catatan usaha tani
    Route::controller(AnggotaController::class)->group(function () {
        Route::get('/v2/user/keltan/anggota/index', 'index')->name('v2.keltan.anggota.index');
        Route::get('/v2/user/keltan/anggota/create', 'create')->name('v2.keltan.anggota.create');
        Route::get('/v2/user/keltan/anggota/show', 'show')->name('v2.keltan.anggota.show');
        //add another route for HomeController for this usertype
    });

    //pengajuan verifikasi oleh pengguna
    Route::controller(PengajuanController::class)->group(function () {
        Route::get('/v2/user/submission/index', 'indexv2')->name('v2.submission.index');
        Route::get('/v2/user/submission/vcheck', 'vcheckv2')->name('v2.submission.vcheck');
        Route::get('/v2/user/submission/sklcheck', 'sklcheckv2')->name('v2.submission.sklcheck');
        Route::get('/v2/user/submission/sklfail', 'sklfailv2')->name('v2.submission.sklfail');
        Route::get('/v2/user/submission/sklsuccess', 'sklsuccessv2')->name('v2.submission.sklsuccess');
        Route::get('/v2/user/submission/submitted', 'submittedv2')->name('v2.submission.submitted');
        Route::get('/v2/user/submission/vfail', 'vfailv2')->name('v2.submission.vfail');
        Route::get('/v2/user/submission/vsuccess', 'vsuccessv2')->name('v2.submission.vsuccess');
        //add another route for HomeController for this usertype
    });

    //daftar surat keterangan lunas
    Route::controller(SKLController::class)->group(function () {
        Route::get('/v2/user/myskl/index', 'usersklv2')->name('v2.myskl.index');
        Route::get('/v2/user/myskl/show', 'formv2')->name('v2.myskl.show');
        //add another route for HomeController for this usertype
    });
    
    //file management
    Route::controller(FilesController::class)->group(function () {
        Route::get('/v2/user/myfiles/index', 'myfiles')->name('v2.myfiles.index');
        Route::get('/v2/user/mygalleries/index', 'mygalleries')->name('v2.mygalleries.index');
        Route::get('/v2/user/templates/index', 'index')->name('v2.templates.index');
        //add another route for HomeController for this usertype
    });
    //add another controller for v2 user
});

//all users
Route::namespace('App\Http\Controllers')->middleware(['auth'])->group(function () {
    Route::controller(FeedsController::class)->group(function () {
        Route::get('/feeds/index', 'index')->name('feeds.index');
        Route::get('/feeds/create', 'create')->name('feeds.create');
        Route::get('/feeds/read', 'read')->name('feeds.read');
        Route::get('/feeds/show', 'show')->name('feeds.show');
        Route::get('/feeds/update', 'update')->name('feeds.update');
        //add another route for this controller
    });
    Route::controller(MessengerController::class)->group(function () {
        Route::get('/messenger/index', 'index')->name('messenger.index');
        Route::get('/messenger/create', 'create')->name('messenger.create');
        Route::get('/messenger/read', 'read')->name('messenger.read');
        Route::get('/messenger/inbox', 'inbox')->name('messenger.inbox');
        Route::get('/messenger/outbox', 'outbox')->name('messenger.outbox');
        Route::get('/messenger/trash', 'trash')->name('messenger.trash');
        //add another route for this controller
    });

    Route::controller(ProfilesController::class)->group(function () {
        Route::get('/myprofile/1', 'edit')->name('myprofile');
        Route::get('/password', 'password')->name('password');
        //add another route for this controller
    });

    Route::controller(howtoController::class)->group(function () {
        Route::get('/howto', 'index')->name('howto');
        Route::get('/builds', 'builds')->name('builds');
        //add another route for this controller
    });
});

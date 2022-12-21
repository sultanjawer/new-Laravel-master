{{-- menu Pelaporan Komitmen:
    1. daftar komitmen
    2. sub page create
    3. sub page show
    4. sub page detail: beserta seluruh halaman terkait
--}}
@extends ('layouts.admin')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
<div class="row">
    <div class="col-md-12">
        <div id="panel-1" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
            <div class="panel-hdr">
                <h2>
                    Daftar Komitmen <span class="fw-300"><i>Wajib Tanam</i></span>
                </h2>
                <div class="panel-toolbar">
                    <a class="btn btn-xs btn-primary mr-1 ml-1" href="{{route('v2.commitment.create')}}"><i class="fal fa-plus mr-1"></i>Add RIPH</a>
                    @include('partials.globaltoolbar')
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <table id="riphList" class="table table-sm table-bordered table-hover table-striped w-100">
                        <thead class="bg-info text-white">
                            <tr>
                                <th id="status"></th>
                                <th id="year" hidden>Tahun Terbit</th>
                                <th id="no_riph">No. RIPH</th>
                                <th id="date_start">Tanggal Terbit</th>
                                <th id="locus" width="10%">Lokasi Tanam</th>
                                <th id="vol_riph">V. RIPH (ton)</th>
                                <th id="crops_target">Target Tanam (ha)</th>
                                <th id="crops_progress">Realisasi Tanam (ha)</th>
                                <th id="harvest_target">Target Produksi (ton)</th>
                                <th id="harvest_progress">Realisasi Produksi (ton)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"><i class="fas fa-exclamation-triangle text-warning" data-toggle="tooltip" title data-original-title="WARNING! No Data Available"></i></td>
                                <td hidden>2022</td>
                                <td><a href="{{route('v2.commitment.detail')}}" data-toggle="tooltip" data-original-title="lihat data">0155/PP.240/D/03/2022</a></td>
                                <td>2022-03-24</td>
                                <td>3323 - 33</td>
                                <td>5.640</td>
                                <td>autocalculate</td>
                                <td>total tanam</td>
                                <td>autocalculate</td>
                                <td>total produksi</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- @parent -->
<!-- start script for this page -->
@section('scripts')
<script src="{{ asset('/js/datagrid/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('/js/datagrid/datatables/datatables.export.js') }}"></script>
<script>
    $(document).ready(function() {
        // initialize datatable
        $('#riphList').dataTable({
            pagingType: 'full_numbers',
            responsive: true,
            lengthChange: false,
            pageLength: 10,
            order: [
                [0, 'asc']
            ]
        });

    });
</script>
@endsection
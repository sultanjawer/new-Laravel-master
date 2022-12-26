@extends ('layouts.global')
@section ('style')
<style>
    .bg-gradient {
        background: linear-gradient(90deg, #beaed7, #886ab5);
    }

    .display-5 {
        font-size: 2rem;
    }

    .display-6 {
        font-size: 1.5rem;
    }
</style>
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
<div class="row">
	<div class="col-md-4">
		<div id="totalRiph" class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g">
			<div class="">
				<h3 class="display-5 d-block l-h-n m-0 fw-500" data-toggle="tooltip" title data-original-title="Volume import produk hortikultura yang tercantum di dalam Surat Rekomendasi Import Produk Hortikultura">
					35.000
					<small class="m-0 l-h-n">Volume RIPH (ton)</small>
				</h3>
			</div>
			<i class="fal fa-globe-asia position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
		</div>
	</div>
	<div class="col-md-4">
		<div id="totalTanam" class="p-3 bg-success-300 rounded overflow-hidden position-relative text-white mb-g">
			<div class="">
				<h3 class="display-5 d-block l-h-n m-0 fw-500" data-toggle="tooltip" title data-original-title="Jumlah Realisasi Tanam yang telah dilaporkan oleh pelaku usaha hingga saat ini.">
					5
					<small class="m-0 l-h-n">Kelompoktani</small>
				</h3>
			</div>
			<i class="fal fa-users position-absolute pos-right pos-bottom opacity-30 mb-n1 mr-n1" style="font-size:6rem"></i>
		</div>
	</div>
	<div class="col-md-4">
		<div id="totalProduksi" class="p-3 bg-warning-300 rounded overflow-hidden position-relative text-white mb-g">
			<div class="">
				<h3 class="display-5 d-block l-h-n m-0 fw-500" data-toggle="tooltip" title data-original-title="Jumlah Realisasi Produksi yang telah dilaporkan oleh pelaku usaha hingga saat ini.">
					50.000.000
					<small class="m-0 l-h-n">Bantuan Saprodi (rupiah)</small>
				</h3>
			</div>
			<i class="fal fa-hands-helping position-absolute pos-right pos-bottom opacity-40 mb-n1 mr-n1" style="font-size:6rem"></i>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="panel" id="panel-1">
			<div class="panel-hdr">
				<h2>
					<i class="subheader-icon fal fa-seedling mr-1"></i>Realisasi <span class="fw-300"><i>Wajib Tanam</i></span>
				</h2>
			</div>
			<div class="panel-container show">
				<div class="panel-content">
					<!-- Row -->
					<div class="row mb-3">
						<div class="col-lg-5 col-sm-6 align-self-center text-center">
							<div class="c-chart-wrapper">
								<div 
									id = "naschart"
									class="js-easy-pie-chart color-success-300 position-relative d-inline-flex align-items-center justify-content-center"
									data-percent="75.74"
									data-piesize="145"
									data-linewidth="10"
									data-linecap="butt"
									data-scalelength="7"
									data-toggle="tooltip"
									title data-original-title="74,24% dari Kewajiban"
									data-placement="bottom">
									<div class="d-flex flex-column align-items-center justify-content-center position-absolute pos-left pos-right pos-top pos-bottom fw-300 fs-xl">
										<span class="fs-xxl fw-500 text-dark">74.24<sup>%</sup></span>
										<!--<span class="display-3 fw-500 js-percent d-block text-dark">97.68</span>-->
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-7 col-sm-6">
							<div class="shadow-1 p-1 bg-success-100 rounded overflow-hidden position-relative text-white mb-2">
								<div class="">
									<span class="small">Kewajiban</span>
									<h5 class="d-block l-h-n m-0 fw-500">
										123.456.789 ha
									</h5>
								</div>
								<i class="fal fa-hand-holding-seedling position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:3rem"></i>
							</div>
							<div class="shadow-1 p-1 bg-success-300 rounded overflow-hidden position-relative text-white mb-2">
								<div class="">
									<span class="small">Realisasi</span>
									<h5 class="d-block l-h-n m-0 fw-500">
										123.456.789 ha
									</h5>
								</div>
								<i class="fal fa-seedling position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:3rem"></i>
							</div>
							<div class="shadow-1 p-1 bg-success-500 rounded overflow-hidden position-relative text-white mb-2">
								<div class="">
									<span class="small">Diverifikasi</span>
									<h5 class="d-block l-h-n m-0 fw-500">
										123.456.789 ha
									</h5>
								</div>
								<i class="fal fa-leaf position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:3rem"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel" id="panel-2">
			<div class="panel-hdr">
				<h2>
					<i class="subheader-icon fal fa-balance-scale-left mr-1"></i>Realisasi <span class="fw-300"><i>Wajib Produksi</i></span>
				</h2>
			</div>
			<div class="panel-container show">
				<div class="panel-content">
					<!-- Row -->
					<div class="row mb-3">
						<div class="col-lg-5 col-sm-6 align-self-center text-center">
							<div class="c-chart-wrapper">
								<div  id = "naschart" class="js-easy-pie-chart color-warning-500 position-relative d-inline-flex align-items-center justify-content-center" data-percent="75.74" data-piesize="145" data-linewidth="10" data-linecap="butt" data-scalelength="7" data-toggle="tooltip" title data-original-title="74,24% dari Kewajiban" data-placement="bottom">
									<div class="d-flex flex-column align-items-center justify-content-center position-absolute pos-left pos-right pos-top pos-bottom fw-300 fs-xl">
										<span class="fs-xxl fw-500 text-dark">74.24<sup>%</sup></span>
										<!--<span class="display-3 fw-500 js-percent d-block text-dark">97.68</span>-->
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-7 col-sm-6">
							<div class="shadow-1 p-1 bg-warning-300 rounded overflow-hidden position-relative text-white mb-2">
								<div class="">
									<span class="small">Kewajiban</span>
									<h5 class="d-block l-h-n m-0 fw-500">
										123.456.789 ha
									</h5>
								</div>
								<i class="fal fa-dolly-empty position-absolute pos-right pos-bottom opacity-30 mb-n1 mr-n1" style="font-size:3rem"></i>
							</div>
							<div class="shadow-1 p-1 bg-warning-500 rounded overflow-hidden position-relative text-white mb-2">
								<div class="">
									<span class="small">Realisasi</span>
									<h5 class="d-block l-h-n m-0 fw-500">
										123.456.789 ha
									</h5>
								</div>
								<i class="fal fa-dolly position-absolute pos-right pos-bottom opacity-30 mb-n1 mr-n1" style="font-size:3rem"></i>
							</div>
							<div class="shadow-1 p-1 bg-warning-700 rounded overflow-hidden position-relative text-white mb-2">
								<div class="">
									<span class="small">Diverifikasi</span>
									<h5 class="d-block l-h-n m-0 fw-500">
										123.456.789 ha
									</h5>
								</div>
								<i class="fal fa-dolly-flatbed position-absolute pos-right pos-bottom opacity-30 mb-n1 mr-n1" style="font-size:3rem"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="panel" id="panel-2">
			<div class="panel-hdr">
				<h2>
					<i class="subheader-icon fal fa-ballot-check mr-1"></i>STATUS <span class="fw-300"><i>Verifikasi</i></span>
				</h2>
				<div class="panel-toolbar">
					@include('partials.globaltoolbar')
				</div>
			</div>
			<div class="panel-container show">
				<div class="panel-content">
					<div class="table-responsive">
						<table id="sum_verif" class="table table-xs table-bordered table-striped tabel-hover table-sm w-100">
							<thead class="bg-gradient text-white text-center fw-500">
								<tr>
									<th rowspan="2">Nomor RIPH</th>
									<th colspan="2">Tahap 1 <sup>(Lapangan)</sup></th>
									<th rowspan="2">Tahap 2 <sup>(Online)</sup></th>
									<th rowspan="2">Tahap 3 <sup>SKL</sup></th>
									<th rowspan="2">Status</th>
								</tr>
								<tr>
									<th>Tanam</th>
									<th>Produksi</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<tr>
									<td><a href="/pengajuan/submitted">xxxx/PP.240/D/MM/YYY</a></td>
									<td><span class="badge btn-sm btn-success">Verified</span></td>
									<td><span class="badge btn-sm btn-danger">Verified</span></td>
									<td><span class="badge btn-sm btn-warning">On progress</span></td>
									<td><span class="badge btn-sm btn-info">Submitted</span></td>
									<td>Verifying</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
<!-- @parent -->
@section('scripts')
<!-- start script for this page -->
<script src="{{ asset('/js/statistics/easypiechart/easypiechart.bundle.js') }}"></script>
<script src="{{ asset('/js/datagrid/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('/js/datagrid/datatables/datatables.export.js') }}"></script>
<script src="{{asset('js/materialkit/plugins/countup.min.js')}}"></script>

<script>
    $(document).ready(function() {
        $('#a').dataTable({
            responsive: true,
            pageLength: 10,
            order: [
                [0, 'asc']
            ]
        });
    });
</script>

<script>
    $(document).ready(function() {

        // initialize datatable
        $('#sum_verif').dataTable({
            processing: true,
            serverside: true,
            pagingType: 'full_numbers',
            responsive: true,
            lengthChange: false,
            pageLength: 10,
            order: [
                [0, 'asc']
            ],
            dom:
                /*	--- Layout Structure 
                	--- Options
                	l	-	length changing input control
                	f	-	filtering input
                	t	-	The table!
                	i	-	Table information summary
                	p	-	pagination control
                	r	-	processing display element
                	B	-	buttons
                	R	-	ColReorder
                	S	-	Select

                	--- Markup
                	< and >				- div element
                	<"class" and >		- div with a class
                	<"#id" and >		- div with an ID
                	<"#id.class" and >	- div with an ID and a class

                	--- Further reading
                	https://datatables.net/reference/option/dom
                	--------------------------------------
                 */
                "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [{
                    extend: 'colvis',
                    text: 'Visibility',
                    titleAttr: 'Col visibility',
                    className: 'btn-outline-info btn-xs mr-sm-3 ml-5'
                },
                {
                    extend: 'pdfHtml5',
                    text: 'PDF',
                    titleAttr: 'Generate PDF',
                    className: 'btn-outline-danger btn-xs mr-1'
                },
                {
                    extend: 'excelHtml5',
                    text: 'Excel',
                    titleAttr: 'Generate Excel',
                    className: 'btn-outline-success btn-xs mr-1'
                },
                /*{
                	extend: 'csvHtml5',
                	text: 'CSV',
                	titleAttr: 'Generate CSV',
                	className: 'btn-outline-primary btn-xs mr-1'
                },*/
                /*{
                	extend: 'copyHtml5',
                	text: 'Copy',
                	titleAttr: 'Copy to clipboard',
                	className: 'btn-outline-primary btn-xs mr-1'
                },*/
                {
                    extend: 'print',
                    text: 'Print',
                    titleAttr: 'Print Table',
                    className: 'btn-outline-primary btn-xs'
                }
            ]
        });

    });
</script>

<script type="text/javascript">
    if (document.getElementById('companyCount')) {
        const countUp = new CountUp('companyCount', document.getElementById("companyCount").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
    if (document.getElementById('volCount')) {
        const countUp = new CountUp('volCount', document.getElementById("volCount").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
    if (document.getElementById('areaCount')) {
        const countUp = new CountUp('areaCount', document.getElementById("areaCount").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
    if (document.getElementById('prodCount')) {
        const countUp = new CountUp('prodCount', document.getElementById("prodCount").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
</script>

@endsection
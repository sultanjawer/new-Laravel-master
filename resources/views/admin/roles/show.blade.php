@extends ('layouts.admin')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
<div class="row">
    <div class="col-12">
        <div id="panel-1" class="panel show" data-panel-sortable data-panel-close data-panel-collapsed>
            <div class="panel-hdr">
                <h2>
                    Data | <span class="fw-300"><i>Roles</i></span>
                </h2>
                <div class="panel-toolbar">
                    <a class="btn btn-danger btn-xs mr-2" href="{{ route('admin.roles.create') }}" data-toggle="tooltip" title="tambah data" data-original-title="tambah data">
                        <i class="fal fa-user-key mr-1"></i>Add New Roles
                    </a>
                    @include('partials.globaltoolbar')
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <form method="POST" action="{{ route("admin.roles.update", [$role->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <input name="permissions[]" id="idpermissions" type="hidden">
                        <div class="form-group">
                            <label class="required" for="title">{{ trans('cruds.role.fields.title') }}</label>
                            <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $role->title) }}" required>
                            @if($errors->has('title'))
                            <div class="invalid-feedback">
                                {{ $errors->first('title') }}
                            </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.role.fields.title_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <table class="table table-bordered table-striped table-hover ajaxTable datatable datatable-Role1">
                                <thead>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.permission.title') }}
                                            <div>
                                                <span class="btn btn-info btn-xs check-all" style="border-radius: 10">{{ trans('global.select_all') }}</span>
                                                <span class="btn btn-info btn-xs decheck-all" style="border-radius: 10">{{ trans('global.deselect_all') }}</span>
                                            </div>
                                        </th>
                                        <th width="20" class="text-center">
                                            acess
                                        </th>
                                        <th width="20" class="text-center">
                                            create
                                        </th>
                                        <th width="20" class="text-center">
                                            show
                                        </th>
                                        <th width="20" class="text-center">
                                            edit
                                        </th>
                                        <th width="20" class="text-center">
                                            delete
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($grpTitle as $id=>$label )
                                    @if ($label['is_hidden'] == "0")
                                    <tr>
                                        <td>
                                            @if ($label['is_parent'] == "1")
                                            <strong>{{ $label['title'] }}</strong>
                                            @else
                                            &nbsp;&nbsp;&nbsp;{{ $label['title'] }}
                                            @endif

                                        </td>
                                        <td style="padding-left: 44px;">
                                            @if ($label['can_access'] == "1")
                                            @if ($mnfound = false)
                                            @endif
                                            @foreach($permi as $data)
                                            @if (($role->permissions->contains($data->id))&&($data->grp_title==$label['title'])&&($data->perm_type ==5))
                                            <input class="form-check-input check1" type="checkbox" value="{{ $data->id }}" checked>
                                            @if ($mnfound = true)
                                            @endif
                                            @break
                                            @endif
                                            @endforeach
                                            @if (!$mnfound)
                                            @foreach($permi as $data)
                                            @if (($data->grp_title==$label['title'])&&($data->perm_type ==5))
                                            <input class="form-check-input check1" type="checkbox" value="{{ $data->id }}">
                                            @break
                                            @endif
                                            @endforeach

                                            @endif
                                            @endif
                                        </td>
                                        <td style="padding-left: 44px;">
                                            @if ($label['can_create'] == "1")
                                            @if ($mnfound = false)
                                            @endif
                                            @foreach($permi as $data)
                                            @if (($role->permissions->contains($data->id))&&($data->grp_title==$label['title'])&&($data->perm_type ==1))
                                            <input class="form-check-input check1" type="checkbox" value="{{ $data->id }}" checked>
                                            @if ($mnfound = true)
                                            @endif
                                            @break
                                            @endif
                                            @endforeach
                                            @if (!$mnfound)
                                            @foreach($permi as $data)
                                            @if (($data->grp_title==$label['title'])&&($data->perm_type ==1))
                                            <input class="form-check-input check1" type="checkbox" value="{{ $data->id }}">
                                            @break
                                            @endif
                                            @endforeach

                                            @endif
                                            @endif
                                        </td>
                                        <td style="padding-left: 44px;">
                                            @if ($label['can_view'] == "1")
                                            @if ($mnfound = false)
                                            @endif
                                            @foreach($permi as $data)
                                            @if (($role->permissions->contains($data->id))&&($data->grp_title==$label['title'])&&($data->perm_type ==3))
                                            <input class="form-check-input check1" type="checkbox" value="{{ $data->id }}" checked>
                                            @if ($mnfound = true)
                                            @endif
                                            @break
                                            @endif
                                            @endforeach
                                            @if (!$mnfound)
                                            @foreach($permi as $data)
                                            @if (($data->grp_title==$label['title'])&&($data->perm_type ==3))
                                            <input class="form-check-input check1" type="checkbox" value="{{ $data->id }}">
                                            @break
                                            @endif
                                            @endforeach

                                            @endif
                                            @endif
                                        </td>
                                        <td style="padding-left: 44px;">
                                            @if ($label['can_edit'] == "1")
                                            @if ($mnfound = false)
                                            @endif
                                            @foreach($permi as $data)
                                            @if (($role->permissions->contains($data->id))&&($data->grp_title==$label['title'])&&($data->perm_type ==2))
                                            <input class="form-check-input check1" type="checkbox" value="{{ $data->id }}" checked>
                                            @if ($mnfound = true)
                                            @endif
                                            @break
                                            @endif
                                            @endforeach
                                            @if (!$mnfound)
                                            @foreach($permi as $data)
                                            @if (($data->grp_title==$label['title'])&&($data->perm_type ==2))
                                            <input class="form-check-input check1" type="checkbox" value="{{ $data->id }}">
                                            @break
                                            @endif
                                            @endforeach

                                            @endif
                                            @endif
                                        </td>
                                        <td style="padding-left: 44px;">
                                            @if ($label['can_delete'] == "1")
                                            @if ($mnfound = false)
                                            @endif
                                            @foreach($permi as $data)
                                            @if (($role->permissions->contains($data->id))&&($data->grp_title==$label['title'])&&($data->perm_type ==4))
                                            <input class="form-check-input check1" type="checkbox" value="{{ $data->id }}" checked>
                                            @if ($mnfound = true)
                                            @endif
                                            @break
                                            @endif
                                            @endforeach
                                            @if (!$mnfound)
                                            @foreach($permi as $data)
                                            @if (($data->grp_title==$label['title'])&&($data->perm_type ==4))
                                            <input class="form-check-input check1" type="checkbox" value="{{ $data->id }}">
                                            @break
                                            @endif
                                            @endforeach

                                            @endif
                                            @endif
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btnsave">
                                {{ trans('global.save') }}
                            </button>
                            <a class="btn btn-danger" href="{{ route('admin.roles.index') }}">
                                {{ trans('global.cancel') }}
                            </a>
                        </div>
                    </form>
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
        //datatabel queue
        $('#roles_tbl').dataTable({
            processing: true,
            serverside: true,
            pagingType: 'full_numbers',
            responsive: true,
            pageLength: 15,
            order: [
                [1, 'asc']
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
                "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'B>>" +
                "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
                /*{
                	extend:    'colvis',
                	text:      'Column Visibility',
                	titleAttr: 'Col visibility',
                	className: 'mr-sm-3'
                },*/
                {
                    extend: 'pdfHtml5',
                    text: 'PDF',
                    titleAttr: 'Generate PDF',
                    className: 'btn-outline-danger btn-sm mr-1'
                },
                {
                    extend: 'excelHtml5',
                    text: 'Excel',
                    titleAttr: 'Generate Excel',
                    className: 'btn-outline-success btn-sm mr-1'
                },
                {
                    extend: 'csvHtml5',
                    text: 'CSV',
                    titleAttr: 'Generate CSV',
                    className: 'btn-outline-primary btn-sm mr-1'
                },
                {
                    extend: 'copyHtml5',
                    text: 'Copy',
                    titleAttr: 'Copy to clipboard',
                    className: 'btn-outline-primary btn-sm mr-1'
                },
                {
                    extend: 'print',
                    text: 'Print',
                    titleAttr: 'Print Table',
                    className: 'btn-outline-primary btn-sm'
                }
            ]
        });
    });
</script>
@endsection
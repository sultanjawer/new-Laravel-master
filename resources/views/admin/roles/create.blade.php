@extends ('layouts.admin')
@section ('style')
@endsection
@section('content')
<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
<div class="row">
    <div class="col-12">
        <form action="{{route('admin.roles.create')}}" enctype="multipart/form-data">
            @csrf
            <div id="panel-1" class="panel show" data-panel-sortable data-panel-close data-panel-collapsed>
                <div class="panel-hdr">
                    <h2>
                        New | <span class="fw-300"><i>Role</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        @include('partials.globaltoolbar')
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <input name="permissions[]" id="idpermissions" type="hidden">
                        <div class="form-group">
                            <label class="required" for="title">Role Name</label>
                            <input class="form-control form-control-sm" type="text" name="Role Name" id="title" required>
                            <div class="invalid-feedback">
                                You missed this one
                            </div>
                            <span class="help-block">Role Name</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="panel-2" class="panel show" data-panel-sortable data-panel-close data-panel-collapsed>
                <div class="panel-hdr">
                    <h2>
                        Permissions | <span class="fw-300"><i>Role</i></span>
                    </h2>
                    <div class="panel-toolbar">
                        @include('partials.globaltoolbar')
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="table">
                            <table id="permission_tbl" class="table table-sm table-bordered table-hover table-striped w-100">
                                <thead class="bg-warning-50">
                                    <tr>
                                        <th>Permission</th>
                                        <th>Access</th>
                                        <th>Create</th>
                                        <th>Show</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td width="45%">Permission Name</td>
                                        <td width="11%" class="text-center">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                <label class="custom-control-label" for="customSwitch1"></label>
                                            </div>
                                        </td>
                                        <td width="11%" class="text-center">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                                <label class="custom-control-label" for="customSwitch2"></label>
                                            </div>
                                        </td>
                                        <td width="11%" class="text-center">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                                <label class="custom-control-label" for="customSwitch3"></label>
                                            </div>
                                        </td>
                                        <td width="11%" class="text-center">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch4">
                                                <label class="custom-control-label" for="customSwitch4"></label>
                                            </div>
                                        </td>
                                        <td width="11%" class="text-center">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                                <label class="custom-control-label" for="customSwitch5"></label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="form-group">
                        <button class="btn btn-success">
                            Save
                        </button>
                        <a class="btn btn-danger" href="{{ route('admin.roles') }}">
                            Cancel
                        </a>
                    </div>
                </div>
            </div>
        </form>
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
        $('#permission_tbl').dataTable({
            processing: true,
            serverside: true,
            pagingType: 'full_numbers',
            responsive: true,
            order: [
                [1, 'asc']
            ],
        });


    });
</script>
@endsection
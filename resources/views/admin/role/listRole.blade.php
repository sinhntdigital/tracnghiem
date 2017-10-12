@extends('admin.app')
@section('page_content')
	<a href="{{route('listRole.create')}}" class="btn btn-info" style="float: right;margin-bottom: 20px;">Thêm Role</a>
	    <table class="table table-bordered" id="users-table">
	        <thead>
	            <tr>
	                <th>Id</th>
	                <th>Quyền</th>
	                <th>Ngày tạo</th>
	                <th>Hành động</th>
	            </tr>
	        </thead>
	    </table>
	    <h2 style="background: red;color:yellow;text-align: center;"><?php if(session('luu')) echo session('luu'); ?></h2>
	    <h2 style="background: red;color:yellow;text-align: center;"><?php if(session('status')) echo session('status'); ?></h2>
	@endsection

	@section('scripts')
	<script>
	$(function() {
	    $('#users-table').DataTable({
	        processing: true,
	        serverSide: true,
	        ajax: '{!! route("datatables_role") !!}',
	        columns: [
	            { data: 'id', name: 'id' },
	            { data: 'name', name: 'name' },
	            { data: 'created_at', name: 'created_at' },
	            { data: 'action', name: 'action' , orderable: false, searchable: false}
	        ]
	    });
	});
	</script>
@endsection
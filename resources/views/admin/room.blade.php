@extends('template/master')

@section('title_page', 'Rooms Title')

@section('head_page', 'Master Room')

@section('some_assets')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap JavaScript -->
    
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('rooms.datatable') }}",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'place', name: 'place' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>

@endsection

@section('content')
<div class="header">
    <h4 class="title">Email Statistics</h4>
    <p class="category">Last Campaign Performance</p>
</div>
<div class="content">
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Place</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
    </table>

    <div class="footer">
        <div class="legend">
            <i class="fa fa-circle text-info"></i> Open
            <i class="fa fa-circle text-danger"></i> Bounce
            <i class="fa fa-circle text-warning"></i> Unsubscribe
        </div>
        <hr>
        <div class="stats">
            <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
        </div>
    </div>
</div>



@endsection
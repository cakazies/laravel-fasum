@extends('template/master')

@section('title_page', 'Rooms Title')

@section('head_page', 'Master Room')

@section('content')
<div class="header">
    <h4 class="title">Email Statistics</h4>
    <p class="category">Last Campaign Performance</p>
</div>
<div class="content">
    <div id='loading'>loading...</div>
    <div id='calendar'></div>

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
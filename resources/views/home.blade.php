@extends('layouts.app')
@section('content')
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Dashboard</a></li>
            </ul>
        </div>
    </div>
    <div class="row animated fadeInUp">
        <div class="col-sm-12 col-lg-9">
            <div class="row">
                <h1> Header </h1>
            </div>
        </div>
    </div>
@endsection

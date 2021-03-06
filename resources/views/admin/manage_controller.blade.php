@extends('layouts.app')
@section('content')
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Dashboard</a></li>
                <li><i aria-hidden="true"></i><a href="javascript:avoid(0)">Admin</a></li>
                <li><i aria-hidden="true"></i><a href="javascript:avoid(0)">Manage Brand</a></li>
            </ul>
        </div>
    </div>
    <div class="row animated fadeInUp">
        <div class="col-sm-12 col-lg-9">
            <div class="row">
                <div class="col-sm-12 col-md-10  col-md-offset-2">
                    @include('includs.message');
                    <div class="panel bt-md b-primary">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-xs-6">
                                    <h4>Manage Brand</h4>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <a href="{{ route('add-brand') }}" class="btn btn-primary">Add Brand </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table id="basic-table" class="table-bordered data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Sl No</th>
                                                <th>Brand Name</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($i=1)
                                            @foreach($brand as $row)
                                            <tr>
                                                <td> {{ $i }} </td>
                                                <td> {{ $row->brand_name }} </td>
                                                <td> {{ $row->status == 1 ? 'Active':'Inactive' }} </td>
                                                <td>
                                                    @if($row->status == 1)
                                                    <a href="{{ route('inactive-brand',$row->id) }}" class="btn btn-info btn-xs"> <i class="fa fa-arrow-up"> </i> </a>
                                                    @else
                                                     <a href="{{ route('active-brand',$row->id) }}" class="btn btn-warning btn-xs"> <i class="fa fa-arrow-down"> </i> </a>
                                                    @endif
                                                    <a href="{{ route('edit-brand',$row->id) }}" class="btn btn-warning btn-xs"> <i class="fa fa-pencil"> </i> </a>
                                                    <a href="{{ route('delete-brand',$row->id) }}" class="btn btn-danger btn-xs"> <i class="fa fa-trash-o"> </i> </a>
                                                </td>
                                            </tr>
                                                @php($i++)
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

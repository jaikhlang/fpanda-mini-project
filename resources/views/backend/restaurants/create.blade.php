@extends('backend.layouts.app')
@section('title', 'Restaurants-Create')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-info">
                <div class="box-header">
                    Create Restaurants
                </div>
                <div class="box-body">
                  {!! Form::open(['route' => 'restaurants.store', 'method' => 'POST']) !!}
                      {!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Location Name']) !!}<br/>
                      {!! Form::submit('Create Restaurants',['class' => 'btn btn-primary btn-md']) !!}
                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- /.content -->
</div>

@endsection

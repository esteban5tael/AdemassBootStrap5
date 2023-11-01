@extends('layouts.base')

@section('title')
    Class 03 | Layouts
@endsection

@section('h')
    Class 03 | Layouts
@endsection

@section('content')
    <div class="container">
        <hr>
        Row 01
        <hr>
        <div class="row">
            <div class="col bg-primary">Column 01 in Auto</div>
            <div class="col bg-info">Column 02 in Auto</div>
            <div class="col bg-warning">Column 03 in Auto</div>
        </div>
        <hr>
        Row 02
        <hr>
        <div class="row">
            <div class="col-6 bg-danger">Column 01 in 50%</div>
            <div class="col-6 bg-success">Column 02 in 50%</div>
        </div>
        <hr>
        Row 03
        <hr>
        <div class="row">
            <div class="col-3 bg-secondary">Column 01 in 25%</div>

        </div>
        <hr>
    </div>
    <h2 class="text-center m-1">Break Points</h2>
    {{--  --}}
    <div class="container">
        <hr>
        Row 02
        <hr>
        <div class="row">
            <div class="col-lg-6 col-md-12 bg-danger">Column 01</div>
            <div class="col-lg-6 col-md-12 bg-success">Column 02</div>

        </div>
        <hr>
    </div>
@endsection

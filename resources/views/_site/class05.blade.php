@extends('layouts.base')

@section('title')
    Class 05 | Frameworks Import
@endsection

@section('h')
    Class 05 | Frameworks Import
@endsection

@section('content')
    <div class="card m-4">

        <div class="card-body">
            <div class="card m-1 p-2">
                <a href="https://ng-bootstrap.github.io/#/home" target="_blank">Angular</a>
            </div>

            <div class="card m-1 p-2">
                <a href="https://react-bootstrap.netlify.app/" target="_blank">React</a>
            </div>

            <div class="card m-1 p-2">
                <h2>Vue 3</h2>
                <p>npm i --save bootstrap</p>
                <p>npm i @popperjs/core</p>
                <p>npm i --save bootstrap && npm i @popperjs/core</p>
                <p>------------------- main.ts - - - main.js ----------------</p>
                <p>import "bootstrap/dist/css/bootstrap.min.css";</p>
                <p>import "bootstrap";</p>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row mb-5">
            <div class="col-6">
                <h1>{{$type->title}}</h1>
                <h3>{{$type->description}}</h3>
            </div>
        </div>
    </div>
@endsection
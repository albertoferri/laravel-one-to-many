@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <div class="d-flex justify-content-between align-items-center pb-5">
            <h1>PROGETTI</h1>
    
            <a href="{{route('project.create')}}" class="btn btn-primary fw-bold text-uppercase">crea</a>

        </div>

        <div class="row row-cols-3 gap-4">
            @foreach ($projects as $project)
            <div class="card mb-3">
                <img src="{{asset('storage/' . $project->thumb)}}" class="card-img-top  " alt="immagine progetto" style="height: 200px;">
                <div class="card-body">
                  <h5 class="card-title">{{$project->name}}</h5>
                  <p class="card-text">{{$project->skill}}</p>
                  <a class="btn btn-primary my-2" href="{{$project->git_url}}">APRI REPO</a><br>
                  <a href="{{route('project.show', $project->id)}}" class="btn btn-success fw-bold text-uppercase">maggiori informazioni</a>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
@endsection
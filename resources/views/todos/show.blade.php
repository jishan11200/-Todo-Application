@extends('layouts.app')
@section('title','Todo | Show')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">{{$todo->name}}</h2>
                </div>
                <div class="card-body">
                    {{$todo->details}}
                        <br> <br>
                    <a href="/todos/edit/{{$todo->id}}" class="btn btn-primary btn-sm">Edit</a>||
                    <a href="/todos/delete/{{$todo->id}}" class="btn btn-danger btn-sm">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('title','Todo | List')
@section('content')
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title text-center">Todo List</h2>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($todos as $todo )
                            <li class="list-group-item">{{$todo->name}}

                                 <a href="/todos/{{$todo->id}}" class="btn btn-info float-end">View</a>
                                @if(!$todo->complated)
                                <a href="/todos/complate/{{$todo->id}}" class="btn btn-warning float-end mx-2">Complate</a>
                                @endif

                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
 @endsection

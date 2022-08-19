@extends('layouts.app')
@section('title','Create | Todo')
@section('content')
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title text-center">Todo List</h2>
                            </div>
                            <div class="card-body">
                               <form action="/store" method="post">
                                @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                       @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>

                               <div class="form-group">
                                        <label>Details</label>
                                        <textarea name="details"  rows="5" class="form-control"></textarea>
                                    </div>
                                    <input type="submit" value="Create Todo" class="form-control mt-3 btn btn-primary">
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
@endsection




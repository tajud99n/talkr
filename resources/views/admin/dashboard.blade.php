@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-3">
        <div class="card">
            <div class="card-header text-center bg-info">
                POSTS
            </div>
            <div class="card-body">
                <h2 class="text-center">{{ $posts_count }}</h1>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="card-header text-center bg-danger">
                TRASHED POSTS
            </div>
            <div class="card-body">
                <h2 class="text-center">{{ $trashed_count }}</h1>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="card-header text-center bg-success">
                USERS
            </div>
            <div class="card-body">
                <h2 class="text-center">{{ $users_count }}</h2>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="card-header text-center bg-primary">
                CATEGORIES
            </div>
            <div class="card-body">
                <h2 class="text-center">{{ $categories_count }}</h2>
            </div>
        </div>
    </div>
    </div>
@endsection

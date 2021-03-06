@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="card-header">{{ __('Name:') }} {{ Auth::user()->name }}</div>
                <div class="card-header">{{ __('Telephone:') }} {{ Auth::user()->telephone }}</div>
                <div class="card-header">{{ __('Email:') }} {{ Auth::user()->email }}</div>
            </div>
        </div>
    </div>
</div>
@endsection

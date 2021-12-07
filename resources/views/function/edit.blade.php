@extends('layouts.app')

@section('content')
<form method="POST" style="width: 500px; margin: auto" action="{{ route('userUpdate', Auth::user()->id) }}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
  <input type="hidden" name="_method" value="PUT" />
  <div class="form-group">
    <label for="name">Name</label>
    <input
      type="text"
      name="name"
      value="{{ Auth::user()->name }}"
      class="form-control"
    />
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input
      type="email"
      name="email"
      value="{{ Auth::user()->email }}"
      class="form-control"
    />
  </div>
  <div class="form-group">
    <label for="telephone">Telephone</label>
    <input
      type="telephone"
      name="telephone"
      value="{{ Auth::user()->telephone }}"
      class="form-control"
    />
  </div>
  <button type="submit" style="margin: 30px 100px" class="btn btn-primary">
    <i class="fa fa-btn fa-sign-in"></i>Update
  </button>
  <button type="submit" style="margin: 30px 50px" class="btn btn-primary">
    <i class="fa fa-btn fa-sign-in"  href="{{ route('home') }}"></i>Cancel
  </button>
</form>

@endsection
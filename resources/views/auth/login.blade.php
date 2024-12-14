@extends('layouts.no-nav')

@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center vh-100 bg-primary">
    <form method="POST" action="{{ route('login') }}" class="shadow p-5 rounded" style="width: 350px; background: #fff;">
        @csrf
        <div class="text-center mb-4">
            <i class="bi bi-hexagon-fill text-primary" style="font-size: 50px;"></i>
            <h4 class="text-center mb-4">Employee Data Master</h4>

            <div class="mb-3">
                <label for="email" class="form-label"></label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Enter Your email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"></label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="Enter Your Password">
            </div>
            <button type="submit" class="btn btn-primary w-100" href="{{ route('default') }}"> Log In </button>
    </form>
</div>
@endsection
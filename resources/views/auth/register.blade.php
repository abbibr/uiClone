@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <nav class="navbar bg-white rounded p-4 mt-5" style="width: 500px;">
            <form class="row g-3 d-flex justify-content-center" action="{{ route('add') }}" method="post">
                @csrf
                <div class="col-12">
                    <label for="text" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') border-danger @enderror" 
                        autocomplete="off" id="text" name="name" value="{{ old('name') }}">
                </div>
                @error('name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="text" class="form-control @error('email') border-danger @enderror" 
                        autocomplete="off" id="inputEmail4" name="email" value="{{ old('email') }}">
                </div>
                @error('email')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') border-danger @enderror" 
                        id="inputPassword4" name="password" value="{{ old('password') }}">
                </div>
                @error('password')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="col-12">
                    <label for="pass" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="pass" name="password_confirmation">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign up</button>
                </div>
            </form>
        </nav>
    </div>
@endsection
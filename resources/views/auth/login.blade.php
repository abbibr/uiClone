@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <nav class="navbar bg-white rounded p-4 mt-5" style="width: 500px;">
            <div class="col-12">
                @if(session()->has('status'))
                    <div class="alert alert-danger text-center">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <form class="row g-3 d-flex justify-content-center" action="{{ route('enter') }}" method="post">
                @csrf
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="text" class="form-control @error('email') border-danger @enderror" autocomplete="off" id="inputEmail4" name="email" value="{{ old('email') }}">
                </div>
                @error('email')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') border-danger @enderror" autocomplete="off" id="inputPassword4" name="password" value="{{ old('password') }}">
                </div>
                @error('password')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="token" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Remember me
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </nav>
    </div>
@endsection
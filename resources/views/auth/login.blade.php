@extends('layouts.app-volt')

@section('content')
    <div class="bg-white w-full vh-100 col-12 d-flex align-items-center justify-content-center">
        <div class="col-md-6">
            <p class="text-center mt-2">
                <a href="{{ url('/') }}" class="d-flex align-items-center justify-content-center">
                    <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
                    Back to homepage
                </a>
            </p>
            <div class="d-flex align-items-center justify-content-center">
                <div class="bg-white shadow border-0 rounded border-light p-4">
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <h1 class="mb-0 h3">Sign in to our platform</h1>
                    </div>
                    <form action="{{ route('login') }}" class="mt-4" method="POST">
                        @csrf
                        <!-- Form -->
                        <div class="form-group mb-4">
                            <label for="email">Your Email</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                        </path>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                    </svg>
                                </span>
                                <input type="email" id="email" autocomplete="on"
                                    class="form-control @error('email')
                                    is-invalid
                                @enderror"
                                    placeholder="example@company.com" name="email" autofocus value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- End of Form -->
                        <div class="form-group">
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="password">Your Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2">
                                        <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                    <input type="password" placeholder="Password" id="password" autocomplete="on"
                                        class="form-control @error('password')
                                        is-invalid
                                    @enderror"
                                        name="password" value="{{ old('password') }}">
                                    @error('password')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- End of Form -->
                            <div class="d-flex justify-content-between align-items-top mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="remember">
                                    <label class="form-check-label mb-0" for="remember">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-gray-800">Sign in</button>
                        </div>
                    </form>
                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <span class="fw-normal">
                            Not registered?
                            <a href="{{ route('register') }}" class="fw-bold">Create account</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 d-none d-md-block">
            <img src="{{ asset('img/signin.svg') }}" alt="">
        </div>
    </div>
@endsection

@extends('layouts.main')
@section('container')
    <div class="mt-14 mb-32 grid place-items-center">
        @if (session()->has('loginErr'))
            <div role="alert" class="alert alert-error mb-5 w-5/12">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ session('loginErr') }}</span>
            </div>
        @endif
        <h1 class="text-center font-bold text-4xl text-warning mb-10">Sign In</h1>
        <div class="mb-3 form-control w-5/12">
            <form action="/signin" method="POST">
                @csrf
                <div class="w-full form-control mb-5">
                    <label class="label-text text-2xl font-medium mb-2" for="email">E-Mail</label>
                    <input type="email" name="email" placeholder="Type Your Email"
                        class="text-primary-content input input-bordered" style="background-color: #D9D9D9">
                    @error('email')
                        <span class="text-error">*{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full form-control mb-14">
                    <label class="label-text text-2xl font-medium mb-2" for="email">Password</label>
                    <input type="password" name="password" id="password" placeholder="Type Your Password"
                        class="text-primary-content input input-bordered" style="background-color: #D9D9D9">
                    @error('password')
                        <span class="text-error">*{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-warning bg-warning w-full">Sign In</button>
            </form>
        </div>
        <p>Don't Have An Account ? <a href="/signup" class="text-warning hover:underline font-medium"> Sign Up</a></p>
    </div>
    @include('partials.subscribe')
@endsection

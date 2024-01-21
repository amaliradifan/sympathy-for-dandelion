@extends('layouts.main')
@section('container')
    <div class="mt-14 mb-32 grid place-items-center">
        <h1 class="text-center font-bold text-4xl text-warning mb-10">Sign Up</h1>
        <div class="mb-3 form-control w-5/12">
            <form action="/signup" method="POST">
                @csrf
                <div class="w-full form-control mb-5">
                    <label class="label-text text-2xl font-medium mb-2" for="name">Full Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Type Your Name"
                        class="text-primary-content input input-bordered" style="background-color: #D9D9D9" required>
                    @error('name')
                        <span class="text-error">*{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full form-control mb-5">
                    <label class="label-text text-2xl font-medium mb-2" for="email">E-Mail</label>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Type Your Email"
                        class="text-primary-content input input-bordered" style="background-color: #D9D9D9" required>
                    @error('email')
                        <span class="text-error">*{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full form-control mb-14">
                    <label class="label-text text-2xl font-medium mb-2" for="email">Password</label>
                    <input type="password" name="password" id="password" placeholder="Type Your Password"
                        class="text-primary-content input input-bordered" style="background-color: #D9D9D9" required>
                    @error('password')
                        <span class="text-error">*{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-warning bg-warning w-full">Sign up</button>
            </form>
        </div>
        <p>Already Have An Account ? <a href="/signin" class="text-warning hover:underline font-medium"> Sign In</a></p>
    </div>
    @include('partials.subscribe')
@endsection

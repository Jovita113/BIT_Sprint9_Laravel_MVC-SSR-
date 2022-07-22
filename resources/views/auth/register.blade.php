@extends('layouts.auth')

@section('content')
<section class="h-screen">
    <div class="px-6 h-full text-gray-800">
        <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6">
            <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="flex flex-row items-center justify-center lg:justify-start text-primary-700">
                        <p class="text-lg mb-0 mr-4 text-danger text-xl">{{ __('Registration form') }}</p>
                    </div>
                    <div
                        class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5"> 
                    </div>

                    <!-- Name input -->
                    <div class="mb-6">
                        <input type="text"
                            class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name"
                            id="name" placeholder="{{ __('Name') }}" />
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Email input -->
                    <div class="mb-6">
                        <input type="email"
                            class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" 
                            id="email" placeholder="{{ __('Email Address') }}" />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Password input -->
                    <div class="mb-6">
                        <input type="password"
                            class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password" 
                            id="password" placeholder="{{ __('Password') }}" />
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Confirm Password input -->
                    <div class="mb-6">
                        <input type="password"
                            class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('password') is-invalid @enderror"
                            name="password_confirmation" required autocomplete="new-password" 
                            id="password-confirm" placeholder="{{ __('Confirm Password') }}" />
                    </div>

                    <div class="text-center lg:text-left">
                        <button type="submit"
                            class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                            {{ __('Register') }}
                        </button>  
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

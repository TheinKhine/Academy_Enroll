@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            {{-- heading --}}
            <div class="text-center text-bold">
                <h3>{{ __('Register') }}</h3>
            </div>

            {{-- input forms --}}
                <div class="">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- input fields --}}
                        <div class="row">
                            <div class="col-md-4">

                                <div class="row mb-3">
                                    <input id="first_name" type="text" class="form-control
                                    @error('first_name') is-invalid @enderror"
                                    name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name"
                                    placeholder="First Name" autofocus>

                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row mb-3">
                                    <input id="last_name" type="text" class="form-control
                                    @error('last_name') is-invalid @enderror"
                                    name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name"
                                    placeholder="Last Name">

                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- father name  --}}
                                <div class="row mb-3">
                                    <input id="father_name" type="text" class="form-control
                                    @error('father_name') is-invalid @enderror"
                                    name="father_name" value="{{ old('father_name') }}" required autocomplete="father_name"
                                    placeholder="Father Name">

                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- mother name  --}}
                                <div class="row mb-3">
                                    <input id="mother_name" type="text" class="form-control
                                    @error('mother_name') is-invalid @enderror"
                                    name="mother_name" value="{{ old('mother_name') }}" required autocomplete="mother_name"
                                    placeholder="Mother Name">

                                    @error('mother_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- gender  --}}
                                <div class="mb-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender1" value="male">
                                        <label class="form-check-label" for="gender">Male</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender2" value="option2">
                                        <label class="form-check-label" for="gender">Female</label>
                                    </div>

                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>

                            {{-- second column --}}
                            <div class="col-md-8">
                                {{-- email --}}
                                <div class="mb-3">
                                    <input id="email_name" type="email" class="form-control
                                    @error('email_name') is-invalid @enderror"
                                    name="email_name" value="{{ old('email_name') }}" required
                                    placeholder="Email (example@gmail.com)">

                                    @error('email_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row">
                                    {{-- password  --}}
                                    <div class="col-md-6 mb-3">
                                        <input id="password" type="password" class="form-control
                                        @error('password') is-invalid @enderror"
                                        name="password" value="{{ old('password') }}" required
                                        placeholder="Password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    {{-- phone number  --}}
                                    <div class="col-md-6 mb-3">
                                        <input id="phone_number" type="text" class="form-control
                                        @error('phone_number') is-invalid @enderror"
                                        name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number"
                                        placeholder="Phone Number">

                                        @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    {{-- DOB  --}}
                                    <div class="col-md-6 mb-3">
                                        <input id="dob" type="date" class="form-control
                                        @error('dob') is-invalid @enderror"
                                        name="dob" value="{{ old('dob') }}" required
                                        placeholder="Date of Birth">

                                        @error('dob')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    {{-- nrc data  --}}
                                    <div class="col-md-6 mb-3">
                                        <input id="nrc" type="text" class="form-control
                                        @error('nrc') is-invalid @enderror"
                                        name="nrc" value="{{ old('nrc') }}" required autocomplete="nrc"
                                        placeholder="NRC Number">

                                        @error('nrc')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    {{-- region option  --}}
                                    <div class="col-md-6 mb-3">
                                        <select name="region" class="form-select" aria-label="GIC region"
                                        @error('region') is-invalid @enderror">
                                            <option selected>Choose school region</option>
                                            <option value="1">Mandalay</option>
                                            <option value="2">Yangon</option>
                                            <option value="3">Japan</option>
                                        </select>

                                        @error('region')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    {{-- course option  --}}
                                    <div class="col-md-6 mb-3">
                                        <select name="course" class="form-select" aria-label="GIC course"
                                        @error('course') is-invalid @enderror">
                                            <option selected>Choose Course</option>
                                            <option value="1">Two years course</option>
                                            <option value="2">6 months course</option>
                                            <option value="3">3 months course</option>
                                        </select>

                                        @error('course')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    {{-- address  --}}
                                    <div class="mb-3">
                                        <input id="address" type="text" class="form-control
                                        @error('address') is-invalid @enderror"
                                        name="address" value="{{ old('address') }}" required
                                        placeholder="type your address">

                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

        </div>
    </div>
</div>
@endsection

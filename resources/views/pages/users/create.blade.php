@extends('layouts.master-layouts')
@section('title')
    Users
@endsection
@section('css')
    {{-- CSS --}}
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Users
        @endslot
        @slot('title')
            Users
        @endslot
        @slot('subtitle')
            Create User
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-xxl-6">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Create New User</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    {{-- <p class="text-muted">Please fill form for user data.</p> --}}
                    <form action="{{ route('users.store') }}" class="needs-validation" method="POST" novalidate>
                        @csrf
                        <div class="row mb-3">
                            <div class="col-lg-3 ">
                                <label for="nameInput" class="form-label">Name</label>
                            </div>
                            <div class="col-lg-9 position-relative">
                                <input type="text"
                                    class="form-control @error('name') is-invalid
                                @enderror"
                                    id="nameInput" placeholder="Enter your name" value="{{ old('name') }}" name="name">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="emailInput" class="form-label">Email</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="email"
                                    class="form-control @error('email') is-invalid
                                @enderror"
                                    id="emailInput" placeholder="Enter your email" value="{{ old('email') }}"
                                    name="email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="passwordInput" class="form-label">Password</label>
                            </div>
                            <div class="col-lg-9">
                                <div class="position-relative auth-pass-inputgroup">
                                    <input type="password"
                                        class="form-control @error('password') is-invalid
                                    @enderror"
                                        placeholder="Enter your password" value="{{ old('password') }}" id="passwordInput"
                                        name="password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <button
                                        class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted"
                                        type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="phoneNumber" class="form-label">Phone Number</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="phoneNumber" placeholder="+62 xxxxxxxxxx"
                                    name="phone" value="{{ old('phone') }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="role" class="form-label">Role</label>
                            </div>
                            <div class="col-lg-9">
                                <!-- Radio toggle buttons   -->
                                <div class="button-group">
                                    <div class="hstack gap-3 flex-wrap w-100">
                                        <input type="radio" class="btn-check" name="role" id="option1"
                                            value="admin">
                                        <label class="btn btn-outline-secondary flex-grow-1" for="option1">Admin</label>
                                        <input type="radio" class="btn-check" name="role" id="option2"
                                            value="dosen">
                                        <label class="btn btn-outline-secondary flex-grow-1" for="option2">Dosen</label>
                                        <input type="radio" class="btn-check" name="role" id="option3"
                                            value="mahasiswa">
                                        <label class="btn btn-outline-secondary flex-grow-1"
                                            for="option3">Mahasiswa</label>
                                    </div>
                                    @error('role')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="addressInput" class="form-label">Address</label>
                            </div>
                            <div class="col-lg-9">
                                <textarea class="form-control" id="addressInput" rows="3" placeholder="Enter your address" name="address">{{ old('address') }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3 ">
                                <label for="cityInput" class="form-label">City</label>
                            </div>
                            <div class="col-lg-9 position-relative">
                                <input type="text" class="form-control " id="cityInput" placeholder="Enter your city"
                                    name="city" value="{{ old('city') }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3 ">
                                <label for="stateInput" class="form-label">State</label>
                            </div>
                            <div class="col-lg-9 position-relative">
                                <input type="text" class="form-control " id="cityInput"
                                    placeholder="Enter your state" name="state" value="{{ old('state') }}">
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-2">Submit</button>
                            <button type="reset" class="btn btn-danger waves-effect waves-light">Reset</button>
                        </div>
                    </form>
                </div>
                {{-- <div class="card-body">
                    <form class="needs-validation" novalidate>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="inputName" class="form-label">Name</label>
                            </div>
                            <div class="col-lg-9 position-relative">
                                <input type="text"
                                    class="form-control @error('name') is-invalid
                                @enderror"
                                    id="inputName" value="{{ old('name') }}" placeholder="Enter your name" name="name"
                                    required>
                                @error('name')
                                    <div class="invalid-tooltip">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="emailInput" class="form-label">Email</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="email" class="form-control" id="emailInput" value="{{ old('email') }}"
                                    placeholder="Enter your email" name="email" required>
                                @error('email')
                                    <div class="invalid-tooltip">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <label for="validationTooltip01" class="form-label">First name</label>
                            <input type="text" class="form-control" id="validationTooltip01" value="Mark">
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <label for="validationTooltip02" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="validationTooltip02" value="Otto">
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <label for="validationTooltipUsername" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                <input type="text" class="form-control" id="validationTooltipUsername"
                                    aria-describedby="validationTooltipUsernamePrepend">
                                <div class="invalid-tooltip">
                                    Please choose a unique and valid username.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 position-relative">
                            <label for="validationTooltip03" class="form-label">City</label>
                            <input type="text" class="form-control" id="validationTooltip03">
                            <div class="invalid-tooltip">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-3 position-relative">
                            <label for="validationTooltip04" class="form-label">State</label>
                            <select class="form-select" id="validationTooltip04">
                                <option selected disabled value="">Choose...</option>
                                <option>...</option>
                            </select>
                            <div class="invalid-tooltip">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 position-relative">
                            <label for="validationTooltip05" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="validationTooltip05">
                            <div class="invalid-tooltip">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
    @endsection

    @section('script')
        {{-- JS --}}
        {{-- <script src="{{ URL::asset('assets/js/app.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/pages/password-addon.init.js') }}"></script>
        <script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script> --}}


        {{-- JS --}}
        <script src="{{ asset('assets/js/app.min.js') }}"></script>
        <script src="{{ asset('assets/js/pages/password-addon.init.js') }}"></script>
        <script src="{{ asset('assets/js/pages/form-validation.init.js') }}"></script>

        <script>
            document.getElementById('password-addon').addEventListener('click', function() {
                var password = document.getElementById("passwordInput");

                if (password.type === "password") {
                    password.type = "text";
                } else {
                    password.type = "password";
                }
            });
        </script>
    @endsection

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
                    {{-- <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                            <label for="horizontal-form-showcode" class="form-label text-muted">Show Code</label>
                            <input class="form-check-input code-switcher" type="checkbox" id="horizontal-form-showcode">
                        </div>
                    </div> --}}
                </div><!-- end card header -->
                <div class="card-body">
                    {{-- <p class="text-muted">Please fill form for user data.</p> --}}
                    <form action="">
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="nameInput" class="form-label">Name</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="nameInput" placeholder="Enter your name">
                            </div>
                        </div>
                        {{-- <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="websiteUrl" class="form-label">Website URL</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="url" class="form-control" id="websiteUrl" placeholder="Enter your url">
                            </div>
                        </div> --}}
                        {{-- <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="dateInput" class="form-label">Date</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="date" class="form-control" id="dateInput">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="timeInput" class="form-label">Time</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="time" class="form-control" id="timeInput">
                            </div>
                        </div> --}}
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="leaveemails" class="form-label">Email</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="email" class="form-control" id="leaveemails" placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="contactNumber" class="form-label">Contact Number</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="number" class="form-control" id="contactNumber" placeholder="+91 9876543210">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="role" class="form-label">Role</label>
                            </div>
                            <div class="col-lg-9">
                                <!-- Radio toggle buttons   -->
                                <div class="hstack gap-3 flex-wrap w-100">
                                    <input type="radio" class="btn-check" name="role" id="option1">
                                    <label class="btn btn-outline-secondary flex-grow-1" for="option1">Admin</label>
                                    <input type="radio" class="btn-check" name="role" id="option2">
                                    <label class="btn btn-outline-secondary flex-grow-1" for="option2">Dosen</label>
                                    <input type="radio" class="btn-check" name="role" id="option3">
                                    <label class="btn btn-outline-secondary flex-grow-1" for="option3">Mahasiswa</label>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="meassageInput" class="form-label">Message</label>
                            </div>
                            <div class="col-lg-9">
                                <textarea class="form-control" id="meassageInput" rows="3" placeholder="Enter your message"></textarea>
                            </div>
                        </div> --}}
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection

    @section('script')
        {{-- JS --}}
        <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    @endsection

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
            List Users
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-lg-12">
            <div class="card" id="customerList">
                <div class="card-header border-bottom-dashed">

                    <div class="row g-4 align-items-center">
                        <div class="col-sm">
                            <div>
                                <h5 class="card-title mb-0">User List</h5>
                            </div>
                        </div>
                        {{-- <div class="col-sm-auto">
                            <div>
                                <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn"
                                    data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add
                                    User</button>
                                <button type="button" class="btn btn-info"><i
                                        class="ri-file-download-line align-bottom me-1"></i>
                                    Import</button>
                            </div>
                        </div> --}}
                    </div>
                </div>
                {{-- <div class="card-header">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="search-box">
                                <input type="text" class="form-control search" placeholder="Search for contact...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <div class="col-md-auto ms-auto">
                            <div class="d-flex align-items-center gap-2">
                                <span class="text-muted">Sort by: </span>
                                <select class="form-control mb-0" data-choices data-choices-search-false
                                    id="choices-single-default">
                                    <option value="Name">Name</option>
                                    <option value="Company">Company</option>
                                    <option value="Lead">Lead</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="card-body">
                    @include('components.alerts')
                </div> --}}
                <div class="card-body border-bottom-dashed border-bottom">
                    @include('components.alerts')
                    <div class="row g-4 align-items-center">
                        <div class="col-md-4">
                            {{-- <form action="{{ route('users.index') }}" method="GET">
                                <div class="search-box">
                                    <input type="text" class="form-control search" placeholder="Search for..."
                                        name="search" value="{{ request()->input('search') }}">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </form> --}}
                            <form action="{{ route('users.index') }}" method="GET" class="position-relative">
                                <div class="input-group">
                                    @if (request()->filled('search'))
                                        <button type="button"
                                            class="btn btn-outline-danger position-absolute end-0 top-0 mt-0 me-5"
                                            style="z-index:2;" onclick="clearSearch()" tabindex="-1">
                                            <i class="ri-close-line"></i>
                                        </button>
                                    @endif
                                    <input type="text" class="form-control search" placeholder="Search for..."
                                        name="search" value="{{ request()->input('search') }}" id="searchInput">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="ri-search-line search-icon"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-auto ms-auto">
                            <div class="">
                                {{-- <button type="button" class="btn btn-info" data-bs-toggle="offcanvas"
                                    href="#offcanvasExample"><i class="ri-filter-3-line align-bottom me-1"></i>
                                    Fliters</button> --}}
                                <a href="{{ route('users.create') }}" class="btn btn-success add-btn">
                                    <i class="ri-add-line align-bottom me-1"></i> Add New User
                                </a>
                                {{-- <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                    id="create-btn" data-bs-target="#showModal"><i
                                        class="ri-add-line align-bottom me-1"></i> Add New
                                    User</button> --}}
                                {{-- <span class="dropdown">
                                    <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-settings-4-line"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Copy</a></li>
                                        <li><a class="dropdown-item" href="#">Move to pipline</a></li>
                                        <li><a class="dropdown-item" href="#">Add to exceptions</a></li>
                                        <li><a class="dropdown-item" href="#">Switch to common form
                                                view</a></li>
                                        <li><a class="dropdown-item" href="#">Reset form view to
                                                default</a></li>
                                    </ul>
                                </span> --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="card-body border-bottom-dashed border-bottom">
                    <form>
                        <div class="row g-3">
                            <div class="col-xl-6">
                                <div class="search-box">
                                    <input type="text" class="form-control search"
                                        placeholder="Search for customer, email, phone, status or something...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xl-6">
                                <div class="row g-3">
                                    <div class="col-sm-4">
                                        <div class="">
                                            <input type="text" class="form-control" id="datepicker-range"
                                                data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true"
                                                placeholder="Select date">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-sm-4">
                                        <div>
                                            <select class="form-control" data-plugin="choices" data-choices
                                                data-choices-search-false name="choices-single-default" id="idStatus">
                                                <option value="">Status</option>
                                                <option value="all" selected>All</option>
                                                <option value="Active">Active</option>
                                                <option value="Block">Block</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-sm-4">
                                        <div>
                                            <button type="button" class="btn btn-primary w-100" onclick="SearchData();"> <i
                                                    class="ri-equalizer-fill me-2 align-bottom"></i>Filters</button>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </form>
                </div> --}}
                <div class="card-body">
                    <div>
                        <div class="table-responsive table-card mb-1">
                            <table class="table align-middle" id="customerTable">
                                <thead class="table-light text-muted">
                                    <tr>

                                        <th class="sort" data-sort="customer_name">Name</th>
                                        <th class="sort" data-sort="email">Email</th>
                                        <th class="sort" data-sort="phone">Phone</th>
                                        <th class="sort" data-sort="date">Created at</th>
                                        <th class="sort" data-sort="status">Role</th>
                                        <th class="sort" data-sort="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list form-check-all">
                                    @foreach ($users as $data)
                                        <tr>
                                            <td class="customer_name">{{ $data->name }}</td>
                                            <td class="email">{{ $data->email }}</td>
                                            <td class="phone">{{ $data->phone }}</td>
                                            <td class="date">{{ $data->created_at }}</td>
                                            <td class="status"><span
                                                    class="badge badge-soft-success text-uppercase">Active</span>
                                            </td>
                                            <td>
                                                <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                        data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <a href="{{ route('users.edit', $data->id) }}"
                                                            class="text-primary d-inline-block edit-item-btn">
                                                            <i class="ri-pencil-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-bs-toggle="tooltip"
                                                        data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                        <a class="text-danger d-inline-block remove-item-btn"
                                                            data-bs-toggle="modal" href="#deleteRecordModal">
                                                            <i class="ri-delete-bin-5-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                            <div class="noresult" style="display: none">
                                <div class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                        colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                    </lord-icon>
                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                    <p class="text-muted mb-0">We've searched more than 150+ customer We
                                        did not find any
                                        customer for you search.</p>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            {{-- {{ $users->links() }} --}}
                            {{ $users->appends(['search' => request()->input('search')])->links() }}
                        </div>
                        {{-- <div class="d-flex
                                justify-content-end">
                            <div class="pagination-wrap hstack gap-2">
                                <a class="page-item pagination-prev disabled" href="#">
                                    Previous
                                </a>
                                <ul class="pagination listjs-pagination mb-0"></ul>
                                <a class="page-item pagination-next" href="#">
                                    Next
                                </a>
                            </div>
                        </div> --}}
                    </div>
                    <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        id="close-modal"></button>
                                </div>
                                <form action="#">
                                    <div class="modal-body">
                                        <input type="hidden" id="id-field" />

                                        <div class="mb-3" id="modal-id" style="display: none;">
                                            <label for="id-field1" class="form-label">ID</label>
                                            <input type="text" id="id-field1" class="form-control" placeholder="ID"
                                                readonly />
                                        </div>

                                        <div class="mb-3">
                                            <label for="customername-field" class="form-label">User
                                                Name</label>
                                            <input type="text" id="customername-field" class="form-control"
                                                placeholder="Enter name" required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="email-field" class="form-label">Email</label>
                                            <input type="email" id="email-field" class="form-control"
                                                placeholder="Enter email" required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="phone-field" class="form-label">Phone</label>
                                            <input type="text" id="phone-field" class="form-control"
                                                placeholder="Enter phone no." required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="date-field" class="form-label">Joining
                                                Date</label>
                                            <input type="date" id="date-field" class="form-control"
                                                data-provider="flatpickr" data-date-format="d M, Y" required
                                                placeholder="Select date" />
                                        </div>

                                        <div>
                                            <label for="status-field" class="form-label">Status</label>
                                            <select class="form-control" data-trigger name="status-field"
                                                id="status-field">
                                                <option value="">Status</option>
                                                <option value="Active">Active</option>
                                                <option value="Block">Block</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success" id="add-btn">Add
                                                User</button>
                                            <button type="button" class="btn btn-success" id="edit-btn">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        id="btn-close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mt-2 text-center">
                                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                            colors="primary:#f7b84b,secondary:#f06548"
                                            style="width:100px;height:100px"></lord-icon>
                                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                            <h4>Are you sure ?</h4>
                                            <p class="text-muted mx-4 mb-0">Are you sure you want to
                                                remove this record ?</p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                        <button type="button" class="btn w-sm btn-light"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes,
                                            Delete It!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end modal -->
                </div>
            </div>

        </div>
        <!--end col-->
    </div>
@endsection

@section('script')
    {{-- <script src="{{ URL::asset('assets/js/app.min.js') }}"></script> --}}

    <script>
        function clearSearch() {
            document.getElementById('searchInput').value = '';
            document.querySelector('form[action="{{ route('users.index') }}"]').submit();
        }
    </script>
    {{-- <script src="{{ URL::asset('/assets/libs/list.js/list.js.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/list.pagination.js/list.pagination.js.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/crm-leads.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script> --}}
@endsection

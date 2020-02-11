@extends('layouts.app')

@section("title") Dashboard @endsection

@section('content')
<div class="row">
    <div class="col-md-12">
    <div class="row">
        <div class="col-sm-6 mb-4 mb-xl-0">
            <h3>Welcome to Akij Group</h3>
            <h6 class="font-weight-normal mb-0 text-muted">Basic Admin Panel</h6>
        </div>
        <div class="col-sm-6">
            <div class="d-flex align-items-center justify-content-md-end">
                <div class="border-right-dark pr-4 mb-3 mb-xl-0 d-xl-block d-none">
                    <p class="text-muted">Today</p>
                    <h6 class="font-weight-medium text-dark mb-0">23 Aug 2019</h6>
                </div>
                <div class="pr-4 pl-4 mb-3 mb-xl-0 d-xl-block d-none">
                    <p class="text-muted">Category</p>
                    <h6 class="font-weight-medium text-dark mb-0">All Categories</h6>
                </div>
                <div class="pr-1 mb-3 mb-xl-0">
                    <button type="button" class="btn btn-success btn-icon mr-2"><i class="mdi mdi-filter-variant"></i></button>
                </div>
                <div class="pr-1 mb-3 mb-xl-0">
                    <button type="button" class="btn btn-success btn-icon mr-2"><i class="mdi mdi-refresh"></i></button>
                </div>
                <div class="mb-3 mb-xl-0">
                    <div class="btn-group dropdown">
                        <button type="button" class="btn btn-success">14 Aug 2019</button>
                        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
                            <a class="dropdown-item" href="#">2015</a>
                            <a class="dropdown-item" href="#">2016</a>
                            <a class="dropdown-item" href="#">2017</a>
                            <a class="dropdown-item" href="#">2018</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection

@extends('adminLayouts.app')
@section('title')
    View Course
@endsection

@section('header')

@endsection
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{route('home')}}"
                   class="text-muted">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a class="text-primary">View Course</a>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection
@section('content')

    <div class="card">
        <div class="card-body">
            <div class="d-flex">
                <!--begin: Pic-->
                <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
                    <h2 class="d-flex align-items-center text-dark  font-weight-bold mr-3">{{$data->name}}  </h2>
                    <div class="symbol symbol-50 symbol-lg-120">
                        <img alt="Pic" src="{{$data->image}}">
                    </div>
                </div>
                <div class="flex-grow-1">
                    <!--begin: Title-->
                    <div class="flex-grow-1 font-weight-bold text-dark-50 py-5 py-lg-2 mr-5"> {!!$data->description!!}</div>

                    <div class="row">

                            <div class="mr-6">
                                <div class="font-weight-bold mb-2">Level</div>
                                <span
                                    class="btn btn-sm btn-text btn-light-primary text-uppercase font-weight-bold">{{$data->levels  ?? ''}}</span>
                            </div>

                            <div class="mr-6">
                                <div class="font-weight-bold mb-2">Hours</div>
                                <span
                                    class="btn btn-sm btn-text btn-light-danger text-uppercase font-weight-bold">{{$data->hours ?? ''}}</span>
                            </div>

                            <div class="mr-6">
                                <div class="font-weight-bold mb-2">Category</div>
                                <span
                                    class="btn btn-sm btn-text btn-light-primary text-uppercase font-weight-bold">{{$data->Category->name ?? ''}}</span>
                            </div>

                            <div class="mr-6">
                                <div class="font-weight-bold mb-2">Rate</div>
                                <span
                                    class="btn btn-sm btn-text btn-light-danger text-uppercase font-weight-bold">{{$data->rating ?? 'Not Rated Yet'}} of 5 Stars</span>
                            </div>
                            <div class="mr-6">
                                <div class="font-weight-bold mb-2">Views</div>
                                <span
                                    class="btn btn-sm btn-text btn-light-primary text-uppercase font-weight-bold">{{$data->views ?? 'Not views Yet'}}</span>
                            </div>


                </div>


            <br>
        </div>
    </div>
    </div>
    </div>

@endsection
@section('script')


@endsection


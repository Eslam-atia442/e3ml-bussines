@extends('adminLayouts.app')
@section('title')
 New Category
@endsection
@section('header')

@endsection
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{route('admin')}}"
                   class="text-muted">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a   class="text-primary" >New Category</a>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection
@section('content')


    <div class="card">
        <div class="card-body">
            <form method="post"  id="form" action="{{route('categories.store')}}" enctype="multipart/form-data">
                @csrf

                <div class="card-body row">

                    <div class="form-group col-3">
                        <label>Name<span
                                class="text-danger">*</span></label>
                        <input name="name" value="{{old('name')}}" class="form-control" type="text"
                               placeholder="please Enter Category Name " required/>
                    </div>
                </div>

                <div class="card-footer text-center">
                    <button type="Submit" id="submit" class="btn btn-primary btn-default ">Save</button>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(document).on('submit', 'form', function() {
                $('button').attr('disabled', 'disabled');
            });
        });
    </script>
@endsection


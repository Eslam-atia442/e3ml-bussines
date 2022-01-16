@extends('adminLayouts.app')
@section('title')
    New Course
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
                <a class="text-primary">New Course</a>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection
@section('content')

    <div class="card">
        <div class="card-body">
            <form method="post" id="form" action="{{route('courses.store')}}" enctype="multipart/form-data">
                @csrf

                <div class="card-body row">

                    <div class="form-group col-3">
                        <label>Name<span
                                class="text-danger">*</span></label>
                        <input name="name" value="{{old('name')}}" class="form-control" type="text"
                               placeholder="please Enter Course Name " required/>
                    </div>

                    <div class="form-group col-3">
                        <label>Hours<span
                                class="text-danger">*</span></label>
                        <input name="hours" value="{{old('hours')}}" class="form-control" type="number"
                               placeholder="please Enter Course Name " required/>
                    </div>


                    <div class="form-group col-3">
                        <label for="exampleSelect1">Category<span class="text-danger">*</span></label>
                        <select class="form-control" required id="exampleSelect1" name="cat_id">
                            <option selected disabled>Select Category</option>
                            @foreach($data as $c)
                                <option
                                    {{ old('cat_id') == $c->id ? "selected" : "" }} value="{{$c->id}}">{{$c->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-3">
                        <label for="exampleSelect1">Level<span class="text-danger">*</span></label>
                        <select class="form-control" required id="exampleSelect1" name="levels">
                         @if(old('levels'))   <option>{{old('levels')}}</option> @endif
                             @if(old('levels') ==null )   <option selected disabled>Select Level</option>  @endif
                            <option>intermediate</option>
                            <option>beginner</option>
                            <option>high</option>
                        </select>
                    </div>
                </div>

                <div class="form-group col-3 ">
                    <div class="image-input image-input-outline " id="kt_image_1">
                        <div class="image-input-wrapper"
                             style="background-image: url(assets/media/users/course.png)"></div>
                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                               data-action="change" data-toggle="tooltip" title=""
                               data-original-title="Course image">
                            <i class="fa fa-pen icon-sm text-muted"></i>
                            <input type="file" value="{{old('image')}}" name="image" accept=".png, .jpg, .jpeg"/>
                        </label>
                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                              data-action="cancel" data-toggle="tooltip" title="Cancel avatar">

                              <i class="ki ki-bold-close icon-xs text-muted"></i>
                            </span>
                    </div>
                </div>
                <div class="form-group col-12">
                    <textarea   id="description" name="description"
                              class="tox-target"> {{old('description')}}</textarea>
                </div>

                <div class="card-footer text-center">
                    <button type="Submit" id="submit" class="btn btn-primary btn-default ">Save</button>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('script')
    <script src="assets/plugins/custom/tinymce/tinymce.bundle.js"></script>
    <script !src="">
        var avatar1 = new KTImageInput('kt_image_1');
    </script>
    <script !src="">

        var KTTinymce = function () {
            // Private functions
            var demos = function () {
                tinymce.init({
                    selector: '#description'
                });
            }

            return {
                // public functions
                init: function () {
                    demos();
                }
            };
        }();

        // Initialization
        jQuery(document).ready(function () {
            KTTinymce.init();
        });
    </script>
    <script>
        $(document).ready(function () {
            $(document).on('submit', 'form', function () {
                $('button').attr('disabled', 'disabled');
            });
        });
    </script>

@endsection


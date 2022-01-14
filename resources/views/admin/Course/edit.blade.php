@extends('adminLayouts.app')
@section('title')
    Edit Course
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
                <a class="text-primary">Edit Course</a>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection
@section('content')

    <div class="card">
        <div class="card-body">

            <form method="post" id="form" action="{{route('courses.update',$data->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body row">


                    <div class="form-group col-3">
                        <label>Name<span
                                class="text-danger">*</span></label>
                        <input name="name" value="{{$data->name}}" class="form-control" type="text"
                               placeholder="please Enter Course Name " required/>
                    </div>

                    <div class="form-group col-3">
                        <label>Hours<span
                                class="text-danger">*</span></label>
                        <input name="hours" value="{{$data->hours}}" class="form-control" type="number"
                               placeholder="please Enter Course Name " required/>
                    </div>


                    <div class="form-group col-3">
                        <label for="exampleSelect1">Category<span class="text-danger">*</span></label>
                        <select class="form-control" required id="exampleSelect1" name="cat_id">
                            <option selected disabled>Select Category</option>
                            @foreach($categories as $c)
                                <option
                                    {{ $data->cat_id == $c->id ? "selected" : "" }} value="{{$c->id}}">{{$c->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-3">
                        <label for="exampleSelect1">Show<span class="text-danger">*</span></label>
                        <select class="form-control" required id="exampleSelect1" name="levels">
                            <option @if($data->levels == 'intermediate') selected @endif>intermediate</option>
                            <option @if($data->levels == 'beginner') selected @endif>beginner</option>
                            <option @if($data->levels == 'high') selected @endif>high</option>
                        </select>
                    </div>
                    <div class="form-group col-3">
                        <label for="exampleSelect1">Active<span class="text-danger">*</span></label>
                                      <span class="switch switch-outline switch-icon switch-Primary">
    <label>
     <input type="checkbox" name="active" onchange="update_active(this)" value="{{$data->id}}"
            @if($data->active =='1') checked="checked" @endif > <span></span>
    </label>
   </span>
                    </div>
                </div>

                <div class="form-group col-3 ">
                    <div class="image-input image-input-outline " id="kt_image_1">
                        <div class="image-input-wrapper"
                             style="background-image: url({{$data->image}})"></div>
                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                               data-action="change" data-toggle="tooltip" title=""
                               data-original-title="Course image">
                            <i class="fa fa-pen icon-sm text-muted"></i>
                            <input type="file" value="{{$data->image}}" name="image" accept=".png, .jpg, .jpeg"/>
                        </label>
                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                              data-action="cancel" data-toggle="tooltip" title="Cancel avatar">

                              <i class="ki ki-bold-close icon-xs text-muted"></i>
                            </span>
                    </div>
                </div>

                <div class="form-group col-12">
                    <textarea id="description" name="description"
                              class="tox-target">{{$data->description}}</textarea>
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
    <script type="text/javascript"  >
        function update_active(el) {
            if (el.checked)
                var status = '1';
            else
                var status = '0';
            $.post('{{ route('courses.status') }}', {
                _token: '{{ csrf_token() }}',
                id: el.value,
                active: status
            }, function (data) {
                if (status == 1) {
                    toastr.success("Course is Active");
                } else {
                    toastr.error("Course is Deductive");
                }
            });
        }
    </script>
@endsection


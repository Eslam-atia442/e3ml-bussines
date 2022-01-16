@extends('adminLayouts.app')
@section('title')
    Edit Category
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
                <a class="text-primary">Edit Category</a>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection
@section('content')

    <div class="card">
        <div class="card-body">
            <form method="post" action="{{route('categories.update',$data->id)}}" enctype="multipart/form-data">
                @csrf

                        <div class="form-group">
                            <label>Name<span class="text-danger">*</span></label>
                            <input name="name" value="{{$data->name}}" class="form-control" type="text"
                                   placeholder="please Enter Name"/>

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


                <div class="card-footer text-center">
                    <button type="Submit"
                            class="btn btn-primary btn-default ">Save
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('script')
    @if(Session::has('message'))
        <script>

            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            toastr.success("{{ Session::get('message') }}");
        </script>
    @endif
    <script type="text/javascript"  >
        function update_active(el) {
            if (el.checked)
                var status = '1';
            else
                var status = '0';
            $.post('{{ route('categories.status') }}', {
                _token: '{{ csrf_token() }}',
                id: el.value,
                active: status
            }, function (data) {
                if (status == 1) {
                    toastr.success("Category is Active");
                } else {
                    toastr.error("Category is Deductive");
                }
            });
        }
    </script>
@endsection


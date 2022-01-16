@extends('adminLayouts.app')
@section('title')
    All Categories
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
                <a class="text-primary">All Categories</a>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection
@section('content')

    <div class="card">
        <div class="card-body">
            {!! $dataTable->table() !!}
        </div>
    </div>
@endsection
@section('script')
    {!! $dataTable->scripts() !!}
    <script type="text/javascript">
            function update_active(el) {
                if (el.checked)
                        var status = '1';
                    else
                var status = '0';
            $.post('', {
                _token: '{{ csrf_token() }}',
                id: el.value,
                status: status
            }, function (data) {
                if (status == 1) {
                    toastr.success('Category is Active');
                } else {
                    toastr.success('Category is Deactivate');
                }
            });
        }
    </script>
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
            toastr.warning("{{ Session::get('message') }}");
        </script>
        <script>

        </script>
    @endif

@endsection


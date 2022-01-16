@foreach($data as $row)
    <div class="col-md-4 col-xxl-4 col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom card-shadowless">
            <div class="card-body p-0">
                <!--begin::Image-->
                <div class="overlay">
                    <div class="overlay-wrapper rounded bg-light text-center">
                        <img src="{{$row ->image}}" alt="" class="mw-100 w-200px">
                    </div>
                </div>
                <!--end::Image-->
                <!--begin::Details-->
                <div class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                    <a href="#" class="font-size-h5 font-weight-bolder text-dark-75 text-hover-primary mb-1">{{$row ->name}}</a>
                    <span class="font-size-lg">{{$row ->Category->name}}</span>
                    <div class="">
                        <span class="fa fa-star @if($row->rating == 1 || $row->rating == 2  || $row->rating == 3 || $row->rating == 4 || $row->rating == 5) checked @endif "></span>
                        <span class="fa fa-star @if( $row->rating == 2  || $row->rating == 3 || $row->rating == 4 || $row->rating == 5) checked @endif "></span>
                        <span class="fa fa-star @if( $row->rating == 3 || $row->rating == 4 || $row->rating == 5) checked @endif "></span>
                        <span class="fa fa-star @if($row->rating == 4 || $row->rating == 5) checked @endif "></span>
                        <span class="fa fa-star @if($row->rating == 5) checked @endif "></span>

                    </div>

                </div>
                <!--end::Details-->
            </div>

        </div>

        <!--end::Card-->
    </div>
@endforeach

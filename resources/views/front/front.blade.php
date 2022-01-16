<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <base href="../../">
    <meta charset="utf-8"/>
    <title>E3ml business</title>
    <meta name="description" content="No aside layout examples"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="canonical" href="https://keenthemes.com/metronic"/>
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/themes/layout/brand/light.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css"/>
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>
    <style>
        .checked {
            color: orange;
        }
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed page-loading">
<!--begin::Main-->
<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
    <!--begin::Logo-->
    <a href="index.html">
        <img alt="Logo" src="assets/media/logos/logo-dark.png"/>
    </a>
    <!--end::Logo-->
    <!--begin::Toolbar-->
    <div class="d-flex align-items-center">
        <!--begin::Header Menu Mobile Toggle-->
        <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
            <span></span>
        </button>
        <!--end::Header Menu Mobile Toggle-->
        <!--begin::Topbar Mobile Toggle-->
        <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                             height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24"/>
								<path
                                    d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                    fill="#000000" fill-rule="nonzero" opacity="0.3"/>
								<path
                                    d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                    fill="#000000" fill-rule="nonzero"/>
							</g>
						</svg>
                        <!--end::Svg Icon-->
					</span>
        </button>
        <!--end::Topbar Mobile Toggle-->
    </div>
    <!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header header-fixed">
                <!--begin::Container-->
                <div class="container-fluid d-flex align-items-stretch justify-content-between">
                    <!--begin::Header Menu Wrapper-->
                    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                        <!--begin::Header Logo-->
                        <div class="header-logo">
                            <a href="index.html">
                                <h1 class="text-dark">Task</h1>
                            </a>
                        </div>
                        <!--end::Header Logo-->
                        <!--begin::Header Menu-->
                        <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                        </div>
                        <!--end::Header Menu-->
                    </div>
                    <!--end::Header Menu Wrapper-->
                    <!--begin::Topbar-->
                    <div class="topbar">
                        <!--begin::Search-->
                        <div class="dropdown" id="kt_quick_search_toggle">
                            <!--begin::Toggle-->
                            <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                <div class="btn btn-icon btn-clean btn-lg btn-dropdown mr-1">
											<span class="svg-icon svg-icon-xl svg-icon-primary">
												<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
												<svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                     height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"/>
														<path
                                                            d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3"/>
														<path
                                                            d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                            fill="#000000" fill-rule="nonzero"/>
													</g>
												</svg>
                                                <!--end::Svg Icon-->
											</span>
                                </div>
                            </div>
                            <!--end::Toggle-->
                            <div class="topbar-item">
                                <a href="{{route('admin')}}"
                                   class="btn btn-success font-weight-bold font-size-h6 px-10 py-4 mr-2">
                                    login
                                </a>
                            </div>
                            <!--begin::Dropdown-->
                            <div
                                class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                                <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
                                    <!--begin:Form-->
                                    <form method="get" class="quick-search-form">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
														<span class="input-group-text">
															<span class="svg-icon svg-icon-lg">
																<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
																<svg xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                                     version="1.1">
																	<g stroke="none" stroke-width="1" fill="none"
                                                                       fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<path
                                                                            d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                            fill="#000000" fill-rule="nonzero"
                                                                            opacity="0.3"/>
																		<path
                                                                            d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                            fill="#000000" fill-rule="nonzero"/>
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>
														</span>
                                            </div>
                                            <input type="text" id="txt_search" onkeyup="search_function(this,'text','')"
                                                   class="form-control" placeholder="Search..."/>
                                            <div class="input-group-append">
														<span class="input-group-text">
															<i class="quick-search-close ki ki-close icon-sm text-muted"></i>
														</span>
                                            </div>
                                        </div>
                                    </form>
                                    <!--end::Form-->
                                    <!--begin::Scroll-->
                                    <div class="quick-search-wrapper scroll" data-scroll="true" data-height="325" hidden
                                         data-mobile-height="200"></div>
                                    <!--end::Scroll-->
                                </div>
                            </div>
                            <!--end::Dropdown-->
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Topbar-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Page Layout-->
                        <div class="d-flex flex-row">
                            <!--begin::Aside-->
                            <div class="flex-column offcanvas-mobile w-300px w-xl-325px" id="kt_profile_aside">
                                <div class="card card-custom gutter-b">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label font-weight-bolder text-dark">Category</span>
                                        </h3>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body pt-4">
                                        <!--begin::Container-->
                                        <div>
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-8">
                                                <div class="d-flex flex-column">
                                                    @foreach($category as $row)
                                                        <a onclick="search_function(this,'category',{{$row->id}})"
                                                           href="javascript:void(this);"
                                                           class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{$row->name}}</a>
                                                        <br>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <div class="card card-custom gutter-b">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label font-weight-bolder text-dark">Rating</span>
                                        </h3>

                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body pt-4">
                                        <!--begin::Container-->
                                        <div class="form-group">
                                            <div class="radio-list">
                                                <label class="radio">
                                                    <input type="radio" name="rating"
                                                           onclick="search_function(this,'stars','1',)">
                                                    <span></span>
                                                    <div class="">
                                                        <span class="fa fa-star checked  "></span>
                                                        <span class="fa fa-star   "></span>
                                                        <span class="fa fa-star   "></span>
                                                        <span class="fa fa-star   "></span>
                                                        <span class="fa fa-star   "></span>
                                                    </div>

                                                </label>
                                                <label class="radio">
                                                    <input type="radio" name="rating"
                                                           onclick="search_function(this,'stars','2',)">
                                                    <span></span>
                                                    <div class="">
                                                        <span class="fa fa-star checked  "></span>
                                                        <span class="fa fa-star checked  "></span>
                                                        <span class="fa fa-star   "></span>
                                                        <span class="fa fa-star   "></span>
                                                        <span class="fa fa-star   "></span>
                                                    </div>
                                                </label>
                                                <label class="radio">
                                                    <input type="radio" name="rating"
                                                           onclick="search_function(this,'stars','3',)">
                                                    <span></span>
                                                    <div class="">
                                                        <span class="fa fa-star checked  "></span>
                                                        <span class="fa fa-star checked  "></span>
                                                        <span class="fa fa-star  checked "></span>
                                                        <span class="fa fa-star   "></span>
                                                        <span class="fa fa-star   "></span>
                                                    </div>
                                                </label>
                                                <label class="radio">
                                                    <input type="radio" name="rating"
                                                           onclick="search_function(this,'stars','4',)">
                                                    <span></span>
                                                    <div class="">
                                                        <span class="fa fa-star checked  "></span>
                                                        <span class="fa fa-star  checked "></span>
                                                        <span class="fa fa-star  checked "></span>
                                                        <span class="fa fa-star  checked "></span>
                                                        <span class="fa fa-star   "></span>
                                                    </div>
                                                </label>
                                                <label class="radio">
                                                    <input type="radio" name="rating"
                                                           onclick="search_function(this,'stars','5',)">
                                                    <span></span>
                                                    <div class="">
                                                        <span class="fa fa-star checked  "></span>
                                                        <span class="fa fa-star  checked "></span>
                                                        <span class="fa fa-star   checked"></span>
                                                        <span class="fa fa-star  checked "></span>
                                                        <span class="fa fa-star   checked"></span>
                                                    </div>
                                                </label>

                                            </div>
                                        </div>

                                        <!--end::Container-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <div class="card card-custom gutter-b">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label font-weight-bolder text-dark">Level</span>
                                        </h3>

                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body pt-4">
                                        <!--begin::Container-->
                                        <div>
                                            <div class="form-group">
                                                <div class="radio-list">
                                                    <label class="radio">
                                                        <input type="radio"  onclick="search_function(this,'level','beginner',)" name="radioes1"/>
                                                        <span></span>
                                                        beginner
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio"  onclick="search_function(this,'level','intermediate',)" name="radioes1"/>

                                                        <span></span>
                                                        intermediate
                                                    </label>

                                                    <label class="radio">
                                                        <input type="radio"  onclick="search_function(this,'level','high',)" name="radioes1"/>

                                                        <span></span>
                                                        high
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <div class="card card-custom gutter-b">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label font-weight-bolder text-dark">time</span>
                                        </h3>

                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body pt-4">
                                        <!--begin::Container-->
                                        <div>
                                            <div class="form-group">
                                                <div class="radio-list">
                                                    <label class="radio">
                                                        <input type="radio"  onclick="search_function(this,'time','4',)" name="radioes1"/>
                                                        <span></span>
                                                        Less than 4 hours
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio"  onclick="search_function(this,'time','8',)" name="radioes1"/>
                                                        <span></span>
                                                        Less than 8 hours
                                                    </label>

                                                    <label class="radio">
                                                        <input type="radio"  onclick="search_function(this,'time','more',)" name="radioes1"/>
                                                        <span></span>
                                                        more than 8 hours
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Body-->
                                </div>


                            </div>
                            <!--end::Aside-->
                            <!--begin::Layout-->
                            <div class="flex-row-fluid ml-lg-8">

                                <!--begin::Section-->
                                <div class="card card-custom">
                                    <div class="card-body">
                                        <!--begin::Heading-->
                                        <div class="d-flex justify-content-between align-items-center mb-7">

                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Products-->
                                        <div class="row" id="course_content">
                                            <!--begin::Product-->
                                            @foreach($data as $row)
                                                <div class="col-md-4 col-xxl-4 col-lg-12">
                                                    <!--begin::Card-->
                                                    <div class="card card-custom card-shadowless">
                                                        <div class="card-body p-0">
                                                            <!--begin::Image-->
                                                            <div class="overlay">
                                                                <div
                                                                    class="overlay-wrapper rounded bg-light text-center">
                                                                    <img src="{{$row ->image}}" alt=""
                                                                         class="mw-100 w-200px">
                                                                </div>
                                                            </div>
                                                            <!--end::Image-->
                                                            <!--begin::Details-->
                                                            <div
                                                                class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                                                                <a href="#"
                                                                   class="font-size-h5 font-weight-bolder text-dark-75 text-hover-primary mb-1">{{$row ->name}}</a>
                                                                <span
                                                                    class="font-size-lg">{{$row ->Category->name}}</span>
                                                                <div class="">
                                                                    <span
                                                                        class="fa fa-star @if($row->rating == 1 || $row->rating == 2  || $row->rating == 3 || $row->rating == 4 || $row->rating == 5) checked @endif "></span>
                                                                    <span
                                                                        class="fa fa-star @if( $row->rating == 2  || $row->rating == 3 || $row->rating == 4 || $row->rating == 5) checked @endif "></span>
                                                                    <span
                                                                        class="fa fa-star @if( $row->rating == 3 || $row->rating == 4 || $row->rating == 5) checked @endif "></span>
                                                                    <span
                                                                        class="fa fa-star @if($row->rating == 4 || $row->rating == 5) checked @endif "></span>
                                                                    <span
                                                                        class="fa fa-star @if($row->rating == 5) checked @endif "></span>

                                                                </div>

                                                            </div>
                                                            <!--end::Details-->
                                                        </div>

                                                    </div>

                                                    <!--end::Card-->
                                                </div>
                                        @endforeach

                                        <!--end::Product-->
                                        </div>
                                        <!--end::Products-->
                                    </div>
                                    <div class="card-footer">

                                    </div>
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Layout-->
                        </div>
                        <!--end::Page Layout-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted font-weight-bold mr-2">2020©</span>
                        <a href="http://keenthemes.com/metronic" target="_blank"
                           class="text-dark-75 text-hover-primary">Keenthemes</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Nav-->
                    <div class="nav nav-dark">
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">About</a>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">Team</a>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-0">Contact</a>
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->

<!--begin::Chat Panel-->
<div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Header-->
                <div class="card-header align-items-center px-4 py-3">
                    <div class="text-left flex-grow-1">
                        <!--begin::Dropdown Menu-->
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="svg-icon svg-icon-lg">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24"/>
													<path
                                                        d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3"/>
													<path
                                                        d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                        fill="#000000" fill-rule="nonzero"/>
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                            </button>
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
                                <!--begin::Navigation-->
                                <ul class="navi navi-hover py-5">
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-drop"></i>
													</span>
                                            <span class="navi-text">New Group</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-list-3"></i>
													</span>
                                            <span class="navi-text">Contacts</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-rocket-1"></i>
													</span>
                                            <span class="navi-text">Groups</span>
                                            <span class="navi-link-badge">
														<span
                                                            class="label label-light-primary label-inline font-weight-bold">new</span>
													</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-bell-2"></i>
													</span>
                                            <span class="navi-text">Calls</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-gear"></i>
													</span>
                                            <span class="navi-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="navi-separator my-3"></li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-magnifier-tool"></i>
													</span>
                                            <span class="navi-text">Help</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-bell-2"></i>
													</span>
                                            <span class="navi-text">Privacy</span>
                                            <span class="navi-link-badge">
														<span
                                                            class="label label-light-danger label-rounded font-weight-bold">5</span>
													</span>
                                        </a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                        </div>
                        <!--end::Dropdown Menu-->
                    </div>
                    <div class="text-center flex-grow-1">
                        <div class="text-dark-75 font-weight-bold font-size-h5">Matt Pears</div>
                        <div>
                            <span class="label label-dot label-success"></span>
                            <span class="font-weight-bold text-muted font-size-sm">Active</span>
                        </div>
                    </div>
                    <div class="text-right flex-grow-1">
                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-dismiss="modal">
                            <i class="ki ki-close icon-1x"></i>
                        </button>
                    </div>
                </div>
                <!--end::Header-->

                <!--begin::Footer-->
                <div class="card-footer align-items-center">
                    <!--begin::Compose-->
                    <textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
                    <div class="d-flex align-items-center justify-content-between mt-5">
                        <div class="mr-3">
                            <a href="#" class="btn btn-clean btn-icon btn-md mr-1">
                                <i class="flaticon2-photograph icon-lg"></i>
                            </a>
                            <a href="#" class="btn btn-clean btn-icon btn-md">
                                <i class="flaticon2-photo-camera icon-lg"></i>
                            </a>
                        </div>
                        <div>
                            <button type="button"
                                    class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">
                                Send
                            </button>
                        </div>
                    </div>
                    <!--begin::Compose-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Card-->
        </div>
    </div>
</div>
<!--end::Chat Panel-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                     height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24"/>
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1"/>
						<path
                            d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                            fill="#000000" fill-rule="nonzero"/>
					</g>
				</svg>
                <!--end::Svg Icon-->
			</span>
</div>
<!--end::Scrolltop-->

<!--begin::Demo Panel-->
<div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
        <h4 class="font-weight-bold m-0">Select A Demo</h4>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content">
        <!--begin::Wrapper-->
        <div class="offcanvas-wrapper mb-5 scroll-pull">
            <h5 class="font-weight-bold mb-4 text-center">Demo 1</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo offcanvas-demo-active">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo1.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="../../../../demo1/dist"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">Default</a>
                    <a href="https://preview.keenthemes.com/metronic/demo1/rtl/index.html"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">RTL Version</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 2</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo2.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="../../../../demo2/dist"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">Default</a>
                    <a href="https://preview.keenthemes.com/metronic/demo2/rtl/index.html"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">RTL Version</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 3</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo3.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="../../../../demo3/dist"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">Default</a>
                    <a href="https://preview.keenthemes.com/metronic/demo3/rtl/index.html"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">RTL Version</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 4</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo4.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="../../../../demo4/dist"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">Default</a>
                    <a href="https://preview.keenthemes.com/metronic/demo4/rtl/index.html"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">RTL Version</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 5</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo5.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="../../../../demo5/dist"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">Default</a>
                    <a href="https://preview.keenthemes.com/metronic/demo5/rtl/index.html"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">RTL Version</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 6</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo6.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="../../../../demo6/dist"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">Default</a>
                    <a href="https://preview.keenthemes.com/metronic/demo6/rtl/index.html"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">RTL Version</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 7</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo7.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="../../../../demo7/dist"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">Default</a>
                    <a href="https://preview.keenthemes.com/metronic/demo7/rtl/index.html"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">RTL Version</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 8</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo8.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="../../../../demo8/dist"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">Default</a>
                    <a href="https://preview.keenthemes.com/metronic/demo8/rtl/index.html"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">RTL Version</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 9</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo9.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="../../../../demo9/dist"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">Default</a>
                    <a href="https://preview.keenthemes.com/metronic/demo9/rtl/index.html"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">RTL Version</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 10</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo10.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="../../../../demo10/dist"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">Default</a>
                    <a href="https://preview.keenthemes.com/metronic/demo10/rtl/index.html"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">RTL Version</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 11</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo11.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="../../../../demo11/dist"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">Default</a>
                    <a href="https://preview.keenthemes.com/metronic/demo11/rtl/index.html"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">RTL Version</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 12</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo12.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="../../../../demo12/dist"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">Default</a>
                    <a href="https://preview.keenthemes.com/metronic/demo12/rtl/index.html"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">RTL Version</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 13</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo13.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="../../../../demo13/dist"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">Default</a>
                    <a href="https://preview.keenthemes.com/metronic/demo13/rtl/index.html"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
                       target="_blank">RTL Version</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 14</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo14.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="#"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                        soon</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 15</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo15.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="#"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                        soon</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 16</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo16.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="#"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                        soon</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 17</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo17.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="#"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                        soon</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 18</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo18.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="#"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                        soon</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 19</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo19.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="#"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                        soon</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 20</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo20.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="#"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                        soon</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 21</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo21.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="#"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                        soon</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 22</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo22.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="#"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                        soon</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 23</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo23.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="#"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                        soon</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 24</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo24.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="#"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                        soon</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 25</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo25.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="#"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                        soon</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 26</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo26.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="#"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                        soon</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 27</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo27.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="#"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                        soon</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 28</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo28.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="#"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                        soon</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 29</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo29.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="#"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                        soon</a>
                </div>
            </div>
            <h5 class="font-weight-bold mb-4 text-center">Demo 30</h5>
            <div class="overlay rounded-lg mb-8 offcanvas-demo">
                <div class="overlay-wrapper rounded-lg">
                    <img src="assets/media/demos/demo30.png" alt="" class="w-100"/>
                </div>
                <div class="overlay-layer">
                    <a href="#"
                       class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
                        soon</a>
                </div>
            </div>
        </div>
        <!--end::Wrapper-->
        <!--begin::Purchase-->
        <div class="offcanvas-footer">
            <a href="https://1.envato.market/EA4JP" target="_blank"
               class="btn btn-block btn-danger btn-shadow font-weight-bolder text-uppercase">Buy Metronic Now!</a>
        </div>
        <!--end::Purchase-->
    </div>
    <!--end::Content-->
</div>
<!--end::Demo Panel-->
<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>var KTAppSettings = {
        "breakpoints": {"sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400},
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#E4E6EF",
                    "dark": "#181C32"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1F0FF",
                    "secondary": "#EBEDF3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#3F4254",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32"
            }
        },
        "font-family": "Poppins"
    };</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Vendors(used by this page)-->
<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM"></script>
<script src="assets/plugins/custom/gmaps/gmaps.js"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="assets/js/pages/widgets.js"></script>

<script type="text/javascript">
    function search_function(el, type, data) {
        var search = el.value;
        if (search == '') {
            search = 'null';
        }
        $.ajax({
            url: "/front/filter/" + type + "/" + search + "/" + data,
            dataType: 'html',
            type: 'get',
            success: function (data) {
                $('#course_content').html(data);
            }
        });
    }

</script>
<!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>

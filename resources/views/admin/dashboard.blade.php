<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Osha Council | Dashboard</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/educator-fabicon-300x300.png') }}" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('admin_assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_assets/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('admin_assets/assets/css/users/user-profile.css') }}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
    <link href="{{ asset('admin_assets/assets/css/components/tabs-accordian/custom-accordions.css') }}" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_assets/plugins/table/datatable/custom_dt_html5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/assets/css/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_assets/plugins/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin_assets/plugins/table/datatable/custom_dt_custom.css') }}">
</head>

<body class="sidebar-noneoverflow">

    <!--  BEGIN NAVBAR  -->
    <div class="header-container">
        <header class="header navbar navbar-expand-sm">

            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>

            <div class="nav-logo align-self-center">
                <a class="navbar-brand" href="{{ url('admin/dashboard') }}"><img alt="logo"
                        src="{{ asset('assets/img/educator-fabicon-300x300.png') }}"> </a>
            </div>


            <ul class="navbar-item flex-row nav-dropdowns ml-auto">


                <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-success"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-log-out">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg> <span>Admin</span>

                    </a>

                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">

                        <div class="dropdown-item">
                            <a href="{{ url('admin/logout') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg> <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN TOPBAR  -->
        <div class="topbar-nav header navbar" role="banner">
            <nav id="topbar">
                <ul class="navbar-nav theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <a href="{{ url('admin/dashboard') }}">
                            <img src="{{ asset('admin_assets/assets/img/logo_main.png') }}" class="navbar-logo"
                                alt="logo">
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="{{ url('admin/dashboard') }}" class="nav-link"> </a>
                    </li>
                </ul>

                <ul class="list-unstyled menu-categories" id="topAccordion">

                    <li class="menu single-menu active ">
                        <a href="{{ url('admin/dashboard') }}" aria-expanded="true"
                            class="dropdown-toggle autodroprown">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu single-menu">
                        <a href="{{ url('admin/enquiries') }}" aria-expanded="true"
                            class="dropdown-toggle autodroprown">
                            <div class="">
                                <i data-feather="message-circle"></i>
                                <span>Enquiries</span>
                            </div>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
        <!--  END TOPBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="page-header">
                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a
                                    href="javascript:void(0);">Certificates</a></li>
                        </ol>
                    </nav>
                </div>

                <div class="row layout-top-spacing">

                    <div class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div id="accordionBasic" class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Add Certificate Data</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div id="toggleAccordion">
                                    <div class="card">
                                        <div class="card-header" id="headingThree1">
                                            <section class="mb-0 mt-0">
                                                <div role="menu" class="collapsed" data-toggle="collapse"
                                                    data-target="#defaultAccordionThree" aria-expanded="false"
                                                    aria-controls="defaultAccordionThree">
                                                    Enter Certificate Details
                                                    <div class="icons"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-chevron-down">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div id="defaultAccordionThree" class="collapse"
                                            aria-labelledby="headingThree1" data-parent="#toggleAccordion">
                                            <div class="card-body">
                                                <form action="{{ route('certificate.add_certificate_data_process') }}"
                                                    method="post">
                                                    {{-- <form action="" method="post" enctype="multipart/form-data"> --}}
                                                    @csrf
                                                    <div class="form-row mb-4">
                                                        <div class="form-group col-md-6">
                                                            <label for="inputEmail4">Certificate Unique ID</label>
                                                            <input type="text" class="form-control"
                                                                id="certificate_ID" value=""
                                                                name="certificate_ID" placeholder="Enter ID">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="inputPassword4">Certificate Holder Name</label>
                                                            <input type="text" class="form-control"
                                                                id="certificate_Holder" value=""
                                                                name="certificate_Holder" placeholder="Enter Name">
                                                        </div>
                                                    </div>
                                                    {{-- <div class="form-group mb-4">
                                                        <label for="inputState">Parent Category</label>
                                                        <select id="parent_category_id" name="parent_category_id" class="form-control">
                                                            <option value="0" selected>Select Categories</option>

                                                            <option value="1">Riding Gear</option>
                                                            <option value="2">Parts</option>

                                                        </select>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label for="inputState">Category Image</label>
                                                        <div class="custom-file mb-4">
                                                            <input type="file" class="custom-file-input"
                                                                id="category_image" name="category_image">
                                                            <label class="custom-file-label" for="customFile">Choose
                                                                Image</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="form-check pl-0">
                                                            <div class="custom-control custom-checkbox checkbox-info">
                                                                <input type="checkbox" name="is_home" class="custom-control-input" id="gridCheck">
                                                                <label class="custom-control-label" for="gridCheck">Show
                                                                    in Home Page</label>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                    <button type="submit" class="btn btn-primary mt-3">Add</button>
                                                    <input type="hidden" name="id" value="" />
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12" style="text-align: center">
                        <h4>Certificates Table</h4>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <table id="html5-extension" class="table style-3 table-hover non-hover"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Certificate ID</th>
                                        <th>Certificate Holder</th>
                                        {{-- <th class="text-center">Status</th> --}}
                                        <th class="text-center dt-no-sorting">Edit</th>
                                        <th class="text-center dt-no-sorting">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $list)
                                        <tr>
                                            <td>{{ $list->id }}</td>
                                            <td>{{ $list->certificate_code }}</td>
                                            {{-- @if (isset($list->category_image))
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame mr-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                        src="{{asset('storage/media/category/'.$list->category_image)}}">
                                                </div>
                                            </div>
                                        </td>
                                        @else
                                        <td>No Image</td>
                                        @endif --}}
                                            <td>{{ $list->holder_name }}</td>
                                            <td class="text-center">
                                                <a
                                                    href="{{ url('admin/category/manage_category/') }}/{{ $list->id }}">
                                                    <span class="badge badge-warning"> Edit </span>
                                                </a>
                                            </td>
                                            {{-- <td class="text-center">
                                            @if ($list->status == 1)
                                            <a href="{{url('admin/category/status/0')}}/{{$list->id}}">
                                            <span class="badge badge-success"> Active </span>
                                            </a>
                                            @elseif($list->status==0)
                                            <a href="{{url('admin/category/status/1')}}/{{$list->id}}">
                                            <span class="badge badge-danger"> Deactive </span>
                                            </a>
                                            @endif
                                        </td> --}}
                                            <td class="text-center">
                                                <ul class="table-controls">
                                                    {{-- <li>
                                                    <a href="{{url('admin/category/manage_category/')}}/{{$list->id}}">
                                                        <span class="badge badge-warning"> Edit </span>
                                                        </a>
                                                </li> --}}
                                                    <li><a href="{{ url('admin/certificate/delete/') }}/{{ $list->id }}"
                                                            class="bs-tooltip" data-toggle="tooltip"
                                                            data-placement="top" title=""
                                                            data-original-title="Delete certificate data"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-trash p-1 br-6 mb-1">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                </path>
                                                            </svg></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>







                </div>

                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Copyright © 2024 <a target="_blank"
                                href="https://powershiftmotorsports.com/">Osha Council</a>,
                            All rights reserved.</p>
                    </div>
                    <div class="footer-section f-section-2">
                        <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-heart">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                </path>
                            </svg></p>
                    </div>
                </div>

            </div>
        </div>
        <!-- END MAIN CONTAINER -->

        <script>
            $(document).ready(function() {
                App.init();
            });
        </script>

        <script type="text/javascript">
            feather.replace();
        </script>

        <script>
            $('#html5-extension-brand').DataTable({
                "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
                    "<'table-responsive'tr>" +
                    "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                buttons: {
                    buttons: [{
                            extend: 'copy',
                            className: 'btn btn-sm'
                        },
                        {
                            extend: 'csv',
                            className: 'btn btn-sm'
                        },
                        {
                            extend: 'excel',
                            className: 'btn btn-sm'
                        },
                        {
                            extend: 'print',
                            className: 'btn btn-sm'
                        }
                    ]
                },
                "oLanguage": {
                    "oPaginate": {
                        "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                        "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                    },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                    "sLengthMenu": "Results :  _MENU_",
                },
                "stripeClasses": [],
                "lengthMenu": [7, 10, 20, 50],
                "pageLength": 7
            });
        </script>
        <script src="{{ asset('admin_assets/plugins/font-icons/feather/feather.min.js') }}"></script>
        <script src="{{ asset('admin_assets/assets/js/main.js') }}"></script>
        <script src="{{ asset('admin_assets/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('admin_assets/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('admin_assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin_assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('admin_assets/assets/js/app.js') }}"></script>
        <script src="{{ asset('admin_assets/assets/js/custom.js') }}"></script>
        <script src="{{ asset('admin_assets/plugins/apex/apexcharts.min.js') }}"></script>
        <script src="{{ asset('admin_assets/assets/js/dashboard/dash_2.js') }}"></script>
        <script src="{{ asset('admin_assets/assets/js/scrollspyNav.js') }}"></script>
        <script src="{{ asset('admin_assets/assets/js/components/ui-accordions.js') }}"></script>
        <script src="{{ asset('admin_assets/plugins/table/datatable/datatables.js') }}"></script>
        <script src="{{ asset('admin_assets/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('admin_assets/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>
        <script src="{{ asset('admin_assets/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('admin_assets/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>
        <script>
            $('#html5-extension').DataTable({
                "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
                    "<'table-responsive'tr>" +
                    "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                buttons: {
                    buttons: [{
                            extend: 'copy',
                            className: 'btn btn-sm'
                        },
                        {
                            extend: 'csv',
                            className: 'btn btn-sm'
                        },
                        {
                            extend: 'excel',
                            className: 'btn btn-sm'
                        },
                        {
                            extend: 'print',
                            className: 'btn btn-sm'
                        }
                    ]
                },
                "oLanguage": {
                    "oPaginate": {
                        "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                        "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                    },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                    "sLengthMenu": "Results :  _MENU_",
                },
                "stripeClasses": [],
                "lengthMenu": [7, 10, 20, 50],
                "pageLength": 7
            });
            $('#html5-extension1').DataTable({
                "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
                    "<'table-responsive'tr>" +
                    "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                buttons: {
                    buttons: [{
                            extend: 'copy',
                            className: 'btn btn-sm'
                        },
                        {
                            extend: 'csv',
                            className: 'btn btn-sm'
                        },
                        {
                            extend: 'excel',
                            className: 'btn btn-sm'
                        },
                        {
                            extend: 'print',
                            className: 'btn btn-sm'
                        }
                    ]
                },
                "oLanguage": {
                    "oPaginate": {
                        "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                        "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                    },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                    "sLengthMenu": "Results :  _MENU_",
                },
                "stripeClasses": [],
                "lengthMenu": [7, 10, 20, 50],
                "pageLength": 7
            });
        </script>
        <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.2/dist/sweetalert2.all.min.js"></script>
        @include('sweetalert::alert')
</body>


</html>

@extends('templates.main') @section('header')
    <h2 class="card-label">Lista de oficios</h2>
@endsection

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">
                                <span class="d-block text-muted pt-2 font-size-sm"></span>
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Button-->
                            <a href="{{ route('oficio.create') }}" class="btn btn-primary font-weight-bolder">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo10/dist/assets/media/svg/icons/Design/Flatten.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <circle fill="#000000" cx="9" cy="15" r="6">
                                            </circle>
                                            <path
                                                d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                                fill="#000000" opacity="0.3"></path>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>Subir oficio</a>
                            <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin: Datatable-->
                        <table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Folio</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>No. oficio</th>
                                    <th>Asunto</th>
                                    <th>Recibe</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($oficio as $x)
                                    <tr>
                                        <td>{{ $x->id }}</td>
                                        <td>{{ $x->folio }}</td>
                                        <td>{{ $x->fecha }}</td>
                                        <td>{{ $x->hora }}</td>
                                        <td>{{ $x->noOficio }}</td>
                                        <td>{{ $x->asunto }}</td>
                                        <td>{{ $x->recibe }}</td>
                                        <td nowrap="nowrap">
                                            <form method="GET" action="/oficios/public{{ $x->documento }}"
                                                style="display: inline">
                                                @csrf
                                                <button href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                                    title="Visualizar" {{ $x->documento === null ? 'disabled' : '' }}>
                                                    <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/metronic/releases/2022-07-14-092914/core/html/src/media/icons/duotune/general/gen005.svg-->
                                                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z"
                                                                fill="currentColor" />
                                                            <rect x="7" y="17" width="6"
                                                                height="2" rx="1" fill="currentColor" />
                                                            <rect x="7" y="12" width="10"
                                                                height="2" rx="1" fill="currentColor" />
                                                            <rect x="7" y="7" width="6"
                                                                height="2" rx="1" fill="currentColor" />
                                                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                            </form>

                                            <form method="GET" action="{{ route('oficio.edit', $x->id) }}"
                                                style="display: inline">
                                                @csrf
                                                @method('UPDATE')
                                                <button href="javascript:;" class="btn btn-sm btn-clean btn-icon"
                                                    title="Editar">
                                                    <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/metronic/releases/2022-07-14-092914/core/html/src/media/icons/duotune/general/gen055.svg-->
                                                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
@endsection

@section('head-ss')
    <!--begin::Page Vendors Styles(used by this page)-->
    <link
        href="{{ asset('metronic/theme/html/demo10/dist/assets/plugins/custom/datatables/datatables.bundle.css?v=7.2.9') }}"
        rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
@endsection

@section('body-ss')
    <!--begin::Page Vendors(used by this page)-->
    <script
        src="{{ asset('metronic/theme/html/demo10/dist/assets/plugins/custom/datatables/datatables.bundle.js?v=7.2.9') }}">
    </script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script
        src="{{ asset('metronic/theme/html/demo10/dist/assets/js/pages/crud/datatables/extensions/buttons.js?v=7.2.9') }}">
    </script>
    <!--end::Page Scripts-->
@endsection

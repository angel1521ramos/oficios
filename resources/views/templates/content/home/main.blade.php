
@extends('templates.main')

@section('header')
<h2 class="card-label">Menu de herramientas</h2>
@endsection

@section('content')
                        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                            <!--begin::Entry-->
                            <div class="d-flex flex-column-fluid">
                                <!--begin::Container-->
                                <div class="container">
                                    <!--begin::Dashboard-->

                                    <div class="row my-10">
                                        <!--begin: Pricing-->
                                        <div class="col-md-6 col-xxl-6 border-right-0 border-right-md border-bottom border-bottom-xxl-0">
                                            <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                                                <div class="d-flex flex-center position-relative mb-25">
                                                    <span class="svg svg-fill-primary opacity-4 position-absolute">
                                                        <svg width="175" height="200">
                                                            <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0"></polyline>
                                                        </svg>
                                                    </span>
                                                    <span class="svg-icon svg-icon-5x svg-icon-primary">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo10/dist/assets/media/svg/icons/Shopping/Safe.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13.5L12.5 13V10C12.5 9.4 12.6 9.5 12 9.5C11.4 9.5 11.5 9.4 11.5 10L11 13L8 13.5C7.4 13.5 7 13.4 7 14C7 14.6 7.4 14.5 8 14.5H11V18C11 18.6 11.4 19 12 19C12.6 19 12.5 18.6 12.5 18V14.5L16 14C16.6 14 17 14.6 17 14C17 13.4 16.6 13.5 16 13.5Z" fill="currentColor"/>
                                                                <rect x="11" y="19" width="10" height="2" rx="1" transform="rotate(-90 11 19)" fill="currentColor"/>
                                                                <rect x="7" y="13" width="10" height="2" rx="1" fill="currentColor"/>
                                                                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor"/>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">Subir oficio</span>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('oficio.create') }}">
                                                        <button type="button" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Realizar</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Pricing-->
                                        <!--begin: Pricing-->
                                        <div class="col-md-6 col-xxl-6">
                                            <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                                                <div class="d-flex flex-center position-relative mb-25">
                                                    <span class="svg svg-fill-primary opacity-4 position-absolute">
                                                        <svg width="175" height="200">
                                                            <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0"></polyline>
                                                        </svg>
                                                    </span>
                                                    <span class="svg-icon svg-icon-5x svg-icon-success">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo10/dist/assets/media/svg/icons/Shopping/Box3.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor"/>
                                                                <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor"/>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                                <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">Visualizar oficio</span>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('oficio.index') }}">
                                                        <button type="button" class="btn btn-success text-uppercase font-weight-bolder px-15 py-3">Realizar</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Pricing-->
                                    </div>
                                    <!--@ include('templates.content.home.questions')-->

                                    <!--end::Dashboard-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Entry-->
                        </div>
@endsection

                        
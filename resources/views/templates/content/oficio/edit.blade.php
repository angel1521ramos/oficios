@extends('templates.main')

@section('header')
    <h2 class="card-label">Editar oficio</h2>
@endsection

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('inicio') }}" class="text-muted">Inicio</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="" class="text-muted">Editar oficio</a>
                            </li>
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container-fluid">
                <div class="card card-custom">
                    <div class="card-body p-0">
                        <!--begin: Wizard-->
                        <div class="wizard wizard-2" id="kt_wizard" data-wizard-state="first" data-wizard-clickable="false">
                            <!--begin: Wizard Nav-->
                            <div class="wizard-nav border-right py-8 px-8 py-lg-20 px-lg-10">
                                <!--begin::Wizard Step 1 Nav-->
                                <div class="wizard-steps">
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-icon">
                                                <span class="svg-icon svg-icon-2x">
                                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo10/dist/assets/media/svg/icons/General/User.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                            <path
                                                                d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                                fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                            <path
                                                                d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                                fill="#000000" fill-rule="nonzero"></path>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </div>
                                            <div class="wizard-label">
                                                <h3 class="wizard-title">Oficialia de partes</h3>
                                                <div class="wizard-desc">Ingrese los datos del oficio de oficialia de partes
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 1 Nav-->
                                    <!--begin::Wizard Step 2 Nav-->
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-icon">
                                                <span class="svg-icon svg-icon-2x">
                                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo10/dist/assets/media/svg/icons/Map/Compass.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24"
                                                                height="24"></rect>
                                                            <path
                                                                d="M12,21 C7.02943725,21 3,16.9705627 3,12 C3,7.02943725 7.02943725,3 12,3 C16.9705627,3 21,7.02943725 21,12 C21,16.9705627 16.9705627,21 12,21 Z M14.1654881,7.35483745 L9.61055177,10.3622525 C9.47921741,10.4489666 9.39637436,10.592455 9.38694497,10.7495509 L9.05991526,16.197949 C9.04337012,16.4735952 9.25341309,16.7104632 9.52905936,16.7270083 C9.63705011,16.7334903 9.74423017,16.7047714 9.83451193,16.6451626 L14.3894482,13.6377475 C14.5207826,13.5510334 14.6036256,13.407545 14.613055,13.2504491 L14.9400847,7.80205104 C14.9566299,7.52640477 14.7465869,7.28953682 14.4709406,7.27299168 C14.3629499,7.26650974 14.2557698,7.29522855 14.1654881,7.35483745 Z"
                                                                fill="#000000"></path>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </div>
                                            <div class="wizard-label">
                                                <h3 class="wizard-title">Datos generales</h3>
                                                <div class="wizard-desc">Ingrese los datos generales del oficio</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 2 Nav-->
                                    <!--begin::Wizard Step 3 Nav-->
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-icon">
                                                <span class="svg-icon svg-icon-2x">
                                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo10/dist/assets/media/svg/icons/General/Thunder-move.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24"
                                                                height="24"></rect>
                                                            <path
                                                                d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z"
                                                                fill="#000000"></path>
                                                            <path
                                                                d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z"
                                                                fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </div>
                                            <div class="wizard-label">
                                                <h3 class="wizard-title">Observaciones</h3>
                                                <div class="wizard-desc">Ingrese las observaciones y datos extras de los
                                                    oficios</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 3 Nav-->
                                    <!--begin::Wizard Step 6 Nav-->
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-icon">
                                                <span class="svg-icon svg-icon-2x">
                                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo10/dist/assets/media/svg/icons/General/Like.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24"
                                                                height="24"></rect>
                                                            <path
                                                                d="M9,10 L9,19 L10.1525987,19.3841996 C11.3761964,19.7920655 12.6575468,20 13.9473319,20 L17.5405883,20 C18.9706314,20 20.2018758,18.990621 20.4823303,17.5883484 L21.231529,13.8423552 C21.5564648,12.217676 20.5028146,10.6372006 18.8781353,10.3122648 C18.6189212,10.260422 18.353992,10.2430672 18.0902299,10.2606513 L14.5,10.5 L14.8641964,6.49383981 C14.9326895,5.74041495 14.3774427,5.07411874 13.6240179,5.00562558 C13.5827848,5.00187712 13.5414031,5 13.5,5 L13.5,5 C12.5694044,5 11.7070439,5.48826024 11.2282564,6.28623939 L9,10 Z"
                                                                fill="#000000"></path>
                                                            <rect fill="#000000" opacity="0.3" x="2"
                                                                y="9" width="5" height="11"
                                                                rx="1"></rect>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </div>
                                            <div class="wizard-label">
                                                <h3 class="wizard-title">Completado</h3>
                                                <div class="wizard-desc">Revisa los datos y subelos</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 6 Nav-->
                                </div>
                            </div>
                            <!--end: Wizard Nav-->
                            <!--begin: Wizard Body-->
                            <div class="wizard-body py-8 px-8 py-lg-20 px-lg-10">
                                <!--begin: Wizard Form-->
                                <div class="row">
                                    <div class="offset-xxl-2 col-xxl-8">
                                        <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_form"
                                            name="kt_form" method="POST" action="{{ route('oficio.update', $oficio->id) }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <!--begin: Wizard Step 1-->
                                            <div class="pb-5" data-wizard-type="step-content"
                                                data-wizard-state="current">
                                                <h4 class="mb-10 font-weight-bold text-dark">Ingrese los datos requeridos
                                                </h4>
                                                <!--begin::Input-->
                                                <div class="form-group fv-plugins-icon-container has-success">
                                                    <label>Folio</label>
                                                    <input type="text"
                                                        class="form-control form-control-solid form-control-lg"
                                                        id="folio" name="folio"
                                                        placeholder="Por Favor introduzca el folio" value="{{ $oficio->folio }}">

                                                    <div class="fv-plugins-message-container"></div>
                                                </div>
                                                <!--end::Input-->
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container has-success">
                                                            <label>Fecha</label>
                                                            <input type="text"
                                                                class="form-control form-control-solid form-control-lg"
                                                                id="kt_datepicker_1" name="fecha"
                                                                placeholder="Por Favor introduzca la fecha"
                                                                value="{{ $oficio->fecha }}">

                                                            <div class="fv-plugins-message-container"></div>
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container has-success">
                                                            <label>Hora</label>
                                                            <input type="text"
                                                                class="form-control form-control-solid form-control-lg"
                                                                id="kt_timepicker_1" name="hora"
                                                                placeholder="Por Favor introduzca la hora" value="{{ $oficio->hora }}">

                                                            <div class="fv-plugins-message-container"></div>
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Wizard Step 1-->
                                            <!--begin: Wizard Step 2-->
                                            <div class="pb-5" data-wizard-type="step-content"
                                                data-wizard-state="current">
                                                <h4 class="mb-10 font-weight-bold text-dark">Ingrese los datos requeridos
                                                </h4>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container has-success">
                                                            <label>Numero de oficio</label>
                                                            <input type="text"
                                                                class="form-control form-control-solid form-control-lg"
                                                                id="noOficio" name="noOficio"
                                                                placeholder="Por Favor introduzca el numero de oficio"
                                                                value="{{ $oficio->noOficio }}">

                                                            <div class="fv-plugins-message-container"></div>
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container has-success">
                                                            <label>Telefono</label>
                                                            <input type="text"
                                                                class="form-control form-control-solid form-control-lg"
                                                                id="telefono" name="telefono"
                                                                placeholder="Por Favor introduzca la telefono"
                                                                value="{{ $oficio->telefono }}">

                                                            <div class="fv-plugins-message-container"></div>
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                </div>
                                                <!--begin::Input-->
                                                <div class="form-group fv-plugins-icon-container has-success">
                                                    <label>Remitente</label>
                                                    <input type="text"
                                                        class="form-control form-control-solid form-control-lg"
                                                        id="remitente" name="remitente"
                                                        placeholder="Por Favor introduzca el remitente" value="{{ $oficio->remitente }}">

                                                    <div class="fv-plugins-message-container"></div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group fv-plugins-icon-container has-success">
                                                    <label>Dependencia</label>
                                                    <input type="text"
                                                        class="form-control form-control-solid form-control-lg"
                                                        id="dependencia" name="dependencia"
                                                        placeholder="Por Favor introduzca la dependencia"
                                                        value="{{ $oficio->dependencia }}">

                                                    <div class="fv-plugins-message-container"></div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="form-group fv-plugins-icon-container has-success">
                                                    <label>Asunto</label>
                                                    <input type="text"
                                                        class="form-control form-control-solid form-control-lg"
                                                        id="asunto" name="asunto"
                                                        placeholder="Por Favor introduzca el asunto" value="{{ $oficio->asunto }}">

                                                    <div class="fv-plugins-message-container"></div>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <!--end: Wizard Step 2-->
                                            <!--begin: Wizard Step 3-->
                                            <div class="pb-5" data-wizard-type="step-content"
                                                data-wizard-state="current">
                                                <h4 class="mb-10 font-weight-bold text-dark">Ingrese los datos requeridos
                                                </h4>
                                                <!--begin::Input-->
                                                <div class="form-group fv-plugins-icon-container has-success">
                                                    <label>Observacion</label>
                                                    <input type="text"
                                                        class="form-control form-control-solid form-control-lg"
                                                        id="observacion" name="observacion"
                                                        placeholder="Por Favor introduzca las observaciones"
                                                        value="{{ $oficio->observacion }}">

                                                    <div class="fv-plugins-message-container"></div>
                                                </div>
                                                <!--end::Input-->
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container has-success">
                                                            <label>Recibe</label>
                                                            <input type="text"
                                                                class="form-control form-control-solid form-control-lg"
                                                                id="recibe" name="recibe"
                                                                placeholder="Por Favor introduzca el nombre de quien recibe"
                                                                value="{{ $oficio->recibe }}">

                                                            <div class="fv-plugins-message-container"></div>
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container has-success">
                                                            <label>Documento</label>
                                                            <label for="documento" class="form-control" >
                                                                <span class="svg-icon svg-icon-lg svg-icon-info">
                                                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo10/dist/assets/media/svg/icons/Communication/Clipboard-check.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"></path>
                                                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000"></path>
                                                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"></path>
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                                <a id="documento_name">{{ $oficio->documentoNombre }}</a>
                                                            </label>
                                                            <input type="file"
                                                                class="form-control form-control-solid form-control-lg"
                                                                id="documento" name="documento"
                                                                placeholder="Por Favor introduzca el documento"
                                                                value="" accept="application/pdf" style="display: none;">
                                                            <div class="fv-plugins-message-container"></div>
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Wizard Step 3-->
                                            <!--begin: Wizard Step 6-->
                                            <div class="pb-5" data-wizard-type="step-content">
                                                <!--begin::Section-->
                                                <h4 class="mb-10 font-weight-bold text-dark">Revisa cada dato antes de
                                                    subirlos</h4>
                                                <h6 class="font-weight-bolder mb-3">Oficialia de partes:</h6>
                                                <div class="text-dark-50 line-height-lg">
                                                    <div style="display: inline">
                                                        <b>Numero de folio:</b>
                                                        <span id="Dfolio"></span>
                                                    </div><br>
                                                    <div style="display: inline">
                                                        <b>Fecha:</b>
                                                        <span id="Dfecha"></span>
                                                    </div><br>
                                                    <div style="display: inline">
                                                        <b>Hora de recibido:</b>
                                                        <span id="Dhora"></span>
                                                    </div><br>
                                                </div>
                                                <div class="separator separator-dashed my-5"></div>
                                                <!--end::Section-->
                                                <!--begin::Section-->
                                                <h6 class="font-weight-bolder mb-3">Datos Generales:</h6>
                                                <div class="text-dark-50 line-height-lg">
                                                    <div style="display: inline">
                                                        <b>Numero de oficio:</b>
                                                        <span id="DnoOficio"></span>
                                                    </div><br>
                                                    <div style="display: inline">
                                                        <b>Dependencia:</b>
                                                        <span id="Ddependencia"></span>
                                                    </div><br>
                                                    <div style="display: inline">
                                                        <b>Remitente:</b>
                                                        <span id="Dremitente"></span>
                                                    </div><br>
                                                    <div style="display: inline">
                                                        <b>Telefono:</b>
                                                        <span id="Dtelefono"></span>
                                                    </div><br>
                                                    <div style="display: inline">
                                                        <b>Asunto:</b>
                                                        <span id="Dasunto"></span>
                                                    </div><br>
                                                </div>
                                                <div class="separator separator-dashed my-5"></div>
                                                <!--end::Section-->
                                                <!--begin::Section-->
                                                <h6 class="font-weight-bolder mb-3">Observaciones:</h6>
                                                <div class="text-dark-50 line-height-lg">
                                                    <div style="display: inline">
                                                        <b>observacion:</b>
                                                        <span id="Dobservacion"></span>
                                                    </div><br>
                                                    <div style="display: inline">
                                                        <b>Recibe:</b>
                                                        <span id="Drecibe"></span>
                                                    </div><br>
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end: Wizard Step 6-->
                                            <!--begin: Wizard Actions-->
                                            <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                                <div class="mr-2">
                                                    <button type="button"
                                                        class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4"
                                                        data-wizard-type="action-prev">Anterior</button>
                                                </div>
                                                <div>
                                                    <button type="submit"
                                                        class="btn btn-success font-weight-bolder text-uppercase px-9 py-4"
                                                        data-wizard-type="action-submit">Enviar</button>
                                                    <button type="button"
                                                        class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4"
                                                        data-wizard-type="action-next" onclick="next()">Siguiente</button>
                                                </div>
                                            </div>
                                            <!--end: Wizard Actions-->
                                        </form>
                                    </div>
                                    <!--end: Wizard-->
                                </div>
                                <!--end: Wizard Form-->
                            </div>
                            <!--end: Wizard Body-->
                        </div>
                        <!--end: Wizard-->
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
@endsection

@section('head-ss')
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{ asset('metronic/theme/html/demo10/dist/assets/css/pages/wizard/wizard-2.css?v=7.2.9') }}"
        rel="stylesheet" type="text/css" />
@endsection


@section('body-ss')
    <script>
        
        $(documento).change(function() {
            var documento = $("#documento")[0].files[0];
            document.getElementById("documento_name").innerHTML = documento.name;    
        });

        function next() {
            var folio = document.getElementById("folio").value;
            var fecha = document.getElementById("kt_datepicker_1").value;
            var hora = document.getElementById("kt_timepicker_1").value;

            var noOficio = document.getElementById("noOficio").value;
            var dependencia = document.getElementById("dependencia").value;
            var remitente = document.getElementById("remitente").value;
            var telefono = document.getElementById("telefono").value;
            var asunto = document.getElementById("asunto").value;

            var observacion = document.getElementById("observacion").value;
            var recibe = document.getElementById("recibe").value;


            document.getElementById("Dfolio").innerHTML = folio;
            document.getElementById("Dfecha").innerHTML = fecha;
            document.getElementById("Dhora").innerHTML = hora;

            document.getElementById("DnoOficio").innerHTML = noOficio;
            document.getElementById("Ddependencia").innerHTML = dependencia;
            document.getElementById("Dremitente").innerHTML = remitente;
            document.getElementById("Dtelefono").innerHTML = telefono;
            document.getElementById("Dasunto").innerHTML = asunto;

            document.getElementById("Dobservacion").innerHTML = observacion;
            document.getElementById("Drecibe").innerHTML = recibe;
        }
    </script>

    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('metronic/theme/html/demo10/dist/assets/js/pages/custom/wizard/wizard-2.js?v=7.2.9') }}"></script>
    <!--end::Page Scripts-->

    <!--begin::Page Scripts(used by this page)-->
    <script
        src="{{ asset('metronic/theme/html/demo10/dist/assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js?v=7.2.9') }}">
    </script>
    <!--end::Page Scripts-->
    <!--begin::Page Scripts(used by this page)-->
    <script
        src="{{ asset('metronic/theme/html/demo10/dist/assets/js/pages/crud/forms/widgets/bootstrap-timepicker.js?v=7.2.9') }}">
    </script>
@endsection

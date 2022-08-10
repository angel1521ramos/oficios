
<!DOCTYPE html>
<html lang="es">
	<!--begin::Head-->
	<head>
		<meta charset="utf-8" />
		<title>Registro de oficios</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />	</head>
        <!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link rel="stylesheet" href="{{ asset('public/metronic/theme/html/demo10/dist/assets/plugins/fontawesome-free/css/all.min.css') }}">
		<!--end::Fonts-->
        @yield('head-ss')
        @include('templates.src.head-ss')
		<link rel="shortcut icon" href="{{ asset('public/metronic/theme/html/demo10/dist/assets/media/logos/logo-ayuntamiento.ico') }}" />
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed sidebar-enabled page-loading">
		<!-- Google Tag Manager (noscript) -->
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
		<!-- End Google Tag Manager (noscript) -->
            <!--begin::Main-->
                <!--begin::Header Mobile-->
                    @include('templates.header.mobile')
                <!--end::Header Mobile-->
            <div class="d-flex flex-column flex-root">
                <!--begin::Page-->
                <div class="d-flex flex-row flex-column-fluid page">
                    <!--begin::Aside-->
                        @include('templates.aside.main')
                    <!--end::Aside-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                        <!--begin::Header-->
                        <div id="kt_header" class="header header-fixed">
                            <!--begin::Header Wrapper-->
                            <div class="header-wrapper rounded-top-xl d-flex flex-grow-1 align-items-center">
                                <!--begin::Container-->
                                <div class="container-fluid d-flex align-items-center justify-content-end justify-content-lg-between flex-wrap">
                                    <!--begin::Menu Wrapper-->
                                    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                                        <!--begin::Menu-->
                                        <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                                            @yield('header')
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Menu Wrapper-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Header Wrapper-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Content-->
                        @yield('content')
                        <!--end::Content-->
                        <!--begin::Footer-->
                        @include('templates.footer.main')
                        <!--end::Footer-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Page-->
            </div>
            <!--end::Main-->
        @include('templates.src.body-ss')
        @yield('body-ss')
	</body>
	<!--end::Body-->
</html>
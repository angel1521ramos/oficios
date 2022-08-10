
<!DOCTYPE html>
<html lang="es">
	<!--begin::Head-->
	<head>
		<meta charset="utf-8" />
		<title>Metronic Live preview | Keenthemes</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />	</head>
        @include('templates.src.head-ss')
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
                            @include('templates.header.main')
                        <!--end::Header-->
                        <!--begin::Content-->
                            @include('templates.content.main')
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
	</body>
	<!--end::Body-->
</html>
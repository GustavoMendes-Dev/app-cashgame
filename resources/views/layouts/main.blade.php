@include('layouts.head')
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-enabled aside-fixed">
        <div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
                @include('layouts.aside')
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    @include('layouts.header')
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        @yield('content')
					</div>
                    @include('layouts.footer')
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
    </body>
</html>

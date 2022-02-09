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

    <div id="drawer-overlay" style="z-index: 109;" class=""></div>

    <script>
      let toggle = document.querySelector("#kt_aside_mobile_toggle");
      let aside = document.querySelector("#kt_aside");
      let body = document.querySelector("#kt_body");

      function OpenAside(){
        console.log('cliquei');
        aside.classList.add("drawer-on");
      }

      $(document).ready(function () {
        var width = $(document).width();
        console.log(width);

        if (width < 992) {
          aside.classList.add("drawer", "drawer-start");
        } else {
          aside.classList.remove("drawer", "drawer-start");
        }
      });

    </script>

    </body>
</html>

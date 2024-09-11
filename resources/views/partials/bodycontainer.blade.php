<div class="body-content outer-top-vs" id="top-banner-and-menu">
    <div class="container">
      <div class='row single-product'>
        <div class="row ">
            <!-- ===== SIDEBAR ===== -->
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                @yield('sidecontent')
            </div>

            <!-- ===== CONTENT ===== -->
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                <!-- = SECTION – HERO  -->
                @yield('maincontent')          
            </div>
        </div>
    </div>
</div>

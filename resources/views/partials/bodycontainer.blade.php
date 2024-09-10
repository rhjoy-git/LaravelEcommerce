<div class="body-content outer-top-vs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <!-- ===== SIDEBAR ===== -->
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                @include('products.sider.categories')
                @include('products.sider.specialOffers')
                @include('products.sider.productsTag')
                @include('products.sider.specialsDeals')
                @include('products.sider.newsletter')
                @include('products.sider.testimonial')

            </div>

            <!-- ===== CONTENT ===== -->
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                <!-- = SECTION – HERO  -->
                @include('products.content.heroBanner')
                @include('products.content.newProducts')
                @include('products.content.banner')
                @include('products.featuredproducts')
                @include('blog.blog')
                @include('products.content.widebanners')
            </div>
        </div>
    </div>
</div>

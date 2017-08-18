<!-- BEGIN CONTAINER -->
<div class="page-container">

    @include("admin_partial.sidebar")


    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            @yield("contents_text")
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    @include("admin_partial.quick_sidebar")
</div>
<!-- END CONTAINER -->
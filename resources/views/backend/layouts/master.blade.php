<!DOCTYPE html>
<html lang="en">

@include('backend.layouts.head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('backend.layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('backend.layouts.header')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @yield('main-content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            @include('backend.layouts.footer')
            <script>
                // GLOBAL CONFIGURATION
                $.extend($.summernote.options, {
                    height: 250,
                    fontNames: ['Arial', 'kalpurush', 'Times New Roman', 'Courier New'],
                    fontNamesIgnoreCheck: ['kalpurush'],
                    fontSizes: ['10', '12', '14', '16', '18', '24', '36', '48'],
                    codeviewFilter: false, // allow all HTML
                    codeviewIframeFilter: false, // allow iframe
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'italic', 'underline', 'clear', 'fontname', 'fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['insert', ['link', 'picture', 'video', 'table']],
                        ['view', ['fullscreen', 'codeview', 'help']]
                    ]
                });
            </script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hi! @yield('title')  {{ Auth::user()->name}}</title>


    {{-- STYLE --}}
    @include('includes.editor.style')


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('includes.editor.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('includes.editor.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('includes.editor.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- loader --}}

    <div class="loading-clock">
        <div class="loader">

        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    @include('includes.editor.script')
    <script>
        $(document).ready(function(){
            function notification(){
                $.ajax({
                    url:"{{ route('editor.notif')}}",
                    type:"GET",
                    dataType:"json",
                    success: function(res){
                        let totalNotif = res.total;
                        if(totalNotif > 0){
                            $("#notif").text(totalNotif);
                        }else{
                            $("#notif").text(totalNotif);
                        }
                        $('#notif-list').empty();
                        if(res.contact > 0){
                            $('#notif-list').append(
                                `
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                     <div class="icon-cricle bg-primary">
                                        <i class="fas fa-envelope fa-fw"></i>
                                    </div>
                                    </div>
                                    <div class="font-weight-bold">
                                        ada ${res.contact} pesan dari contact yang belum di baca
                                    </div>
                                </a>
                                `
                            );
                        }
                        if(totalNotif == 0){
                            $('#notif-list').append(
                                `
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    no notification
                                </a>
                                `
                            );
                        }
                    },
                });
            };
            notification();
            setInterval(notification, 10000);
        });
    </script>
    @yield('script')
</body>

</html>

@extends('layouts.editor')
@section('title')
    magz
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">magz</h1>

        <form action="" id="form_cari" method="post">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari nama" name="cari" id="cari">
                <div class="input-group-append">
                    <button type="button" id="add_new" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Add</button>
                  <button class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm" type="button" id="btn-cari">Cari</button>
                </div>
              </div>
        </form>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data magz</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="Tmc" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Link</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<form id="addForm" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add new magz</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-grop row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" id="title" name="title" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Image</label>
                        <div id="imagev" class="my-2"></div>
                        <input type="file" id="file" name="file" class="form-control" onchange="ViewImage(this);">
                    </div>

                    <div class="form-grop row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Link</label>
                                <input type="text" id="link" name="link" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="button" id="proses_add" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form id="updateForm" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update magz</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-grop row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="hidden" id="id_update" name="id" class="form-control">
                                <input type="text" id="title_update" name="title" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <div id="imagev_update" class="my-2"></div>
                        <input type="file" id="file_update" name="file" class="form-control" onchange="ViewImageUp(this);">
                    </div>
                    <div class="form-grop row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Link</label>
                                <input type="hidden" id="id_update" name="id" class="form-control">
                                <input type="text" id="link_update" name="link" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="button" id="proses_update" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
@section('script')
<script>
    function ViewImage(input) {
        let imagev = $('#imagev');
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
            imagev.empty().append('<img id="imgv" class="img-fluid" src="#">');
            $('#imgv').attr('src', e.target.result).height(200);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    function ViewImageUp(input) {
        let imagev = $('#imagev_update');
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
            imagev.empty().append('<img id="imgv" class="img-fluid" src="#">');
            $('#imgv').attr('src', e.target.result).height(200);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $('document').ready(function(e){
        var Tmc = $('#Tmc').DataTable({
            "responsive": true,
            'searching': false,
            "processing": true,
            "serverSide": true,
            "pagingType": "full_numbers",
            "paging":true,
            "ajax":{
                "url":"{{ route('editor.magz.data') }}",
                "data":function(parm){
                    parm.search = function(){
                        return $('#cari').val()
                    }
                },

            },
            "columns":[
                {"data": "title","orderable":false},
                {"data": "link","orderable":false},
                {
                    "data": "image","orderable":false,render:function(data,type,row){
                        let img_path = row.image;
                        let img_view = '<img src="{{ asset("storage") }}/'+img_path+'" class="rounded float-left" width="100">';
                        return img_view;
                    }
                },
                {
                    "data": "id","orderable":false,render: function ( data, type, row ){
                        var idData = row.id;
                        let isVerified = row.verified;
                        let btn ='<div class="btn-group" role="group" aria-label="Basic example">';
                        if(isVerified == 0){
                            btn += '<button type="button" class="btn btn-success btnVerified">Verified</button>';
                        }
                        btn += '<button type="button" class="btn btn-warning btnUpdate">Update</button>';
                        btn += '<button type="button" class="btn btn-danger btnDelete">Delete</button>';
                        btn += '</div>';
                        return btn;
                    }
                },
            ]
        });
        function redraw(){
            Tmc.draw();
        }
        $("#add_new").click(function(){
            $("#addModal").modal("show");
        });
        $("#proses_add").click(function(){
            var postData = new FormData($("#addForm")[0]);
            $.ajax({
                url:"{{ URL::route('editor.magz.store') }}",
                data:postData,
                type:"POST",
                dataType:"JSON",
                cache:false,
                contentType: false,
                processData: false,
                beforeSend: function(){
                    $('.loading-clock').css('display','flex');
                },
                success:function(data){
                    if(data.success == 1){
                        // Reset form
                        $('#addForm')[0].reset();
                        // Remove image preview
                        $("#addModal").modal("hide");
                        toastr_success(data.messages);
                        redraw();
                    }else{
                        toastr_error(data.messages);
                    }
                },
                complete: function(){
                    $('.loading-clock').css('display','none');
                },
            });
        });
        $("#btn-cari").click(function(){
            let search = $("#cari").val();
            Tmc.draw();
        });
        $("#Tmc tbody").on('click','.btnUpdate',function(){
            let data = Tmc.row( $(this).parents('tr') ).data();
            let idData = data.id;
            $.ajax({
                url:"{{ URL::route('editor.magz.detail') }}",
                type: "GET",
                data: {
                    "_token": "{{ csrf_token() }}",
                    'id': idData
                },
                dataType: "JSON",
                cache: false,
                beforeSend: function(){
                    $('.loading-clock').css('display','flex');
                },
                success: function(data) {
                    if(data.success == 1){
                        let id = data.data.id;
                        let title = data.data.title;
                        let link = data.data.link;
                        let image = data.data.image;
                        $("#updateForm #imagev_update").empty().append('<img id="img" class="img-fluid" src="#">');
                        $('#img').attr('src', "{{ asset('storage') }}/"+image).height(200);
                        $("#id_update").val(id);
                        $("#title_update").val(title);
                        $("#link_update").val(link);

                        $('#file_update').val(null);

                    } else{
                        toastr_error(data.messages);
                    }
                },
                complete: function(){
                    $('.loading-clock').css('display','none');
                },
            })
            $("#updateModal").modal("show");
        });
        $("#proses_update").click(function(){
            var postData = new FormData($("#updateForm")[0]);
            $.ajax({
                url:"{{ URL::route('editor.magz.update') }}",
                data:postData,
                type:"POST",
                dataType:"JSON",
                cache:false,
                contentType: false,
                processData: false,
                beforeSend: function(){
                    $('.loading-clock').css('display','flex');
                },
                success:function(data){
                    if(data.success == 1){
                        $("#updateModal").modal("hide");
                        toastr_success(data.messages);
                        redraw();
                    }else{
                        toastr_error(data.messages);
                    }
                },
                complete: function(){
                    $('.loading-clock').css('display','none');
                },
            });
        });
        $("#Tmc tbody").on('click','.btnDelete',function(){
            let data = Tmc.row( $(this).parents('tr') ).data();
            let idData = data.id;
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url:"{{ URL::route('editor.magz.delete') }}",
                        type: "DELETE",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            'id': idData
                        },
                        dataType: "JSON",
                        cache: false,
                        beforeSend: function(){
                            $('.loading-clock').css('display','flex');
                        },
                        success: function(data) {
                            if(data.success == 1){
                                toastr_success(data.messages);
                                redraw();
                            } else{
                                toastr_error(data.messages);
                            }
                        },
                        complete: function(){
                            $('.loading-clock').css('display','none');
                        },
                    });
                }
                });
        });
        function toastr_success(msg){
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
            });
            Toast.fire({
            icon: "success",
            title: msg
        });
    }
    function toastr_error(msg){
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
            });
            Toast.fire({
            icon: "error",
            title: msg
        });
        }
    });
</script>
@endsection

@extends('layouts.template')
@section('content-header')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{$title}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="{{route($breadcrumb[0]['url'])}}">{{ $breadcrumb[0]['name'] }}</a></li>
              <li class="breadcrumb-item active">{{ $breadcrumb[1]['name'] }}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>
@endsection

@section('content')
<section class="content">

		<!--<a href="{{route('/profil/create')}}" class="btn btn-flat btn-primary float-sm-right">-->
		<!--		<i class="fa fa-plus" aria-hidden="true"></i> Buat Pengguna Baru-->
		<!--</a><br/></br>-->
      <!-- Default box -->
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Data {{$title}}</h3>

          <div class="card-tools">
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button> -->
          </div>
        </div>
        <div class="card-body">
             
             <table id="tabeldata" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Pengguna</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  	@php $no=1; @endphp
                    @foreach($datausers as $data)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->jenis_akses}}</td>
                    <td>     
                    	  <input type="hidden" id="status_kateg" name="status" value="{{$data->status_user}}"/>                  
                          <a href="javascript:void(0);" href="javascript:;" onclick="konfirmasi({{$data->id}})" class="btn btn-flat @if($data->status_user == 'T') btn-success @else btn-warning @endif btn-xs">@if($data->status_user == 'T') Aktif @else Non Aktif @endif</a>                          
                          <!--<a href="{{route($breadcrumb[1]['url'])}}/edit/{{ base64_encode($data->id) }}" class="btn btn-flat btn-primary btn-xs">Edit</a>-->
                          <a href="javascript:void(0);" href="javascript:;" onclick="resetpass({{$data->id}})" class="btn btn-flat btn-danger btn-xs">Reset Password</a>
                      </td>                    
                  </tr>
                  @endforeach
                  </tbody>
                </table>

        </div>              
      </div>
      <!-- /.card -->

    </section>

    
@endsection

@push('lib-js')
<script type="text/javascript">
 @if(session('success'))
	 Swal.fire({
	  type: 'success',
	  title: 'Success',
	  text: '{{session('success')}}'
	});
 @endif

 function konfirmasi(id){
 			var st = document.getElementById('status_kateg').value;
 			
 			// console.log(status);
            Swal.fire({
                title: "Perhatian !",
                text: "Anda yakin akan mengubah status aktif user berikut ?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Ya, ubah !",
                cancelButtonText: "Tidak",
                reverseButtons: true
            }).then(function(result) {
                // console.log('Data:'+id);
                if (result.value) {
                    $.ajax({
                      url: "{{route('profil')}}/aktif/"+id+"/"+st,
                      type: "GET",
                      dataType: 'json',
                      success: function (data) {
                        location.reload();
                        // console.log(data);
                        Swal.fire("Berhasil", "Berhasil mengubah status pengguna", "success");                       
                      },
                      error: function (data) {
                          console.log('Error:', data);                      
                          Swal.fire("Gagal", "Data gagal mengubah status pengguna !", "error");
                      }                 
                    });
                }
            });
        }

        function resetpass(id){
 			
 			// console.log(status);
            Swal.fire({
                title: "Perhatian !",
                text: "Reset password akan mengembalikan pada default password sistem (12345678), apakah anda yakin ?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Ya, ubah !",
                cancelButtonText: "Tidak",
                reverseButtons: true
            }).then(function(result) {
                // console.log('Data:'+id);
                if (result.value) {
                    $.ajax({
                      url: "{{route('profil')}}/reset/"+id,
                      type: "GET",
                      dataType: 'json',
                      success: function (data) {
                        location.reload();
                        // console.log(data);
                        Swal.fire("Berhasil", "Berhasil melakukan reset password pengguna", "success");                       
                      },
                      error: function (data) {
                          console.log('Error:', data);                      
                          Swal.fire("Gagal", "Data gagal melakukan reset password pengguna !", "error");
                      }                 
                    });
                }
            });
        }

        // function validasi(id){
        //     Swal.fire({
        //         title: "Perhatian !",
        //         text: "Anda yakin akan menghapus data berikut ?",
        //         icon: "warning",
        //         showCancelButton: true,
        //         confirmButtonText: "Ya, hapus !",
        //         cancelButtonText: "Tidak",
        //         reverseButtons: true
        //     }).then(function(result) {
        //         // console.log('Data:'+id);
        //         if (result.value) {
        //             $.ajax({
        //               url: "{{route('/profil/usermanagement')}}/hapus/"+id,
        //               type: "GET",
        //               dataType: 'json',
        //               success: function (data) {
        //                 location.reload();
        //                  Swal.fire("Berhasil", "Data berhasil dihapus", "success");                       
        //               },
        //               error: function (data) {
        //                   console.log('Error:', data);                      
        //                   Swal.fire("Gagal", "Data gagal dihapus !", "error");
        //               }                 
        //             });
        //         }
        //     });
        // }

</script>
@endpush

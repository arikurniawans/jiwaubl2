@extends('layouts.template')
@section('content-header')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{$title}}</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>
@endsection

@section('content')
<section class="content">
<div class="row">
	<div class="col-lg-9">

		<div class="card card-primary card-outline card-outline-tabs">
              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Data Personal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Ubah Password</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Ubah Foto Profil</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                     
                     <table class="table table-hover">
                          <tr>
                              <td style="table-layout: fixed; width: 150px;"><b>Nama Lengkap</b></td>
                              <td><b>:</b></td>
                              <td style="padding-right: 450px;">@if(Auth::user()->name == '') <i><font color="red">(Belum di isi)</font></i> @else {{Auth::user()->name}} @endif</td>
                          </tr>
                          <tr>
                              <td><b>Jenis Kelamin</b></td>
                              <td><b>:</b></td>
                              <td>@if(Auth::user()->jenkel == '') <i><font color="red">(Belum di isi)</font></i> @else @if(Auth::user()->jenkel == 'L') Laki-laki @elseif(Auth::user()->jenkel == 'P') Perempuan @endif @endif</td>
                          </tr>
                          <tr>
                              <td><b>Tanggal Lahir</b></td>
                              <td><b>:</b></td>
                              <td>@if(Auth::user()->tgl_lahir == '') <i><font color="red">(Belum di isi)</font></i> @else {{Auth::user()->tgl_lahir}} @endif</td>
                          </tr>
                          <tr>
                              <td><b>Email</b></td>
                              <td><b>:</b></td>
                              <td>@if(Auth::user()->email == '') <i><font color="red">(Belum di isi)</font></i> @else {{Auth::user()->email}} @endif</td>
                          </tr>
                          <tr>
                              <td><b>HP</b></td>
                              <td><b>:</b></td>
                              <td>@if(Auth::user()->nohp == '') <i><font color="red">(Belum di isi)</font></i> @else {{Auth::user()->nohp}} @endif</td>
                          </tr>
                          <tr>
                              <td><b>Alamat</b></td>
                              <td><b>:</b></td>
                              <td>@if(Auth::user()->alamat == '') <i><font color="red">(Belum di isi)</font></i> @else {{Auth::user()->alamat}} @endif</td>
                          </tr>
                     </table>

                  </div>
                  <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">

                  <form method="post" action="{{route('profil/changepassword')}}">
                    @csrf
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password Baru</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" name="password" autocomplete="false" placeholder="Ketikan Password Baru" oninput="check()">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Retype Pass</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="retypepassword" name="retypepassword" autocomplete="false" placeholder="Ketikan Ulang Password Baru" oninput="check()">
                      <span id="message"></span>
                    </div>
                    
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <button type="submit" class="btn btn-info">Simpan Perubahan Password</button>                   
                    </div>
                  </div>
                </form>

                  </div>
                  <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                     <form method="post" action="{{route('profil/changeprofil')}}" enctype="multipart/form-data">
                    @csrf
                     <div class="form-group">
                            <label>Foto Profil<font size="2" color="red">*) Max. upload 2.48 MB</font></label>
                            <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="gambar" id="exampleInputFile" required accept=".gif,.jpg,.jpeg,.png" onchange="readURL(this);">
                            <button type="submit" class="btn btn-info" style="margin-bottom:90px; margin-left:-270px; margin-top: 200px;">Simpan Perubahan</button>
                          </div>

                          <img id="blah" src="{{ asset('public/no-image.png') }}" class="img-thumbnail" alt="Pasfoto" width="204" height="136">
                          </div>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>

  	</div>

  	<div class="col-md-3">
            <div class="sticky-top mb-3">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Foto Pengguna</h4>
                </div>
                <div class="card-body">
                  <!-- the events -->
                  <center><img id="blah" src="@if(Auth::user()->pasfoto == 'user-photo.png') {{ asset('public/user-photo.png') }} @else {{ asset('public/storages/pasfotos') }}/{{Auth::user()->pasfoto}} @endif" class="img-thumbnail" alt="Pasfoto" width="204" height="136"></center> 
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card --
            </div>
          </div>
  </div> <!-- end row -->

    </section>

    
@endsection

@push('lib-js')
<script type="text/javascript">

function check() {
  var password = document.getElementById('password').value;
  var retype = document.getElementById('retypepassword').value;
  // console.log(password+" - "+retype);
  if(password == retype){
      document.getElementById('message').style.color = 'green';
      document.getElementById('message').innerHTML = '<b>Password sama</b>';
  }else{
      document.getElementById('message').style.color = 'red';
      document.getElementById('message').innerHTML = '<b>Password tidak sama !</b>';
  }
  // if (document.getElementById('password').value ==
  //   document.getElementById('retypepassword').value) {
  //   document.getElementById('message').style.color = 'green';
  //   document.getElementById('message').innerHTML = 'matching';
  // } else {
  //   document.getElementById('message').style.color = 'red';
  //   document.getElementById('message').innerHTML = 'not matching';
  
}

 @if(session('success'))
   Swal.fire({
    type: 'success',
    title: 'Success',
    text: '{{session('success')}}'
  }).then(function() {
    window.location = "{{route('loginpage')}}";
});
 @endif

 @if(session('successprofil'))
   Swal.fire({
    type: 'success',
    title: 'Success',
    text: '{{session('successprofil')}}'
  })
 @endif

@if($errors->any())
    
  Swal.fire({
    type: 'warning',
    title: 'Oops...',
    text: '{{ implode('', $errors->all(':message')) }}'
  });
@endif

function konfirm(){

  Swal.fire({
                title: "Perhatian !",
                text: "Proses ini akan mengarahkan anda ke laman login kembali, apakah anda yakin melakukan perubahan password ?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Ya, ubah !",
                cancelButtonText: "Tidak",
                reverseButtons: true
            }).then(function(result) {
                // console.log('Data:'+id);
                if (result.value) {
                    return true;
                }
            });

}

 function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
          reader.onload = function (e) {
              $('#blah').attr('src', e.target.result);
    }
              reader.readAsDataURL(input.files[0]);
        }
 }

</script>
@endpush
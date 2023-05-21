@extends('layouts.template')
@section('page-heading')
<div class="page-heading">
          <!-- <h3>{{$title}} PPIK</h3> -->
        </div>
@endsection

@section('page-content')
<div class="page-content">
<div class="page-title">
            <div class="row">
              <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{$title}}</h3>
                <p class="text-subtitle text-muted">
                {{$testVariable}}
                </p>
              </div>
              <div class="col-12 col-md-6 order-md-2 order-first">
                <nav
                  aria-label="breadcrumb"
                  class="breadcrumb-header float-start float-lg-end"
                >
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="{{ $breadcrumb[0]['url'] }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                      <a href="{{ $breadcrumb[1]['url'] }}">Master Inovasi (Produk)</a>
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

          @section('container')
<div class="container">
		<div class="main-body">
			<div class="row">
      <div class="col-lg-8">
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<h5 class="d-flex align-items-center mb-3">Detail Data Pengguna</h5>
                  
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <a
                          class="nav-link active"
                          id="home-tab"
                          data-bs-toggle="tab"
                          href="#home"
                          role="tab"
                          aria-controls="home"
                          aria-selected="true"
                          >Ubah Data Personal</a
                        >
                      </li>
                      <li class="nav-item" role="presentation">
                        <a
                          class="nav-link"
                          id="profile-tab"
                          data-bs-toggle="tab"
                          href="#profile"
                          role="tab"
                          aria-controls="profile"
                          aria-selected="false"
                          >Ubah Password</a
                        >
                      </li>
                      <li class="nav-item" role="presentation">
                        <a
                          class="nav-link"
                          id="contact-tab"
                          data-bs-toggle="tab"
                          href="#contact"
                          role="tab"
                          aria-controls="contact"
                          aria-selected="false"
                          >Ubah Foto Profil</a
                        >
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div
                        class="tab-pane fade show active"
                        id="home"
                        role="tabpanel"
                        aria-labelledby="home-tab"
                      >
                        <p class="my-2">
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit. Nulla ut nulla neque. Ut hendrerit nulla a
                          euismod pretium. Fusce venenatis sagittis ex efficitur
                          suscipit. In tempor mattis fringilla. Sed id tincidunt
                          orci, et volutpat ligula. Aliquam sollicitudin
                          sagittis ex, a rhoncus nisl feugiat quis. Lorem ipsum
                          dolor sit amet, consectetur adipiscing elit. Nunc
                          ultricies ligula a tempor vulputate. Suspendisse
                          pretium mollis ultrices.
                        </p>
                      </div>
                      <div
                        class="tab-pane fade"
                        id="profile"
                        role="tabpanel"
                        aria-labelledby="profile-tab"
                      >
                      <br/>
                      <form class="form form-horizontal" method="post" action="{{route('profil/changepassword')}}">
                      @csrf
                        <div class="form-body">
                          <div class="row">
                            <div class="col-md-4">
                              <label for="password-horizontal">Ketikan Password Baru</label>
                            </div>
                            <div class="col-md-8 input-group">
                              <input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="Ketikan Password Baru">
                              <button class="btn btn-primary" type="button">
                                <i class="bi bi-eye-slash" aria-hidden="true" id="togglePassword"></i>
                              </button>
                            </div>
                            <div class="col-md-4" style="margin-top:10px;">
                              <label for="password-horizontal">Ketikan Ulang Password</label>
                            </div>
                            <div class="col-md-8 input-group">
                              <input type="password" class="form-control" name="repassword" id="repassword" placeholder="Ketikan Ulang Password">
                              <button class="btn btn-primary" type="button">
                                <i class="bi bi-eye-slash" aria-hidden="true" id="togglePassword2"></i>
                              </button>
                            </div>
                            <span id="message"></span>
                            
                            <div class="col-sm-12 d-flex justify-content-end" style="margin-top:20px;">
                              <button type="submit" class="btn btn-primary me-1 mb-1" id="btnsimpan">
                                Simpan Perubahan Data
                              </button>
                              <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                Batal
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>

                      </div>
                      <div
                        class="tab-pane fade"
                        id="contact"
                        role="tabpanel"
                        aria-labelledby="contact-tab"
                      >
                      <br/>
                      <form class="form form-horizontal" method="post" action="{{route('profil/changeprofil')}}" enctype="multipart/form-data">
                      @csrf
                        <div class="form-body">
                          <div class="row">
                          <div class="form-group">
                            <label for="readonlyInput">Unggah Foto Profil <font color="red">*</font></label>
                            <input class="form-control" type="file" id="formFile" name="gambar" accept="image/png, image/jpeg, image/jpg, image/gif" required onchange="loadFile(event)">
                            </br>
                            <img id="output" src="{{ asset('public/storages/profil') }}/{{Auth::user()->pasfoto}}" class="img-thumbnail" alt="Pasfoto" width="204" height="136">
                          </div>
                            
                            <div class="col-sm-12 d-flex justify-content-end" style="margin-top:20px;">
                              <button type="submit" class="btn btn-primary me-1 mb-1" id="btnsimpan3">
                                Simpan Perubahan Data
                              </button>
                              <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                Batal
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>

                      </div>
                    </div>
                    
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
              <img src="{{ asset('public/storages/profil') }}/{{Auth::user()->pasfoto}}" class="card-img-top img-fluid" alt="singleminded">
							</div>
							<hr class="my-4">
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0 align-items-center text-center">Foto Profil Pengguna</h6>
								</li>
							</ul>
						</div>
					</div>
				</div>
        
			</div>
		</div>
    @endsection
	</div>
@endsection

@push('lib-js')

<script type="text/javascript">
const togglePassword = document.querySelector("#togglePassword");
const togglePassword2 = document.querySelector("#togglePassword2");
const password = document.querySelector("#newpassword");
const repassword = document.querySelector("#repassword");
$('#btnsimpan').prop('disabled', true);

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        togglePassword2.addEventListener("click", function () {
            // toggle the type attribute
            const type = repassword.getAttribute("type") === "password" ? "text" : "password";
            repassword.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

    $(() => {
			$('#newpassword, #repassword').on('keyup', function () {
				if ($('#newpassword').val() == "" && $('#repassword').val() == "") {
					$('#btnsimpan').prop('disabled', true);
					$('#message').hide();
				} else if ($('#newpassword').val() == $('#repassword').val()) {
					$('#btnsimpan').prop('disabled', false);
					$('#message').show().html('<b>Password Match</b>').css('color', 'green');
				} else {
					$('#btnsimpan').prop('disabled', true);
					$('#message').show().html('<b>Password do not match !</b>').css('color', 'red');
				}
			});
		});

    var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };

  @if(session('success'))
	 Swal2.fire({
	  icon: "success",
	  title: "Success",
	  text: "{{session('success')}}"
	});
 @endif

 @if(session('fail'))
	 Swal2.fire({
	  icon: "success",
	  title: "Success",
	  text: "{{session('fail')}}"
	});
 @endif

</script>
@endpush

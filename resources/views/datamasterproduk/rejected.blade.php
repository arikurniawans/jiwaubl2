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
                    <li class="breadcrumb-item active" aria-current="page">
                    {{ $breadcrumb[2]['name'] }}
                </p>
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
									<h5 class="d-flex align-items-center mb-3">Detail Data Inovasi (Produk)</h5>
                  <table class="table table-hover">
                          <tr>
                              <td style="table-layout: fixed; width: 150px;"><b>Judul Inovasi</b></td>
                              <td><b>:</b></td>
                              <td style="padding-right: 450px;">{{$produk[0]->judul}}</td>
                          </tr>
                          <tr>
                              <td><b>Deskripsi Inovasi</b></td>
                              <td><b>:</b></td>
                              <td>{{$produk[0]->deskripsi_produk}}</td>
                          </tr>
                          <tr>
                              <td><b>Harga Inovasi</b></td>
                              <td><b>:</b></td>
                              <td>{{$produk[0]->harga_produk}}</td>
                          </tr>
                          <tr>
                              <td><b>Bidang / Jenis Inovasi</b></td>
                              <td><b>:</b></td>
                              <td>{{$produk[0]->namabidang}} - (@if($produk[0]->jenis_bidang == '0') Produk @elseif($produk[0]->jenis_bidang == '1') Jasa @endif)</td>
                          </tr>
                     </table>
  
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
              <img src="{{ asset('public') }}/storages/masterinovasi/produk/{{$produk[0]->unggah_dokumen}}" class="card-img-top img-fluid" alt="singleminded">
							</div>
							<hr class="my-4">
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0 align-items-center text-center">Gambar Inovasi (Produk)</h6>
								</li>
							</ul>
						</div>
					</div>
				</div>
        
			</div>

            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Catatan Anulir</h4>
              </div>
              <div class="card-body">
                <p>Buat catatan untuk inovasi (Produk). Catatan anulir akan tampil di laman akses Inovator</p>
                <input type="hidden" name="id" id="id" value="{{$produk[0]->id_inovasi}}"/>
                <textarea class="textarea" rows="3" id="catatan" name="catatan" required></textarea>
              </div>
              
              <div class="col-md-14 d-flex justify-content-end">
                              <button type="button" class="btn btn-primary me-1 mb-1" data-bs-toggle="modal" data-bs-target="#mdcatatan">
                                Simpan Data
                              </button>
                              <a href="{{ route('masterproduk') }}" type="reset" class="btn btn-light-secondary me-1 mb-1">
                                Batal
                            </a>
                            </div>
                            <br/>
                            
            </div>

            <!-- Start modal publish -->
            <div
                        class="modal fade text-left"
                        id="mdcatatan"
                        tabindex="-1"
                        role="dialog"
                        aria-labelledby="myModalLabel4"
                        data-bs-backdrop="false"
                        aria-hidden="true"
                      >
                        <div
                          class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                          role="document"
                        >
                          <div class="modal-content">
                            <div class="modal-header" style="background: #dc3545">
                              <h4 class="modal-title" id="myModalLabel4">
                                <font color="#fff">Perhatian !</font>
                              </h4>
                              <button
                                type="button"
                                class="close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              >
                                <i data-feather="x"></i>
                              </button>
                            </div>
                            <div class="modal-body">
                            <form id="forms">
                            @csrf
                              <p>
                                Periksa kembali catatan anulir. Catatan yang telah di submit tidak dapat di rubah kembali.<br/>
                                Apakah yakin akan membuat catatan berikut ?
                              </p>
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-light-secondary"
                                data-bs-dismiss="modal"
                              >
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Tidak</span>
                              </button>
                              <button
                                type="button" id="btnsimpan"
                                class="btn btn-danger ms-1"
                                data-bs-dismiss="modal"
                              >
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Ya, simpan !</span>
                              </button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- End modal publish -->

		</div>
	</div>
@endsection
          
        </div>
@endsection

@push('lib-js')
<script type='text/javascript'> 
tinymce.init({selector:'textarea'});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#btnsimpan').on('click', function(ed) {
   var temp = tinymce.get('catatan').getContent();
   var ids = document.getElementById('id').value;
   $.ajax({
        url: "{{route('masterproduk/anulir')}}",
        method: "POST", // First change type to method here    
        data: {id: ids, catatan: temp},
        success: function(response) {
            
            Swal2.fire({
                icon: "success",
                title: "Success",
                text: "Berhasil menambahkan catatan anulir"
            }).then(function (response) {
                if (true) {
                    window.location = "{{route('masterproduk')}}";
                }
            });
        },
        error: function(error) {
            Swal2.fire({
                icon: "error",
                title: "Error",
                text: "Gagal menambahkan catatan anulir"
            }).then(function (error) {
                if (true) {
                    window.location = "{{route('masterproduk')}}";
                }
            });
        }
    });
  });

</script>
@endpush

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
                              <td><b>Catatan Perbaikan</b></td>
                              <td><b>:</b></td>
                              <td>@if($produk[0]->catatan == NULL) (Tidak ada catatan) @else {{$produk[0]->catatan}} @endif</td>
                          </tr>
                          <tr>
                              <td><b>Bidang / Jenis Inovasi</b></td>
                              <td><b>:</b></td>
                              <td>{{$produk[0]->namabidang}} - (@if($produk[0]->jenis_bidang == '0') Produk @elseif($produk[0]->jenis_bidang == '1') Jasa @endif)</td>
                          </tr>
                     </table>
                     <div class="col-sm-12 d-flex justify-content-end">
                              <a href="{{ route('masterproduk') }}" type="reset" class="btn btn-light-secondary me-1 mb-1">
                                Kembali
                            </a>
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
		</div>
	</div>
@endsection
          
        </div>
@endsection

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
                    <li class="breadcrumb-item active" aria-current="page">
                    {{ $breadcrumb[1]['name'] }}
                </p>
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

          <section class="section">
          @if(Auth::user()->isAdmin == '0')
          <a href="{{route('masterproduk')}}/create" class="btn btn-flat btn-primary float-sm-right">
              <i class="fa fa-plus" aria-hidden="true"></i> Buat {{ $breadcrumb[1]['name'] }}
          </a><br/></br>
          @endif
            <div class="card">
              <!-- <div class="card-header">Simple Datatable</div> -->
              <div class="card-body">
                <table class="table table-striped" id="table1">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Juduk Inovasi (Produk)</th>
                      @if(Auth::user()->isAdmin == '1')<th>Inovator</th>@endif
                      <th>Bidang</th>
                      <th>Harga Produk</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php $no=1; @endphp
                  @foreach($dataproduk as $data)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$data->judul}}</td>
                      @if(Auth::user()->isAdmin == '1')<td>{{$data->name}}</td>@endif
                      <td>{{$data->namabidang}}</td>
                      <td>Rp.{{ number_format($data->harga_produk,0,'','.') }}</td>
                      <td>@if($data->status_inovasi == '0')
                          <span class="badge bg-secondary">Menunggu Konfirmasi</span>
                          @elseif($data->status_inovasi == '1')
                            <span class="badge bg-success">Publish</span>
                            @elseif($data->status_inovasi == '2')
                            <span class="badge bg-warning">Perbaikan</span>
                          @elseif($data->status_inovasi == '3')
                            <span class="badge bg-danger">Ditolak</span>
                          @endif
                      </td>
                      <td>
                      @if(Auth::user()->isAdmin == '0')
                      <a href="{{route('masterproduk')}}/detail/{{ base64_encode($data->id_inovasi) }}" class="btn btn-sm btn-primary">Detail</a>
                      @if($data->status_inovasi == 2)<a href="{{route('masterproduk')}}/edit/{{ base64_encode($data->id_inovasi) }}" class="btn btn-sm btn-info">Edit</a>@endif
                      @if($data->status_inovasi == 3)<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#backdrop{{$data->id_inovasi}}">Hapus</a>@endif
                      @elseif(Auth::user()->isAdmin == '1')
                      <a href="{{route('masterproduk')}}/detail/{{ base64_encode($data->id_inovasi) }}" class="btn btn-sm btn-primary">Detail</a>
                      <a href="javascript:void(0);" class="btn @if($data->status_inovasi == 1 || $data->status_inovasi == 3) disabled @endif btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#mdpublish{{$data->id_inovasi}}">Publish</a>
                      <a href="{{route('masterproduk')}}/revision/{{ base64_encode($data->id_inovasi) }}" class="btn @if($data->status_inovasi == 1 || $data->status_inovasi == 3) disabled @endif btn-sm btn-warning">Perbaikan</a>
                      <a href="{{route('masterproduk')}}/rejected/{{ base64_encode($data->id_inovasi) }}" class="btn @if($data->status_inovasi == 1 || $data->status_inovasi == 3) disabled @endif btn-sm btn-danger">Tolak</a>
                      @endif
                      </td>                      
                    </tr>

                    <!-- Start modal hapus -->
                    <div
                        class="modal fade text-left"
                        id="backdrop{{$data->id_inovasi}}"
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
                            <div class="modal-header" style="background: #dc3545;">
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
                            <form method="post" action="{{route('masterproduk/destroy')}}" enctype="multipart/form-data">
                            @csrf
                              <p>
                                Apakah yakin akan menghapus data berikut ?
                                <input type="hidden" name="id" value="{{$data->id_inovasi}}"/>
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
                                type="submit"
                                class="btn btn-danger ms-1"
                                data-bs-dismiss="modal"
                              >
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Ya, hapus !</span>
                              </button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- End modal hapus -->

                    <!-- Start modal publish -->
                    <div
                        class="modal fade text-left"
                        id="mdpublish{{$data->id_inovasi}}"
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
                            <div class="modal-header" style="background: #198754;">
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
                            <form method="post" action="{{route('masterproduk/publish')}}" enctype="multipart/form-data">
                            @csrf
                              <p>
                                Data inovasi (Produk) yang telah di publish akan tayang pada laman E-commerce JIWAUBL. Pastikan
                                anda memeriksa kembali kelengkapan persyaratan inovasi yang akan di publish.<br/>
                                Apakah yakin akan melakukan publish data berikut ?                              
                                <input type="hidden" name="id" value="{{$data->id_inovasi}}"/>
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
                                type="submit"
                                class="btn btn-success ms-1"
                                data-bs-dismiss="modal"
                              >
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Ya, publish !</span>
                              </button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- End modal publish -->

                  @endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>
          </section>
          
        </div>
@endsection

@push('lib-js')

<script type="text/javascript">

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

 @if(session('warning'))
	 Swal2.fire({
	  icon: "warning",
	  title: "Perhatian !",
	  text: "{{session('warning')}}"
	});
 @endif


</script>
@endpush

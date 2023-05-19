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
          <a href="{{route('masterjasa')}}/create" class="btn btn-flat btn-primary float-sm-right">
              <i class="fa fa-plus" aria-hidden="true"></i> Buat {{ $breadcrumb[1]['name'] }}
          </a><br/></br>
            <div class="card">
              <!-- <div class="card-header">Simple Datatable</div> -->
              <div class="card-body">
                <table class="table table-striped" id="table1">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Juduk Inovasi (jasa)</th>
                      <th>Bidang</th>
                      <th>Harga jasa</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php $no=1; @endphp
                  @foreach($datajasa as $data)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$data->judul}}</td>
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
                        -
                      </td>                      
                    </tr>
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


</script>
@endpush

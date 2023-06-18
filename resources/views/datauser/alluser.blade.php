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
                         
            <div class="card">
              <!-- <div class="card-header">Simple Datatable</div> -->
              <div class="card-body">
                <table class="table table-striped" id="table1">
                  <thead>
                    <tr>
                      <th>#</th>
                      <!-- <th>Pasfoto</th> -->
                      <th>Nama Inovator</th>
                      <th>Email</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php $no=1; @endphp
                  @foreach($datauser as $data)
                  <tr>
                    <td>{{$no++}}</td>
                    <!-- <td><img src="{{ asset('public/storages/profil') }}/{{$data->pasfoto}}" alt="Admin" class="rounded-circle p-1 bg-primary" width="50"></td> -->
                    <td><img src="{{ asset('public/storages/profil') }}/{{$data->pasfoto}}" alt="Admin" class="rounded-circle p-1 bg-primary" width="50">&nbsp;&nbsp;{{$data->name}}</td>
                    <td>{{$data->email}}</td>
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
$(function(){
    $("#tgl1").datepicker({ dateFormat: 'yy-mm-dd' });

    $("#tgl2").datepicker({ dateFormat: 'yy-mm-dd' });
});
</script>
@endpush

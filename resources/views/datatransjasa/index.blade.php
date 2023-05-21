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
          <div class="row">
                        <div class="col-md-3 mb-1">
                          <div class="input-group mb-3">                            
                            <input type="text" class="form-control" id="tgl1" placeholder="Filter Tanggal Pertama" aria-label="Example text with button addon" aria-describedby="button-addon1">
                            <button class="btn btn-primary" type="button" id="button-addon1">
                                <i class="icon dripicons dripicons-calendar" aria-hidden="true"></i>
                            </button>
                          </div>
                        </div>
                        
                        <div class="col-md-3 mb-1">
                          <div class="input-group mb-3">
                          <input type="text" class="form-control" id="tgl2" placeholder="Filter Tanggal Kedua" aria-label="Example text with button addon" aria-describedby="button-addon1">
                            <button class="btn btn-primary" type="button" id="button-addon1">
                                <i class="icon dripicons dripicons-calendar" aria-hidden="true"></i>
                            </button>
                          </div>
                        </div>

                        <div class="col-md-3 mb-1">
                          <div class="input-group mb-3">
                                <button class="btn btn-primary" type="button" id="button-addon1">
                                    <i class="icon dripicons dripicons-experiment" aria-hidden="true"></i> Filter Data
                                </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-success" type="button" id="button-addon1">
                                    <i class="icon dripicons dripicons-print" aria-hidden="true"></i> Print Data
                                </button>
                          </div>
                        </div>

                      </div>
                          
            <div class="card">
              <!-- <div class="card-header">Simple Datatable</div> -->
              <div class="card-body">
                <table class="table table-striped" id="table1">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Juduk Inovasi (jasa)</th>
                      <th>Bidang</th>
                      <th>Harga Jasa</th>
                      <th>QTY</th>
                      <th>Total</th>
                      <th>Tanggal Transaksi</th>
                    </tr>
                  </thead>
                  <tbody>

                    
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

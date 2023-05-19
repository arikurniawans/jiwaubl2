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
              <li class="breadcrumb-item active"><a href="{{route($breadcrumb[1]['url'])}}">{{ $breadcrumb[1]['name'] }}</a></li>
              <li class="breadcrumb-item active">{{ $breadcrumb[2]['name'] }}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>
@endsection

@section('content')
<section class="content">
		
	<div class="col-lg-8">
      <!-- Default box -->
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Tambah {{$title}}</h3>

          <div class="card-tools">
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button> -->
          </div>
        </div>

        <form method="post" action="{{route('profil/update')}}">
        <div class="card-body">
          @csrf
          	
      			<div class="form-group">
      				<label for="exampleInputEmail1">Nama Lengkap</label>
      				<input type="hidden" name="id" value="{{$datauser[0]->id}}"/>
      				<input type="text" class="form-control" name="nama" required id="exampleInputEmail1" placeholder="Ketikan Nama Operator" value="{{$datauser[0]->name}}">
      			</div>
      			<div class="form-group">
      				<label for="exampleInputEmail1">Jenis Kelamin</label>
      				<select class="form-control" name="jenkel" id="jenkel" style="width: 100%;" required>
	    				<option selected="selected" value="{{$datauser[0]->jenkel}}">@if($datauser[0]->jenkel == 'L') Laki-laki @else Perempuan @endif</option>    				
	    				<option value="L">Laki-laki</option>    				
	    				<option value="P">Perempuan</option>    				
	    			</select>
      			</div>
      			<div class="form-group">
                  <label>Tanggal Lahir</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest" required>
                        <input type="text" class="form-control" id="date" name="date" value="{{$datauser[0]->tgl_lahir}}"/>
                        <div class="input-group-append">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
      				<label for="exampleInputEmail1">Email Operator</label>
      				<input type="email" class="form-control" name="email" required id="exampleInputEmail1" placeholder="Ketikan Email Operator" value="{{$datauser[0]->email}}">
      			</div>
      			<div class="form-group">
      				<label for="exampleInputEmail1">No. HP</label>
      				<input type="text" class="form-control" name="nohp" required id="exampleInputEmail1" placeholder="Ketikan No. Handphone" value="{{$datauser[0]->nohp}}">
      			</div>
      			<!-- <div class="form-group">
      				<label for="exampleInputEmail1">Hak Akses</label>
      				<select class="form-control select2" name="hakakses" style="width: 100%;" required>
    					<option selected="selected" value="{{$datauser[0]->idhak}}">{{$datauser[0]->jenis_akses}}</option>
    					@foreach($dataakses as $akses)
    					<option value="{{$akses->idhak}}">{{$akses->jenis_akses}}</option>
    					@endforeach
    				</select>
      			</div> -->
      			<div class="form-group">
      				<label>Alamat Pengguna</label>
      				<textarea class="form-control" name="alamat" required rows="3" placeholder="Ketikan Alamat Operator">{{$datauser[0]->alamat}}</textarea>
      			</div>
      			<hr/>
      			<font color ="red" style="font-size: 10pt;">*) Password di generate otomatis oleh sistem <b>(12345678)</b>
          

        </div>  
        <div class="card-footer">
			<button type="submit" class="btn btn-primary">Simpan Perubahan Data</button> &nbsp;&nbsp;
			<a href="{{route($breadcrumb[1]['url'])}}" class="btn btn-secondary">Kembali</a>
		</div>   
		</form>         
      </div>
      <!-- /.card -->
  </div>

    </section>

    
@endsection

@push('lib-js')
<script type="text/javascript">
 @if(session('fail'))
	 Swal.fire({
	  type: 'error',
	  title: 'Oops...',
	  text: '{{session('fail')}} !'
	});
 @endif

  @if($errors->any())
	 Swal.fire({
	  type: 'error',
	  title: 'Oops...',
	  text: '{{ implode('', $errors->all(':message')) }} !'
	});
 @endif
 
</script>
@endpush
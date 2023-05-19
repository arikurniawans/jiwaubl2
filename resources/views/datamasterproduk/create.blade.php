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

          <section class="section">
          <div class="card">
              <div class="card-header">
                <h4 class="card-title">Master Data Inovasi (Produk)</h4>
              </div>
              
              <div class="card-body">
              <form method="post" action="{{route('masterproduk/store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="basicInput">Judul Inovasi <font color="red">*</font></label>
                      <input
                        type="text"
                        class="form-control"
                        id="basicInput"
                        name="judul"
                        required
                        placeholder="Ketikan Judul Inovasi"
                      />
                    </div>

                    <div class="form-group">
                      <label for="helpInputTop">Pilih Bidang Inovasi <font color="red">*</font></label>
                      <div class="form-group">
                            <select class="choices form-select" name="bidang" required>
                              @foreach($bidang as $row)
                                <option value="{{$row->idbidang}}">{{$row->namabidang}}</option>
                              @endforeach
                            </select>
                          </div>
                    </div>

                    <div class="form-group">
                      <label for="helperText">Deksripsi Inovasi (Produk) <font color="red">*</font></label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi" required></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="disabledInput">Harga Inovasi (Produk) <font color="red">*</font></label>
                      <input
                        type="text"
                        class="form-control"
                        name="harga"
                        id="harga"
                        placeholder="Ketikan Harga Produk (Inovasi)"
                      />
                    </div>
                    <div class="form-group">
                      <label for="readonlyInput">Unggah Foto Inovasi (Produk) <font color="red">*</font></label>
                      <input class="form-control" type="file" id="formFile" name="gambar" accept="image/png, image/jpeg, image/jpg, image/gif" onchange="loadFile(event)" required>
                      </br>
                      <img id="output" src="{{ asset('public/no-image.png') }}" class="img-thumbnail" alt="Pasfoto" width="204" height="136">
                      
                    </div>
                    
                  </div>

                  <div class="col-sm-12 d-flex justify-content-end">
                              <button type="submit" class="btn btn-primary me-1 mb-1">
                                Simpan Data
                              </button>
                              <a href="{{ route('masterproduk') }}" type="reset" class="btn btn-light-secondary me-1 mb-1">
                                Batal
                            </a>
                            </div>
                  
                </div>
                </form>
              </div>
              
            </div>
          </section>
          
        </div>
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

var hrg = document.getElementById('harga');
hrg.addEventListener('keyup', function(e)
{
	hrg.value = formatRupiah(this.value);  
});

/* Fungsi */
	function formatRupiah(angka, prefix)
	{
		var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split	= number_string.split(','),
			sisa 	= split[0].length % 3,
			rupiah 	= split[0].substr(0, sisa),
			ribuan 	= split[0].substr(sisa).match(/\d{3}/gi);
			
		if (ribuan) {
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}
		
		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
	}

  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };

</script>
@endpush
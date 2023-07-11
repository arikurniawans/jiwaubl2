@extends('layouts.template')
@section('page-heading')
<div class="page-heading">
          <h3>{{$title}} JIWAUBL</h3>
        </div>
@endsection

@section('container')
<div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="{{ asset('public/storages/profil') }}/{{Auth::user()->pasfoto}}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4>{{Auth::user()->name}}</h4>
									<!-- <p class="text-secondary mb-1">Full Stack Developer</p>
									<p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
									<!-- <button class="btn btn-primary">Follow</button> -->
									<button class="btn btn-outline-primary" onclick="shareProfile()">Share Profile Inovator</button>

<script>
  function shareProfile() {
    // URL profil inovator
    var profileURL = "https://example.com/profile-inovator";

    // Teks yang akan dibagikan
    var shareText = "Saya ingin berbagi profil inovator yang menarik!";



    // Membuat URL berbagi untuk WhatsApp
    var whatsappShareURL = "https://api.whatsapp.com/send?text=" + encodeURIComponent(shareText + " " + profileURL);

 
    window.open(whatsappShareURL, "_blank");
  }
</script>

								</div>
							</div>
							<hr class="my-4">
							<ul class="list-group list-group-flush">
								<!-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
									<span class="text-secondary">https://bootdey.com</span>
								</li> -->
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><i class="fa fa-envelope-o"></i> Email</h6>
									<span class="text-secondary">{{Auth::user()->email}}</span>
								</li>
								<!-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-whatsapp me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
									<span class="text-secondary">@bootdey</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
									<span class="text-secondary">bootdey</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
									<span class="text-secondary">bootdey</span>
								</li> -->
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<h5 class="d-flex align-items-center mb-3"><i class="fa fa-clock-o m-r-5" aria-hidden="true"></i> Tahapan Submit Inovasi</h5>
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
										>Produk</a
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
										>Jasa</a
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
									<br/>
									<div class="timeline">
									@if($datatahapan->isEmpty())
										<center><img src="{{ asset('public/') }}/nodata.png" class="img-rounded" alt="No Data" width="200px" height="200px"><br>
												<br/>Belum ada dokumen pengajuan
										</center>
										@else
										
										@foreach($datatahapan as $data)

										@if($data->status_step == '0')
											<div class="timeline__row">
												<div class="timeline__row_icon">
													<div class="timeline-icon primary">
														<i class="fa fa-paper-plane"></i>
													</div>
												</div>
												<div class="timeline__row_content">
													<span class="badge bg-primary">@if(date('d/m/Y', strtotime($data->tgl)) == date('d/m/Y')) Hari  Ini @else {{date('d/m/Y', strtotime($data->nextdate))}} @endif</span>
													<div class="timeline__row_content_desc">
														<h5>Proses Pemeriksaan Dokumen Inovasi Produk</h5>
														<p>Terima kasih telah melakukan pengajuan komersialisasi inovasi produk. Mohon menunggu, saat ini tim reviewer JIWAUBL sedang meninjau kelengkapan dokumen pengajuan anda.</p>
														<a href="{{route('masterproduk')}}/detail/{{ base64_encode($data->idinovasi) }}" class="btn btn-outline-primary rounded-pill">Lihat Detail Pengajuan</a>
													</div>
												</div>
											</div>

											<div																																																																																																																																												 class="timeline__row">
												<div class="timeline__row_icon">
													<div class="timeline-icon secondary" style="border: solid #ced4da; color: #ced4da;">
														<i class="fa fa-lock"></i>
													</div>
												</div>
												<div class="timeline__row_content">												
													<div class="timeline__row_content_desc" style="background-color: #e4eaf0;">
														<p>Silakan selesaikan proses sebelumnya terlebih dahulu.</p>
													</div>
												</div>
											</div>
											
										@elseif($data->status_step == '1')
											<div class="timeline__row">
												<div class="timeline__row_icon">
													<div class="timeline-icon success">
														<i class="fa fa-check"></i>
													</div>
												</div>
												<div class="timeline__row_content">
													<span class="badge bg-success">@if(date('d/m/Y', strtotime($data->tgl)) == date('d/m/Y')) Hari  Ini @else {{date('d/m/Y', strtotime($data->nextdate))}} @endif</span>
													<div class="timeline__row_content_desc" style="border: solid #5bbf81; background-color: #d2ffe8;">
														<h5>Inovasi Produk Diterima</h5>
														<p>Inovasi produk anda telah berhasil di verifikasi oleh tim JIWAUBL, silahkan cek pada laman E-commerce JIWAUBL.</p>
														<a href="{{route('masterproduk')}}/detail/{{ base64_encode($data->idinovasi) }}" class="btn btn-outline-success rounded-pill">Lihat Detail Pengajuan</a>
													</div>
												</div>
											</div>
										@elseif($data->status_step == '2')
											<div class="timeline__row">
												<div class="timeline__row_icon">
													<div class="timeline-icon warning">
														<i class="fa fa-exclamation"></i>
													</div>
												</div>
												<div class="timeline__row_content">
													<span class="badge bg-warning">@if(date('d/m/Y', strtotime($data->tgl)) == date('d/m/Y')) Hari  Ini @else {{date('d/m/Y', strtotime($data->tgl))}} @endif</span>
													<div class="timeline__row_content_desc" style="border: solid #ffd966; background-color: #fffcc9;">
														<h5>Perbaikan Dokumen Inovasi Produk</h5>
														<p>Silahkan perbaiki dokumen pengajuan anda sesuai catatan yang tertera.</p>
														<a href="{{route('masterproduk')}}/detail/{{ base64_encode($data->idinovasi) }}" class="btn btn-outline-warning rounded-pill">Lihat Detail Pengajuan</a>
														<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#mdrevision{{$data->idinovasi}}" class="btn btn-outline-warning rounded-pill">Lihat Catatan</a>
													</div>
												</div>
											</div>

											<div class="timeline__row">
												<div class="timeline__row_icon">
													<div class="timeline-icon secondary" style="border: solid #ced4da; color: #ced4da;">
														<i class="fa fa-lock"></i>
													</div>
												</div>
												<div class="timeline__row_content">												
													<div class="timeline__row_content_desc" style="background-color: #e4eaf0;">
														<p>Silakan selesaikan proses sebelumnya terlebih dahulu.</p>
													</div>
												</div>
											</div>

										@elseif($data->status_step == '3')
											<div class="timeline__row">
												<div class="timeline__row_icon">
													<div class="timeline-icon danger">
														<i class="fa fa-times"></i>
													</div>
												</div>
												<div class="timeline__row_content">
													<span class="badge bg-danger">@if(date('d/m/Y', strtotime($data->tgl)) == date('d/m/Y')) Hari  Ini @else {{date('d/m/Y', strtotime($data->tgl))}} @endif</span>
													<div class="timeline__row_content_desc" style="border: solid #e06666; background-color: #ffdede;">
														<h5 style="text-color: #f44336;">Pengajuan Dokumen Inovasi Produk Ditolak</h5>
														<p>Mohon maaf dokumen pengajuan inovasi produk anda ditolak. Silahkan lihat catatan untuk melakukan pengajuan kembali.</p>
														<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#mdreject{{$data->idinovasi}}" class="btn btn-outline-danger rounded-pill">Lihat Catatan</a>
													</div>
												</div>
											</div>	
										@endif
										
										
										<!-- Start Modal Revision -->
										<div
											class="modal fade text-left"
											id="mdrevision{{$data->idinovasi}}"
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
												<div class="modal-header" style="background: #ffc107">
												<h4 class="modal-title" id="myModalLabel4">
													<font color="#fff">Catatan Perbaikan</font>
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
												
												<p>
													{!! html_entity_decode($data->catatan) !!}
												</p>
												</div>
												<div class="modal-footer">
												<button
													type="button"
													class="btn btn-light-secondary"
													data-bs-dismiss="modal"
												>
													<i class="bx bx-x d-block d-sm-none"></i>
													<span class="d-none d-sm-block">Tutup</span>
												</button>
												</div>
											</div>
											</div>
										</div>
										<!-- End Modal Revision -->

										<!-- Start modal rejected -->
										<div
											class="modal fade text-left"
											id="mdreject{{$data->idinovasi}}"
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
													<font color="#fff">Catatan Anulir</font>
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
												<p>
												{!! html_entity_decode($data->catatan) !!}
												</p>
												</div>
												<div class="modal-footer">
												<button
													type="button"
													class="btn btn-light-secondary"
													data-bs-dismiss="modal"
												>
													<i class="bx bx-x d-block d-sm-none"></i>
													<span class="d-none d-sm-block">Tutup</span>
												</button>
												</div>
											</div>
											</div>
										</div>
										<!-- End modal hapus -->
											
											<!-- <div class="timeline__row">
												<div class="timeline__row_icon">
													<div class="timeline-icon danger">
														<i class="fa fa-times"></i>
													</div>
												</div>
												<div class="timeline__row_content">
													<span class="badge bg-primary">Dec 12, 2019</span>
													<div class="timeline__row_content_desc">
														<h5>Lorem Ipsum Failed</h5>
														<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat fugit dolorem explicabo necessitatibus, vel reprehenderit.</p>
														<a href="#!">View more</a>
													</div>
												</div>
											</div> -->
											@endforeach
										@endif
									</div>

									
									</div>
									<div
										class="tab-pane fade"
										id="profile"
										role="tabpanel"
										aria-labelledby="profile-tab"
									>
										
									<br/>
									<div class="timeline">
										
									@if($datatahapan2->isEmpty())
										<center><img src="{{ asset('public/') }}/nodata.png" class="img-rounded" alt="No Data" width="200px" height="200px"><br>
												<br/>Belum ada dokumen pengajuan
										</center>
										@else
										
										@foreach($datatahapan2 as $data2)

										@if($data2->status_step == '0')
											<div class="timeline__row">
												<div class="timeline__row_icon">
													<div class="timeline-icon primary">
														<i class="fa fa-paper-plane"></i>
													</div>
												</div>
												<div class="timeline__row_content">
													<span class="badge bg-primary">@if(date('d/m/Y', strtotime($data2->tgl)) == date('d/m/Y')) Hari  Ini @else {{date('d/m/Y', strtotime($data2->nextdate))}} @endif</span>
													<div class="timeline__row_content_desc">
														<h5>Proses Pemeriksaan Dokumen Inovasi Jasa</h5>
														<p>Terima kasih telah melakukan pengajuan komersialisasi inovasi jasa. Mohon menunggu, saat ini tim reviewer JIWAUBL sedang meninjau kelengkapan dokumen pengajuan anda.</p>
														<a href="{{route('masterjasa')}}/detail/{{ base64_encode($data2->idinovasi) }}" class="btn btn-outline-primary rounded-pill">Lihat Detail Pengajuan</a>
													</div>
												</div>
											</div>

											<div																																																																																																																																												 class="timeline__row">
												<div class="timeline__row_icon">
													<div class="timeline-icon secondary" style="border: solid #ced4da; color: #ced4da;">
														<i class="fa fa-lock"></i>
													</div>
												</div>
												<div class="timeline__row_content">												
													<div class="timeline__row_content_desc" style="background-color: #e4eaf0;">
														<p>Silakan selesaikan proses sebelumnya terlebih dahulu.</p>
													</div>
												</div>
											</div>
											
										@elseif($data2->status_step == '1')
											<div class="timeline__row">
												<div class="timeline__row_icon">
													<div class="timeline-icon success">
														<i class="fa fa-check"></i>
													</div>
												</div>
												<div class="timeline__row_content">
													<span class="badge bg-success">@if(date('d/m/Y', strtotime($data2->tgl)) == date('d/m/Y')) Hari  Ini @else {{date('d/m/Y', strtotime($data2->nextdate))}} @endif</span>
													<div class="timeline__row_content_desc" style="border: solid #5bbf81; background-color: #d2ffe8;">
														<h5>Inovasi Jasa Diterima</h5>
														<p>Inovasi jasa anda telah berhasil di verifikasi oleh tim JIWAUBL, silahkan cek pada laman E-commerce JIWAUBL.</p>
														<a href="{{route('masterjasa')}}/detail/{{ base64_encode($data2->idinovasi) }}" class="btn btn-outline-success rounded-pill">Lihat Detail Pengajuan</a>
													</div>
												</div>
											</div>
										@elseif($data2->status_step == '2')
											<div class="timeline__row">
												<div class="timeline__row_icon">
													<div class="timeline-icon warning">
														<i class="fa fa-exclamation"></i>
													</div>
												</div>
												<div class="timeline__row_content">
													<span class="badge bg-warning">@if(date('d/m/Y', strtotime($data2->tgl)) == date('d/m/Y')) Hari  Ini @else {{date('d/m/Y', strtotime($data2->tgl))}} @endif</span>
													<div class="timeline__row_content_desc" style="border: solid #ffd966; background-color: #fffcc9;">
														<h5>Perbaikan Dokumen Inovasi Jasa</h5>
														<p>Silahkan perbaiki dokumen pengajuan anda sesuai catatan yang tertera.</p>
														<a href="{{route('masterjasa')}}/detail/{{ base64_encode($data2->idinovasi) }}" class="btn btn-outline-warning rounded-pill">Lihat Detail Pengajuan</a>
														<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#mdrevision2{{$data2->idinovasi}}" class="btn btn-outline-warning rounded-pill">Lihat Catatan</a>
													</div>
												</div>
											</div>

											<div class="timeline__row">
												<div class="timeline__row_icon">
													<div class="timeline-icon secondary" style="border: solid #ced4da; color: #ced4da;">
														<i class="fa fa-lock"></i>
													</div>
												</div>
												<div class="timeline__row_content">												
													<div class="timeline__row_content_desc" style="background-color: #e4eaf0;">
														<p>Silakan selesaikan proses sebelumnya terlebih dahulu.</p>
													</div>
												</div>
											</div>

										@elseif($data2->status_step == '3')
											<div class="timeline__row">
												<div class="timeline__row_icon">
													<div class="timeline-icon danger">
														<i class="fa fa-times"></i>
													</div>
												</div>
												<div class="timeline__row_content">
													<span class="badge bg-danger">@if(date('d/m/Y', strtotime($data2->tgl)) == date('d/m/Y')) Hari  Ini @else {{date('d/m/Y', strtotime($data2->tgl))}} @endif</span>
													<div class="timeline__row_content_desc" style="border: solid #e06666; background-color: #ffdede;">
														<h5 style="text-color: #f44336;">Pengajuan Dokumen Inovasi Jasa Ditolak</h5>
														<p>Mohon maaf dokumen pengajuan inovasi jasa anda ditolak. Silahkan lihat catatan untuk melakukan pengajuan kembali.</p>
														<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#mdreject2{{$data2->idinovasi}}" class="btn btn-outline-danger rounded-pill">Lihat Catatan</a>
													</div>
												</div>
											</div>	
										@endif
										
										
										<!-- Start Modal Revision -->
										<div
											class="modal fade text-left"
											id="mdrevision2{{$data2->idinovasi}}"
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
												<div class="modal-header" style="background: #ffc107">
												<h4 class="modal-title" id="myModalLabel4">
													<font color="#fff">Catatan Perbaikan</font>
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
												
												<p>
													{!! html_entity_decode($data2->catatan) !!}
												</p>
												</div>
												<div class="modal-footer">
												<button
													type="button"
													class="btn btn-light-secondary"
													data-bs-dismiss="modal"
												>
													<i class="bx bx-x d-block d-sm-none"></i>
													<span class="d-none d-sm-block">Tutup</span>
												</button>
												</div>
											</div>
											</div>
										</div>
										<!-- End Modal Revision -->

										<!-- Start modal rejected -->
										<div
											class="modal fade text-left"
											id="mdreject2{{$data2->idinovasi}}"
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
													<font color="#fff">Catatan Anulir</font>
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
												<p>
												{!! html_entity_decode($data2->catatan) !!}
												</p>
												</div>
												<div class="modal-footer">
												<button
													type="button"
													class="btn btn-light-secondary"
													data-bs-dismiss="modal"
												>
													<i class="bx bx-x d-block d-sm-none"></i>
													<span class="d-none d-sm-block">Tutup</span>
												</button>
												</div>
											</div>
											</div>
										</div>
										<!-- End modal hapus -->
											
											<!-- <div class="timeline__row">
												<div class="timeline__row_icon">
													<div class="timeline-icon danger">
														<i class="fa fa-times"></i>
													</div>
												</div>
												<div class="timeline__row_content">
													<span class="badge bg-primary">Dec 12, 2019</span>
													<div class="timeline__row_content_desc">
														<h5>Lorem Ipsum Failed</h5>
														<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat fugit dolorem explicabo necessitatibus, vel reprehenderit.</p>
														<a href="#!">View more</a>
													</div>
												</div>
											</div> -->
											@endforeach
										@endif
										
									</div>
									
									</div>
									</div>
									
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('lib-js')
<script>
    // var chart; 
    //     $(document).ready(function() {
    //           chart = new Highcharts.Chart(
    //           {
                  
    //              chart: {
    //                 renderTo: 'mygraph',
    //                 plotBackgroundColor: null,
    //                 plotBorderWidth: null,
    //                 plotShadow: false
    //              },   
    //              title: {
    //                 text: 'Data Transaksi'
    //              },
    //              subtitle: {
    //                   text: 'Periode Bulan : @php echo date("M Y") @endphp'
    //             },
    //              tooltip: {
    //                 formatter: function() {
    //                     return '<b>'+
    //                     this.point.name +'</b>: '+ this.point.y +' Transaksi';
    //                 }
    //              },
    //              plotOptions: {
    //                 pie: {
    //                     allowPointSelect: true,
    //                     cursor: 'pointer',
    //                     dataLabels: {
    //                         enabled: true,
    //                         color: '#000000',
    //                         connectorColor: 'green',
    //                         formatter: function() 
    //                         {
    //                             return '<b>' + this.point.name + '</b>: ' + this.point.y +' Transaksi';
    //                         }
    //                     }
    //                 }
    //              },
    //                 series: [{
    //                 type: 'pie',
    //                 name: '',
    //                 data: [
    //                         @php $count=1; @endphp
    //                         
    //                 ]
    //             }]
    //           });
    //     }); 
        // Highcharts.numberFormat(this.point.y, 2)
</script>
@endpush
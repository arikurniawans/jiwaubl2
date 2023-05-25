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
									<h4>John Doe</h4>
									<p class="text-secondary mb-1">Full Stack Developer</p>
									<p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
									<!-- <button class="btn btn-primary">Follow</button> -->
									<button class="btn btn-outline-primary">Share Profile Inovator</button>
								</div>
							</div>
							<hr class="my-4">
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
									<span class="text-secondary">https://bootdey.com</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
									<span class="text-secondary">bootdey</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
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
								</li>
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
									<div class="timeline">
								<div class="timeline__row">
									<div class="timeline__row_icon">
										<div class="timeline-icon success">
											<i class="fa fa-check"></i>
										</div>
									</div>
									<div class="timeline__row_content">
										<span class="badge bg-primary">Today</span>
										<div class="timeline__row_content_desc">
											<h5>Lorem Ipsum Successful</h5>
											<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat fugit dolorem explicabo necessitatibus, vel reprehenderit.</p>
											<a href="#!">View more</a>
										</div>
									</div>
								</div>
								<div class="timeline__row">
									<div class="timeline__row_icon">
										<div class="timeline-icon warning">
											<i class="fa fa-exclamation"></i>
										</div>
									</div>
									<div class="timeline__row_content">
										<span class="badge bg-primary">Jan 25, 2020</span>
										<div class="timeline__row_content_desc">
											<h5>Lorem Ipsum Not Recommended</h5>
											<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat fugit dolorem explicabo necessitatibus, vel reprehenderit.</p>
											<a href="#!">View more</a>
										</div>
									</div>
								</div>
								<div class="timeline__row">
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
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
									<h5 class="d-flex align-items-center mb-3">Detail Data Pengguna</h5>
                  
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
                          >Ubah Data Personal</a
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
                          >Ubah Password</a
                        >
                      </li>
                      <li class="nav-item" role="presentation">
                        <a
                          class="nav-link"
                          id="contact-tab"
                          data-bs-toggle="tab"
                          href="#contact"
                          role="tab"
                          aria-controls="contact"
                          aria-selected="false"
                          >Ubah Foto Profil</a
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
                        <p class="my-2">
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit. Nulla ut nulla neque. Ut hendrerit nulla a
                          euismod pretium. Fusce venenatis sagittis ex efficitur
                          suscipit. In tempor mattis fringilla. Sed id tincidunt
                          orci, et volutpat ligula. Aliquam sollicitudin
                          sagittis ex, a rhoncus nisl feugiat quis. Lorem ipsum
                          dolor sit amet, consectetur adipiscing elit. Nunc
                          ultricies ligula a tempor vulputate. Suspendisse
                          pretium mollis ultrices.
                        </p>
                      </div>
                      <div
                        class="tab-pane fade"
                        id="profile"
                        role="tabpanel"
                        aria-labelledby="profile-tab"
                      >
                        Integer interdum diam eleifend metus lacinia, quis
                        gravida eros mollis. Fusce non sapien sit amet magna
                        dapibus ultrices. Morbi tincidunt magna ex, eget
                        faucibus sapien bibendum non. Duis a mauris ex. Ut
                        finibus risus sed massa mattis porta. Aliquam sagittis
                        massa et purus efficitur ultricies. Integer pretium
                        dolor at sapien laoreet ultricies. Fusce congue et lorem
                        id convallis. Nulla volutpat tellus nec molestie
                        finibus. In nec odio tincidunt eros finibus ullamcorper.
                        Ut sodales, dui nec posuere finibus, nisl sem aliquam
                        metus, eu accumsan lacus felis at odio. Sed lacus quam,
                        convallis quis condimentum ut, accumsan congue massa.
                        Pellentesque et quam vel massa pretium ullamcorper vitae
                        eu tortor.
                      </div>
                      <div
                        class="tab-pane fade"
                        id="contact"
                        role="tabpanel"
                        aria-labelledby="contact-tab"
                      >
                        <p class="mt-2">
                          Duis ultrices purus non eros fermentum hendrerit.
                          Aenean ornare interdum viverra. Sed ut odio velit.
                          Aenean eu diam dictum nibh rhoncus mattis quis ac
                          risus. Vivamus eu congue ipsum. Maecenas id
                          sollicitudin ex. Cras in ex vestibulum, posuere orci
                          at, sollicitudin purus. Morbi mollis elementum enim,
                          in cursus sem placerat ut.
                        </p>
                      </div>
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
              <img src="" class="card-img-top img-fluid" alt="singleminded">
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

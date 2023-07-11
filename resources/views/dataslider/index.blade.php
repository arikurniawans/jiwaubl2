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

          <!-- Start Card -->
          <div class="col-md-6 col-sm-12">
                <div class="card">
                  <div class="card-content">
                    <img
                      class="card-img-top img-fluid"
                      src="{{ asset('public/storages/slider') }}/{{$dataslider1[0]->gambar}}"
                      alt="Card image cap"
                      style="height: 20rem"
                    />
                    <div class="card-body">
                      <h4 class="card-title">{{$dataslider1[0]->judul}}</h4>
                      <p class="card-text">
                      {{$dataslider1[0]->deskripsi}}
                      </p>
                      <p class="card-text">
                        <small class="text-muted"><i class="fa fa-calendar" aria-hidden="true"></i> Terakhir Diubah : {{$dataslider1[0]->updated_at}}</small>
                        <br/>
                        <small class="text-muted"><i class="fa fa-check-square-o" aria-hidden="true"></i> Status :</small> @if($dataslider1[0]->activate == 'T') <span class="badge bg-success">Aktif</span> @elseif($dataslider1[0]->activate == 'F') <span class="badge bg-danger">Tidak Aktif</span> @endif
                      </p>
                      <a href="javascript:void(0);" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#mdslider1"><i class="fa fa-pencil-square-o"></i></a>
                      <a href="javascript:void(0);" class="btn icon btn-warning" data-bs-toggle="modal" data-bs-target="#mdaktivasi1"><i class="@if($dataslider1[0]->activate == 'T') fa fa-unlock @else@if($dataslider1[0]->activate == 'F') fa fa-lock @endif"></i></a>
                      <!-- <a href="#" class="btn icon btn-warning"><i class="fa fa-lock"></i></a> -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Card -->

              <!-- Start Card -->
          <div class="col-md-6 col-sm-12">
                <div class="card">
                  <div class="card-content">
                    <img
                      class="card-img-top img-fluid"
                      src="{{ asset('public/storages/slider') }}/{{$dataslider2[0]->gambar}}"
                      alt="Card image cap"
                      style="height: 20rem"
                    />
                    <div class="card-body">
                      <h4 class="card-title">{{$dataslider2[0]->judul}}</h4>
                      <p class="card-text">
                        {{$dataslider2[0]->deskripsi}}
                      </p>
                      <p class="card-text">
                        <small class="text-muted"><i class="fa fa-calendar" aria-hidden="true"></i> Terakhir Diubah : {{$dataslider2[0]->updated_at}}</small>
                        <br/>
                        <small class="text-muted"><i class="fa fa-check-square-o" aria-hidden="true"></i> Status :</small> @if($dataslider2[0]->activate == 'T') <span class="badge bg-success">Aktif</span> @elseif($dataslider2[0]->activate == 'F') <span class="badge bg-danger">Tidak Aktif</span> @endif
                      </p>
                      <a href="javascript:void(0);" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#mdslider2"><i class="fa fa-pencil-square-o"></i></a>
                      <a href="javascript:void(0);" class="btn icon btn-warning" data-bs-toggle="modal" data-bs-target="#mdaktivasi2"><i class="@if($dataslider2[0]->activate == 'T') fa fa-unlock @else@if($dataslider2[0]->activate == 'F') fa fa-lock @endif"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Card -->

              <!-- Start Card -->
          <div class="col-md-6 col-sm-12">
                <div class="card">
                  <div class="card-content">
                    <img
                      class="card-img-top img-fluid"
                      src="{{ asset('public/storages/slider') }}/{{$dataslider3[0]->gambar}}"
                      alt="Card image cap"
                      style="height: 20rem"
                    />
                    <div class="card-body">
                      <h4 class="card-title">{{$dataslider3[0]->judul}}</h4>
                      <p class="card-text">
                        {{$dataslider3[0]->deskripsi}}
                      </p>
                      <p class="card-text">
                        <small class="text-muted"><i class="fa fa-calendar" aria-hidden="true"></i> Terakhir Diubah : {{$dataslider3[0]->updated_at}}</small>
                        <br/>
                        <small class="text-muted"><i class="fa fa-check-square-o" aria-hidden="true"></i> Status :</small> @if($dataslider3[0]->activate == 'T') <span class="badge bg-success">Aktif</span> @elseif($dataslider3[0]->activate == 'F') <span class="badge bg-danger">Tidak Aktif</span> @endif
                      </p>
                      <a href="javascript:void(0);" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#mdslider3"><i class="fa fa-pencil-square-o"></i></a>
                      <a href="javascript:void(0);" class="btn icon btn-warning" data-bs-toggle="modal" data-bs-target="#mdaktivasi3"><i class="@if($dataslider3[0]->activate == 'T') fa fa-unlock @else@if($dataslider3[0]->activate == 'F') fa fa-lock @endif"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Card -->

              <!-- Start Card -->
          <div class="col-md-6 col-sm-12">
                <div class="card">
                  <div class="card-content">
                    <img
                      class="card-img-top img-fluid"
                      src="{{ asset('public/storages/slider') }}/{{$dataslider4[0]->gambar}}"
                      alt="Card image cap"
                      style="height: 20rem"
                    />
                    <div class="card-body">
                      <h4 class="card-title">{{$dataslider4[0]->judul}}</h4>
                      <p class="card-text">
                        {{$dataslider4[0]->deskripsi}}
                      </p>
                      <p class="card-text">
                        <small class="text-muted"><i class="fa fa-calendar" aria-hidden="true"></i> Terakhir Diubah : {{$dataslider4[0]->updated_at}}</small>
                        <br/>
                        <small class="text-muted"><i class="fa fa-check-square-o" aria-hidden="true"></i> Status :</small> @if($dataslider4[0]->activate == 'T') <span class="badge bg-success">Aktif</span> @elseif($dataslider4[0]->activate == 'F') <span class="badge bg-danger">Tidak Aktif</span> @endif
                      </p>
                      <a href="javascript:void(0);" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#mdslider4"><i class="fa fa-pencil-square-o"></i></a>
                      <a href="javascript:void(0);" class="btn icon btn-warning" data-bs-toggle="modal" data-bs-target="#mdaktivasi4"><i class="@if($dataslider4[0]->activate == 'T') fa fa-unlock @else@if($dataslider4[0]->activate == 'F') fa fa-lock @endif"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Card -->

            <!-- Start modal ubah slider 1 -->
            <div
                        class="modal fade text-left"
                        id="mdslider1"
                        tabindex="-1"
                        role="dialog"
                        aria-labelledby="myModalLabel4"
                        data-bs-backdrop="false"
                        aria-hidden="true"
                      >
                        <div
                          class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"
                          role="document"
                        >
                          <div class="modal-content">
                            <div class="modal-header" style="background: #435ebe">
                              <h4 class="modal-title" id="myModalLabel4">
                                <font color="#fff">Ubah Silder</font>
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
                            <form id="forms" method="post" action="{{route('webslider/change')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$dataslider1[0]->idslider}}"/>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="basicInput">Judul Slider <font color="red">*</font></label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="basicInput"
                                    name="judul"
                                    value="{{$dataslider1[0]->judul}}"
                                    required
                                    placeholder="Ketikan Judul Slider"
                                  />
                                </div>

                                <div class="form-group">
                                  <label for="basicInput">Deskripsi Slider <font color="red">*</font></label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="basicInput"
                                    name="deskripsi"
                                    value="{{$dataslider1[0]->deskripsi}}"
                                    required
                                    placeholder="Ketikan Deskripsi Slider"
                                  />
                                </div>

                                </div>

                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="readonlyInput">Unggah Gambar Slider</label>
                                    <input class="form-control" type="file" id="formFile" name="gambar" accept="image/png, image/jpeg, image/jpg, image/gif">
                                  </div>
                                
                                </div>

                            </div>
                            
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
                                type="submit" id="btnsimpan"
                                class="btn btn-primary ms-1"
                                data-bs-dismiss="modal"
                              >
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Simpan Perubahan Data</span>
                              </button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- End modal ubah slider 1 -->

                  <!-- Start modal ubah slider 2 -->
                  <div
                        class="modal fade text-left"
                        id="mdslider2"
                        tabindex="-1"
                        role="dialog"
                        aria-labelledby="myModalLabel4"
                        data-bs-backdrop="false"
                        aria-hidden="true"
                      >
                        <div
                          class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"
                          role="document"
                        >
                          <div class="modal-content">
                            <div class="modal-header" style="background: #435ebe">
                              <h4 class="modal-title" id="myModalLabel4">
                                <font color="#fff">Ubah Silder</font>
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
                            <form id="forms" method="post" action="{{route('webslider/change')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$dataslider2[0]->idslider}}"/>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="basicInput">Judul Slider <font color="red">*</font></label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="basicInput"
                                    name="judul"
                                    value="{{$dataslider2[0]->judul}}"
                                    required
                                    placeholder="Ketikan Judul Slider"
                                  />
                                </div>

                                <div class="form-group">
                                  <label for="basicInput">Deskripsi Slider <font color="red">*</font></label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="basicInput"
                                    name="deskripsi"
                                    value="{{$dataslider2[0]->deskripsi}}"
                                    required
                                    placeholder="Ketikan Deskripsi Slider"
                                  />
                                </div>

                                </div>

                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="readonlyInput">Unggah Gambar Slider</label>
                                    <input class="form-control" type="file" id="formFile" name="gambar" accept="image/png, image/jpeg, image/jpg, image/gif">
                                  </div>
                                
                                </div>

                            </div>
                            
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
                                type="submit" id="btnsimpan"
                                class="btn btn-primary ms-1"
                                data-bs-dismiss="modal"
                              >
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Simpan Perubahan Data</span>
                              </button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- End modal ubah slider 2 -->

                  <!-- Start modal ubah slider 3 -->
                  <div
                        class="modal fade text-left"
                        id="mdslider3"
                        tabindex="-1"
                        role="dialog"
                        aria-labelledby="myModalLabel4"
                        data-bs-backdrop="false"
                        aria-hidden="true"
                      >
                        <div
                          class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"
                          role="document"
                        >
                          <div class="modal-content">
                            <div class="modal-header" style="background: #435ebe">
                              <h4 class="modal-title" id="myModalLabel4">
                                <font color="#fff">Ubah Silder</font>
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
                            <form id="forms" method="post" action="{{route('webslider/change')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$dataslider3[0]->idslider}}"/>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="basicInput">Judul Slider <font color="red">*</font></label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="basicInput"
                                    name="judul"
                                    value="{{$dataslider3[0]->judul}}"
                                    required
                                    placeholder="Ketikan Judul Slider"
                                  />
                                </div>

                                <div class="form-group">
                                  <label for="basicInput">Deskripsi Slider <font color="red">*</font></label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="basicInput"
                                    name="deskripsi"
                                    value="{{$dataslider3[0]->deskripsi}}"
                                    required
                                    placeholder="Ketikan Deskripsi Slider"
                                  />
                                </div>

                                </div>

                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="readonlyInput">Unggah Gambar Slider</label>
                                    <input class="form-control" type="file" id="formFile" name="gambar" accept="image/png, image/jpeg, image/jpg, image/gif">
                                  </div>
                                
                                </div>

                            </div>
                            
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
                                type="submit" id="btnsimpan"
                                class="btn btn-primary ms-1"
                                data-bs-dismiss="modal"
                              >
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Simpan Perubahan Data</span>
                              </button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- End modal ubah slider 3 -->

                      <!-- Start modal ubah slider 4 -->
                  <div
                        class="modal fade text-left"
                        id="mdslider4"
                        tabindex="-1"
                        role="dialog"
                        aria-labelledby="myModalLabel4"
                        data-bs-backdrop="false"
                        aria-hidden="true"
                      >
                        <div
                          class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"
                          role="document"
                        >
                          <div class="modal-content">
                            <div class="modal-header" style="background: #435ebe">
                              <h4 class="modal-title" id="myModalLabel4">
                                <font color="#fff">Ubah Silder</font>
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
                            <form id="forms" method="post" action="{{route('webslider/change')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$dataslider4[0]->idslider}}"/>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="basicInput">Judul Slider <font color="red">*</font></label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="basicInput"
                                    name="judul"
                                    value="{{$dataslider4[0]->judul}}"
                                    required
                                    placeholder="Ketikan Judul Slider"
                                  />
                                </div>

                                <div class="form-group">
                                  <label for="basicInput">Deskripsi Slider <font color="red">*</font></label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="basicInput"
                                    name="deskripsi"
                                    value="{{$dataslider4[0]->deskripsi}}"
                                    required
                                    placeholder="Ketikan Deskripsi Slider"
                                  />
                                </div>

                                </div>

                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="readonlyInput">Unggah Gambar Slider</label>
                                    <input class="form-control" type="file" id="formFile" name="gambar" accept="image/png, image/jpeg, image/jpg, image/gif">
                                  </div>
                                
                                </div>

                            </div>
                            
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
                                type="submit" id="btnsimpan"
                                class="btn btn-primary ms-1"
                                data-bs-dismiss="modal"
                              >
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Simpan Perubahan Data</span>
                              </button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- End modal ubah slider 4 -->

                      <!-- Start modal aktivasi 1 -->
                      <div
                                  class="modal fade text-left"
                                  id="mdaktivasi1"
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
                                      <div class="modal-header" style="background: #ffc720">
                                        <h4 class="modal-title" id="myModalLabel4">
                                          <font color="#000">Perhatian !</font>
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
                                      <form id="forms" method="post" action="{{route('webslider/activate')}}">
                                      @csrf
                                      <input type="hidden" name="id" value="{{$dataslider1[0]->idslider}}"/>
                                      <input type="hidden" name="activate" value="@if($dataslider1[0]->activate == 'T') F @elseif($dataslider1[0]->activate == 'F') T @endif"/>
                                        <p>
                                          Apakah yakin akan merubah status aktivasi web slider berikut ?
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
                                          type="submit" id="btnsimpan"
                                          class="btn btn-warning ms-1"
                                          data-bs-dismiss="modal"
                                        >
                                          <i class="bx bx-check d-block d-sm-none"></i>
                                          <span class="d-none d-sm-block">Ya !</span>
                                        </button>
                                      </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                <!-- End modal aktivasi 1 -->

                            <!-- Start modal aktivasi 2 -->
                            <div
                                  class="modal fade text-left"
                                  id="mdaktivasi2"
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
                                      <div class="modal-header" style="background: #ffc720">
                                        <h4 class="modal-title" id="myModalLabel4">
                                          <font color="#000">Perhatian !</font>
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
                                      <form id="forms" method="post" action="{{route('webslider/activate')}}">
                                      @csrf
                                      <input type="hidden" name="id" value="{{$dataslider2[0]->idslider}}"/>
                                      <input type="hidden" name="activate" value="@if($dataslider2[0]->activate == 'T') F @elseif($dataslider2[0]->activate == 'F') T @endif"/>
                                        <p>
                                          Apakah yakin akan merubah status aktivasi web slider berikut ?
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
                                          type="submit" id="btnsimpan"
                                          class="btn btn-warning ms-1"
                                          data-bs-dismiss="modal"
                                        >
                                          <i class="bx bx-check d-block d-sm-none"></i>
                                          <span class="d-none d-sm-block">Ya !</span>
                                        </button>
                                      </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                <!-- End modal aktivasi 2 -->

                <!-- Start modal aktivasi 3 -->
                <div
                                  class="modal fade text-left"
                                  id="mdaktivasi3"
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
                                      <div class="modal-header" style="background: #ffc720">
                                        <h4 class="modal-title" id="myModalLabel4">
                                          <font color="#000">Perhatian !</font>
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
                                      <form id="forms" method="post" action="{{route('webslider/activate')}}">
                                      @csrf
                                      <input type="hidden" name="id" value="{{$dataslider3[0]->idslider}}"/>
                                      <input type="hidden" name="activate" value="@if($dataslider3[0]->activate == 'T') F @elseif($dataslider3[0]->activate == 'F') T @endif"/>
                                        <p>
                                          Apakah yakin akan merubah status aktivasi web slider berikut ?
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
                                          type="submit" id="btnsimpan"
                                          class="btn btn-warning ms-1"
                                          data-bs-dismiss="modal"
                                        >
                                          <i class="bx bx-check d-block d-sm-none"></i>
                                          <span class="d-none d-sm-block">Ya !</span>
                                        </button>
                                      </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                <!-- End modal aktivasi 3 -->

                  <!-- Start modal aktivasi 4 -->
                <div
                                  class="modal fade text-left"
                                  id="mdaktivasi4"
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
                                      <div class="modal-header" style="background: #ffc720">
                                        <h4 class="modal-title" id="myModalLabel4">
                                          <font color="#000">Perhatian !</font>
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
                                      <form id="forms" method="post" action="{{route('webslider/activate')}}">
                                      @csrf
                                      <input type="hidden" name="id" value="{{$dataslider4[0]->idslider}}"/>
                                      <input type="hidden" name="activate" value="@if($dataslider4[0]->activate == 'T') F @elseif($dataslider4[0]->activate == 'F') T @endif"/>
                                        <p>
                                          Apakah yakin akan merubah status aktivasi web slider berikut ?
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
                                          type="submit" id="btnsimpan"
                                          class="btn btn-warning ms-1"
                                          data-bs-dismiss="modal"
                                        >
                                          <i class="bx bx-check d-block d-sm-none"></i>
                                          <span class="d-none d-sm-block">Ya !</span>
                                        </button>
                                      </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                <!-- End modal aktivasi 4 -->

            </div>
            
          </section>
          
        </div>
@endsection

@push('lib-js')

<script type="text/javascript">

</script>
@endpush

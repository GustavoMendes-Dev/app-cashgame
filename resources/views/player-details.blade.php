@extends('layouts.main')

@section('title', 'Jogadores')
@section('page', $player->name)

@section('content')
<div class="post d-flex flex-column-fluid" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Row-->
        <div class="row g-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-xl-12">
              @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
              @endif
              @if (session('error'))
                  <div class="alert alert-danger">
                      {{ session('error') }}
                  </div>
              @endif
              <div class="post">
                <div class="card mb-5 mb-xxl-8">
                  <div class="card-body pt-9 pb-0">
                    <!--begin::Form-->
                    <form class="form" action="{{ route('players.update', $player->id)  }}" method="POST">
                      @csrf
                      @method('PUT')
                      
                      <div class="mb-10">
                        <label class="form-label fw-bold">Status</label>
                        <!--end::Label-->
                        <div class="nav-group nav-group-fluid">
                          <!--begin::Option-->
                          <label>
                            <input type="radio" class="btn-check" name="status" value="0" <?= $player->status == 0 ? 'checked' : '' ?>>
                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Ativo</span>
                          </label>
                          <!--end::Option-->
                          <!--begin::Option-->
                          <label>
                            <input type="radio" class="btn-check" name="status" value="1" <?= $player->status == 1 ? 'checked' : '' ?>>
                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Inativo</span>
                          </label>
                          <!--end::Option-->
                        </div>
                      </div>
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                          <!--begin::Label-->
                          <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Nome</span>
                          </label>
                          <!--end::Label-->
                          <input type="text" class="form-control form-control-solid" placeholder="" name="name" value="{{ $player->name }}" required/>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                          <!--begin::Label-->
                          <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Apelido</span>
                          </label>
                          <!--end::Label-->
                          <input type="text" class="form-control form-control-solid" placeholder="" name="nickname" value="{{ $player->nickname }}" required/>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                          <!--begin::Label-->
                          <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Telefone</span>
                          </label>
                          <!--end::Label-->
                          <input type="text" class="form-control form-control-solid" placeholder="" name="phone" value="{{ $player->phone }}" required/>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                          <!--begin::Label-->
                          <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">E-mail</span>
                          </label>
                          <!--end::Label-->
                          <input type="text" class="form-control form-control-solid" placeholder="" name="email" value="{{ $player->email }}" required/>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-7 fv-row">
                          <!--begin::Label-->
                          <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Saldo</span>
                          </label>
                          <!--end::Label-->
                          <input type="text" class="form-control form-control-solid" placeholder="" name="balance" value="{{ $player->balance }}" required/>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                          <a href="{{ url('/players') }}" type="reset" class="btn btn-light me-3">Cancelar</a>
                          <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Cadastrar</span>
                          </button>
                        </div>
                        <!--end::Actions-->
                      </form>
                      <!--end::Form-->
                  </div>	
                </div>						
              </div>
            </div>
        </div>
    </div>
</div>
@endsection


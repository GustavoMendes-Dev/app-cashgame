<!--begin::Modal - New Card-->
<div class="modal fade" id="modal_add_start_player">
  <!--begin::Modal dialog-->
  <div class="modal-dialog modal-dialog-centered mw-650px">
    <!--begin::Modal content-->
    <div class="modal-content mh-500px">
      <!--begin::Modal header-->
      <div class="modal-header">
        <!--begin::Modal title-->
        <h2>Adicionar Jogador</h2>
        <!--end::Modal title-->
        <!--begin::Close-->
        <button onclick="closeModal()" class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
          <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
          <span class="svg-icon svg-icon-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)"
                fill="black" />
              <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
            </svg>
          </span>
          <!--end::Svg Icon-->
        </button>
        <!--end::Close-->
      </div>
      <!--end::Modal header-->
      <!--begin::Modal body-->
      <div class="modal-body mx-5 mx-xl-15">
        <!--begin::Form-->
        <input class="form-control form-control-lg" type="text" name="search_players" id="search_players" placeholder="Procurar jogador...">

        <form id="kt_modal_new_match" class="form" action="{{ url('/new-player-in-match', $match->id)}}" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
          <!--begin::Input group-->
          <div class="d-flex flex-column mb-7 fv-row">
            <div class="mb-5 mt-5 scroll-y list_players p-4">
              <table class="table align-middle table-row-dashed gy-5 dataTable no-footer">
                <tbody class="fs-6 fw-bold text-gray-600" id="list_players">
                  
                </tbody>
              </table>
            </div>
            <div class="text-center">
              <button onclick="closeModal()" type="reset" class="btn btn-light me-3">Cancelar</button>
              <button type="submit" class="btn btn-primary">
                <span class="indicator-label">Adicionar</span>
              </button>
            </div>
        </form>
        <!--end::Form-->
      </div>
      <!--end::Modal body-->
    </div>
    <!--end::Modal content-->
  </div>
  <!--end::Modal dialog-->
</div>
<!--end::Modal - New Card-->
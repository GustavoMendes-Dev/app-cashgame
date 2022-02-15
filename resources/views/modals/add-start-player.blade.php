		<!--begin::Modal - New Card-->
		<div class="modal fade" id="modal_add_start_player">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
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
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
						<!--begin::Form-->
						<form id="kt_modal_new_match" class="form" action="{{ url('/new-player-in-match', $match->id)}}" method="POST">
							<input type="hidden" name="_token" value="{{ csrf_token() }}" />
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-7 fv-row">
                <div class="mb-10">
                    <!--begin::Label-->
                    <label class="form-label fw-bold">Jogadores:</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <div>
                        <select name="player" class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61ba8e352a231" data-allow-clear="true" data-select2-id="select2-data-7-y6hv" tabindex="-1" aria-hidden="true" required>
                            <option disabled selected data-select2-id="select2-data-9-0z1b">Selecione um jogador</option>
                            @foreach($players as $player)   
                              <option value="{{ $player->id }}">{{ $player->name }} - {{ $player->nickname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!--end::Input-->
                  </div>
                  <div class="mb-10">
                    <div class="nav-group nav-group-fluid">
                      <!--begin::Option-->
                      <label>
                        <input type="checkbox" class="btn-check" name="dealer" value="1">
                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Jogador Poker Dealer da Partida.</span>
                      </label>
                      <!--end::Option-->
                    </div>
              </div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center pt-15">
								<button onclick="closeModal()" type="reset" class="btn btn-light me-3">Cancelar</button>
								<button type="submit" class="btn btn-primary">
									<span class="indicator-label">Adicionar</span>
								</button>
							</div>
							<!--end::Actions-->
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
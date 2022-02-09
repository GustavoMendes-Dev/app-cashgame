		<!--begin::Modal - New Card-->
		<div class="modal fade" id="modal_close_sell_chips" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2>Encerrar Jogador</h2>
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
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
						<!--begin::Form-->
						<form id="kt_modal_new_match" class="form" action="{{ route('close-sellchips', $match->id)}}" method="POST">
							<input type="hidden" name="_token" value="{{ csrf_token() }}" />
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-7 fv-row">

                <div class="row g-8">
                  <div class="col-lg-8">
                    	<!--begin::Input group-->
                      <div class="d-flex flex-column mb-7 fv-row">
                          <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Jogador</span>
                          </label>
                          <input disabled type="text" class="form-control form-control-solid" placeholder="" name="player" id="name_player"/>
                          <input type="hidden" name="player_id" id="id_player" required/>
                      </div>
                      <!--end::Input group-->
                  </div>
                  <div class="col-lg-4">
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span class="required">Saldo anterior</span>
											</label>
											<!--end::Label-->
											<input disabled type="text" class="form-control form-control-solid" placeholder="" name="balance" id="balance_player"/>
										</div>
									<!--end::Input group-->
									</div>
                </div> 

								<div class="row g-8">
									
									<div class="col-lg-6">
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span class="required">Fichas</span>
											</label>
											<!--end::Label-->
											<input type="text" class="form-control form-control-solid" placeholder="" name="buy_chips" id="buy_chips"/>
										</div>
									<!--end::Input group-->
									</div>
									<div class="col-lg-6">
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span class="required">Total</span>
											</label>
											<!--end::Label-->
											<input disabled type="text" class="form-control form-control-solid" placeholder="" id="total"/>
										</div>
									<!--end::Input group-->
									</div>
								</div>
								<div class="row g-8">
									<div class="col-lg-6">
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span class="required">Valor pago</span>
											</label>
											<!--end::Label-->
											<input type="text" class="form-control form-control-solid" placeholder="" name="amount_paid" id="amount_paid" required/>
										</div>
										<!--end::Input group-->
									</div>
									<div class="col-lg-6">
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span class="required">Saldo atual</span>
											</label>
											<!--end::Label-->
											<input type="text" class="form-control form-control-solid" placeholder="" name="current_balance" id="current_balance" required/>
										</div>
										<!--end::Input group-->
									</div>
								</div>
                <div class="mb-10">
                    <!--begin::Label-->
                    <label class="form-label fw-bold">Pagamento</label>
                    <!--end::Label-->
                    <div class="nav-group nav-group-fluid">
                      <!--begin::Option-->
                      <label>
                        <input type="radio" class="btn-check" name="payment" value="0" checked="checked">
                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Débito</span>
                      </label>
                      <!--end::Option-->
                      <!--begin::Option-->
                      <label>
                        <input type="radio" class="btn-check" name="payment" value="1">
                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Crédito</span>
                      </label>
                      <!--end::Option-->
                      <!--begin::Option-->
                      <label>
                        <input type="radio" class="btn-check" name="payment" value="2">
                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Dinheiro</span>
                      </label>
                      <!--end::Option-->
                      <!--begin::Option-->
                      <label>
                        <input type="radio" class="btn-check" name="payment" value="3">
                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">PIX</span>
                      </label>
                      <!--end::Option-->
                      <!--begin::Option-->
                      <label>
                        <input type="radio" class="btn-check" name="payment" value="4">
                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Fiado</span>
                      </label>
                      <!--end::Option-->
                    </div>
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
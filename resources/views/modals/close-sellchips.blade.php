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
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-7 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
										<span class="required">Jogador</span>
									</label>
									<!--end::Label-->
									<input disabled type="text" class="form-control form-control-solid" placeholder="" name="player" id="name_player"/>
									<input type="hidden" name="player_id" id="id_player" required/>
								</div>
								<!--end::Input group-->
								<div class="row g-8">
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
									<div class="col-lg-4">
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
									<div class="col-lg-4">
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
									<div class="col-lg-4">
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
									<div class="col-lg-4">
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
                                    <!--begin::Input-->
                                    <div>
                                        <select name="payment" class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61ba8e352a231" data-allow-clear="true" data-select2-id="select2-data-7-y6hv" tabindex="-1" aria-hidden="true" required>
                                            <option disabled selected data-select2-id="select2-data-9-0z1b">Selecione um pagamento</option>  
                                            <option value="0">Débito</option>
											<option value="1">Crédito</option>
											<option value="2">Dinheiro</option>
											<option value="3">PIX</option>
											<option value="4">Fiado</option>

                                        </select>
                                    </div>
                                    <!--end::Input-->
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
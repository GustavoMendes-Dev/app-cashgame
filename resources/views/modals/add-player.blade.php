		<!--begin::Modal - New Card-->
		<div class="modal fade" id="modal_add_player" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2>Novo Jogador</h2>
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
						<form id="kt_modal_new_match" class="form" action="/players" method="POST">
							<input type="hidden" name="_token" value="{{ csrf_token() }}" />
              <input type="hidden" name="status" value="0" required/>
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-7 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
									<span class="required">Nome</span>
								</label>
								<!--end::Label-->
								<input type="text" class="form-control form-control-solid" placeholder="" name="name" required/>
							</div>
							<!--end::Input group-->

              <!--begin::Input group-->
							<div class="d-flex flex-column mb-7 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
									<span>Apelido</span>
								</label>
								<!--end::Label-->
								<input type="text" class="form-control form-control-solid" placeholder="" name="nickname"/>
							</div>
							<!--end::Input group-->

              <!--begin::Input group-->
							<div class="d-flex flex-column mb-7 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
									<span>Telefone</span>
								</label>
								<!--end::Label-->
								<input type="text" class="form-control form-control-solid" placeholder="" name="phone"/>
							</div>
							<!--end::Input group-->

              <!--begin::Input group-->
							<div class="d-flex flex-column mb-7 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
									<span>E-mail</span>
								</label>
								<!--end::Label-->
								<input type="text" class="form-control form-control-solid" placeholder="" name="email"/>
							</div>
							<!--end::Input group-->

              <!--begin::Input group-->
							<div class="d-flex flex-column mb-7 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
									<span class="required">Saldo Inicial</span>
								</label>
								<!--end::Label-->
								<input type="text" class="form-control form-control-solid" placeholder="" name="balance" required/>
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center pt-15">
								<button onclick="closeModal()" type="reset" class="btn btn-light me-3">Cancelar</button>
								<button type="submit" class="btn btn-primary">
									<span class="indicator-label">Cadastrar</span>
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
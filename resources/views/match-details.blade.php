@extends('layouts.main')

@section('title', 'Partidas')
@section('page', $match->title)

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
            <div class="d-flex flex-column flex-xl-row">
									<!--begin::Sidebar-->
									<div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
										<!--begin::Card-->
										<div class="card mb-5 mb-xl-8">
											<!--begin::Card body-->
											<div class="card-body pt-15">
												<!--begin::Summary-->
												<div class="d-flex flex-center flex-column mb-5">
                                                    <div class="card-footer border-0 d-flex justify-content-center pt-0">
                                                    @if ( $match->status >= 1 )
                                                        <span class="badge badge-light-success">Aberta</span>
                                                    @else
                                                        <span class="badge badge-light-primary">Fechada</span>
                                                    @endif
                                                    </div>
													<!--begin::Name-->
													<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1">{{ $match->title }}</a>
													<!--end::Name-->
													<!--begin::Position-->
													<div class="fs-5 fw-bold text-muted mb-6">Criado em {{ date('d/M/Y', strtotime($match->created_at)); }}</div>
													<!--end::Position-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap flex-center">
														<!--begin::Stats-->
														<div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
															<div class="fs-4 fw-bolder text-gray-700">
																<span class="w-50px">{{  'R$ '.number_format($output, 2, ',', '.') }}</span>
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																<span class="svg-icon svg-icon-3 svg-icon-danger">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="black"></rect>
																		<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="black"></path>
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</div>
															<div class="fw-bold text-muted">Saídas</div>
														</div>
														<!--end::Stats-->
														<!--begin::Stats-->
														<div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
															<div class="fs-4 fw-bolder text-gray-700">
																<span class="w-50px">{{  'R$ '.number_format($input, 2, ',', '.') }}</span>
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																<span class="svg-icon svg-icon-3 svg-icon-success">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black"></rect>
																		<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black"></path>
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</div>
															<div class="fw-bold text-muted">Entradas</div>
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Info-->
												</div>
												<!--end::Summary-->
                                                @if ($match->status == 1)
                                                    <div class="separator separator-dashed my-3"></div>
                                                    <!--begin::Card footer-->
                                                    <div class="card-footer border-0 d-flex justify-content-center pt-5">
                                                        <form action="{{ url('/close-match', $match->id)}}" method="POST">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                            <button type="submit" class="btn btn-sm btn-light-primary">Fechar Partida</button>
                                                        </form>
                                                    </div>
                                                <!--end::Card footer-->
                                                @endif

                                               
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
									
									</div>
									<!--end::Sidebar-->
									<!--begin::Content-->
									<div class="flex-lg-row-fluid ms-lg-15">
										
										<!--begin:::Tab content-->
										<div class="tab-content" id="myTabContent">
											<!--begin:::Tab pane-->
											<div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">
												<!--begin::Card-->
												<div class="card pt-4 mb-6 mb-xl-9">
													<!--begin::Card header-->
													<div class="card-header border-0">
														<!--begin::Card title-->
														<div class="card-title">
															<h2>{{ count($match->players)}} Jogadores</h2>
														</div>
														<!--end::Card title-->
														<!--begin::Card toolbar-->
                                                        @if ($match->status == 1)
                                                            <div class="card-toolbar">
                                                                <!--begin::Filter-->
                                                                <button type="button" onclick="AddPlayer()" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_payment">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                <span class="svg-icon svg-icon-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"></rect>
                                                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black"></rect>
                                                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black"></rect>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->Adicionar Jogador</button>
                                                                <!--end::Filter-->
                                                            </div>
                                                            <!--end::Card toolbar-->
                                                        @endif
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0 pb-5">
														<!--begin::Table-->
														<div id="kt_table_customers_payment_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table class="table align-middle table-row-dashed gy-5 dataTable no-footer" id="kt_table_customers_payment">
															<!--begin::Table head-->
															<thead class="border-bottom border-gray-200 fs-7 fw-bolder">
																<!--begin::Table row-->
																<tr class="text-start text-muted text-uppercase gs-0">
                                                                    <th class="min-w-100px sorting" style="width: 150px;">Nome</th>
                                                                    <th class="sorting" style="width: 80px;">Status</th>
                                                                    <th class="sorting" style="width: 150px;">Saldo</th>
                                                                    <th class="text-end min-w-100px pe-4 sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 100px;">Ações</th>
                                                                </tr>
																<!--end::Table row-->
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody class="fs-6 fw-bold text-gray-600">
                                                            <!-- {{ $match->players }} -->
                                                            @foreach($match->players as $player)                         
															    <tr>
																	<!--begin::Invoice=-->
																	<td>
																		<a href="#" class="text-gray-600 text-hover-primary mb-1">{{ $player->name }}</a>
																	</td>
																	<!--end::Invoice=-->
																	<!--begin::Status=-->
																	<td>
                                                                        @if ($player->status >= 1) 
                                                                            <span class="badge badge-light-success">Ativo</span>
                                                                        @else 
                                                                            <span class="badge badge-light-info">Inativo</span>
                                                                        @endif
																	</td>
																	<!--end::Status=-->
																	<!--begin::Amount=-->
																	<td>{{  'R$ '.number_format($player->balance, 2, ',', '.') }}</td>
																	<!--end::Amount=-->
																	<!--begin::Action=-->
																	<td class="text-end">
																		<!--begin::Card toolbar-->
                                                                        <div class="d-flex my-4">
                                                                            <!--begin::Filter-->
                                                                            <button onclick="AddSellChips({{$player->id}})" class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_add_payment">
                                                                            <!-- begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                            <!-- <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"></rect>
                                                                                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black"></rect>
                                                                                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black"></rect>
                                                                                </svg>
                                                                            </span> -->
                                                                            <!--end::Svg Icon -->
                                                                            Fichas</button>
                                                                            <!--end::Filter-->
                                                                            <!--begin::Actions-->
                                                                            <button onclick="CloseSellChips({{$player->id}})" class="btn btn-sm btn-danger">
                                                                                <span class="indicator-label">Encerrar</span>
                                                                            </button>
                                                                            <!--end::Actions-->
                                                                        </div>
                                                                        <!--end::Card toolbar-->
                                                                        
																	</td>
																	<!--end::Action=-->
																</tr>
                                                            @endforeach
                                                            </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                            </div>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end:::Tab pane-->	
                        </div>
                        <!--end:::Tab content-->
                    </div>
                    <!--end::Content-->
                </div>
            </div>
        </div>
    </div>
</div>
@include('modals.add-start-player')
@include('modals.close-sellchips')
@include('modals.add-sellchips')

<script>
    let modal = document.querySelector("#modal_add_start_player");
    let modalSellChips = document.querySelector("#modal_add_sell_chips");
    let modalSellChipsClose = document.querySelector("#modal_close_sell_chips");

    function AddPlayer(){
        console.log('cliquei');
        modal.classList.add("show-modal");
        modal.classList.add("show");
        modal.style.display = 'block';
    }

    function closeModal() {
        console.log('cliquei');
        modal.classList.remove("show-modal");
        modal.classList.remove("show");
        modal.style.display = 'none';

        modalSellChips.classList.remove("show-modal");
        modalSellChips.classList.remove("show");
        modalSellChips.style.display = 'none';

        modalSellChipsClose.classList.remove("show-modal");
        modalSellChipsClose.classList.remove("show");
        modalSellChipsClose.style.display = 'none';
    }

    function AddSellChips(id){
        
        $.ajax({
            type:'GET',
            url: `/players/${id}`,
            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
            dataType: 'JSON',
            success:function(res){
                console.log(res);
                document.querySelector("#name_player").value = res.name;
                document.querySelector("#id_player").value = res.id;
                modalSellChips.classList.add("show-modal");
                modalSellChips.classList.add("show");
                modalSellChips.style.display = 'block';
            },
            error:function(error){
                console.log('error', error);
            },
        });
   
    }

    function CloseSellChips(id){
        
        $.ajax({
            type:'GET',
            url: `/players/${id}`,
            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
            dataType: 'JSON',
            success:function(res){
                console.log(res);
                document.querySelector("#name_player").value = res.name;
                document.querySelector("#id_player").value = res.id;

                modalSellChipsClose.classList.add("show-modal");
                modalSellChipsClose.classList.add("show");
                modalSellChipsClose.style.display = 'block';
            },
            error:function(error){
                console.log('error', error);
            },
        });
   
    }

</script>
@endsection


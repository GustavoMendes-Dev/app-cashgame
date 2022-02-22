@extends('layouts.main')

@section('title', 'Partidas')
@section('page', $match->title)

@section('content')
<div class="post d-flex flex-column-fluid" id="kt_post">
  <div id="kt_content_container" class="container-xxl">
    <div class="row g-5 g-xl-8">
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
          <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
            <div class="card mb-5 mb-xl-8">
              <div class="card-body pt-15">
                <div class="d-flex flex-center flex-column mb-5">
                  <div class="card-footer border-0 d-flex justify-content-center pt-0">
                    @if ( $match->status >= 1 )
                    <span class="badge badge-light-success">Aberta</span>
                    @else
                    <span class="badge badge-light-primary">Fechada</span>
                    @endif
                  </div>
                  <h1 class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1">{{ $match->title }}</h1>
                  <div class="fs-5 fw-bold text-muted mb-6">Criado em {{ date('d/M/Y', strtotime($match->created_at))}}</div>

                  <div class="d-flex flex-wrap flex-center">
                    <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                      <div class="fs-4 fw-bolder text-gray-700">
                        <span class="w-50px">{{ 'R$ '.number_format($output, 2, ',', '.') }}</span>
                        <span class="svg-icon svg-icon-3 svg-icon-danger">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)"
                              fill="black"></rect>
                            <path
                              d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                              fill="black"></path>
                          </svg>
                        </span>
                      </div>
                      <div class="fw-bold text-muted">Saídas</div>
                    </div>
                    <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                      <div class="fs-4 fw-bolder text-gray-700">
                        <span class="w-50px">{{ 'R$ '.number_format($input, 2, ',', '.') }}</span>
                        <span class="svg-icon svg-icon-3 svg-icon-success">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                              fill="black"></rect>
                            <path
                              d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                              fill="black"></path>
                          </svg>
                        </span>
                      </div>
                      <div class="fw-bold text-muted">Entradas</div>
                    </div>
                  </div>
                  <div class="separator separator-dashed my-3"></div>

                  <div class="d-flex flex-wrap flex-center">
                    <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                      <div class="fs-4 fw-bolder text-gray-700">
                        <span class="w-50px">{{ $match->outputs }}</span>
                        <span class="svg-icon svg-icon-3 svg-icon-danger">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)"
                              fill="black"></rect>
                            <path
                              d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                              fill="black"></path>
                          </svg>
                        </span>
                      </div>
                      <div class="fw-bold text-muted">Saída de fichas</div>
                    </div>
                    <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                      <div class="fs-4 fw-bolder text-gray-700">
                        <span class="w-50px">{{ $match->inputs }}</span>
                        <span class="svg-icon svg-icon-3 svg-icon-success">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                              fill="black"></rect>
                            <path
                              d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                              fill="black"></path>
                          </svg>
                        </span>
                      </div>
                      <div class="fw-bold text-muted">Entrada de fichas</div>
                    </div>
                  </div>

                  <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                      <div class="fs-4 fw-bolder text-gray-700">
                        <span class="w-50px">{{ $match->inputs - $match->outputs }}</span>
                      </div>
                      <div class="fw-bold text-muted">Total de Fichas</div>
                    </div>
                </div>
                
                @if ($match->status == 1)
                <div class="separator separator-dashed my-3"></div>
                <div class="card-footer border-0 d-flex justify-content-center pt-5">
                  <form action="{{ url('/close-match', $match->id)}}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <button type="submit" class="btn btn-sm btn-light-primary">Fechar Partida</button>
                  </form>
                </div>
                @endif
              </div>
            </div>
          </div>
          <div class="flex-lg-row-fluid ms-lg-8">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">
                <div class="card pt-4 mb-6 mb-xl-8">
                  <div class="card-header border-0">
                    <div class="card-title">
                      <input class="form-control form-control-lg" type="text" name="search"
                        id="search" placeholder="Procurar jogador...">
                    </div>
                    @if ($match->status == 1)
                    <div class="card-toolbar">
                      <button type="button" onclick="AddPlayer()" class="btn btn-sm btn-flex btn-light-primary"
                        data-bs-toggle="modal" data-bs-target="#kt_modal_add_payment">
                        <span class="svg-icon svg-icon-3">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"></rect>
                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                              transform="rotate(-90 10.8891 17.8033)" fill="black"></rect>
                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black"></rect>
                          </svg>
                        </span>
                        Adicionar Jogador
                      </button>
                    </div>
                    @endif
                  </div>
                  <div class="card-body pt-0 pb-5">
                    <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                      <div class="table-responsive">
                        <table class="table align-middle table-row-dashed gy-5 dataTable no-footer">
                          <thead class="border-bottom border-gray-200 fs-7 fw-bolder">
                            <tr class="text-start text-muted text-uppercase gs-0">
                              <th style="width: 40px;">Dealer</th>
                              <th style="width: 130px;">Nome</th>
                              <th style="width: 50px;">Saldo</th>
                              <th style="width: 50px;">Dinheiro</th>
                              <th style="width: 50px;">PIX</th>
                              <th style="width: 50px;">Cartão</th>
                              <th class="text-end" rowspan="1" colspan="1"
                                aria-label="Actions" style="width: 150px;">Ações</th>
                            </tr>
                          </thead>
                          <tbody class="fs-6 fw-bold text-gray-600" id="result_search_players">
                          </tbody>
                        </table>
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
<div>@include('modals.add-start-player')</div>
@include('modals.close-sellchips')
@include('modals.add-sellchips')

<script>

  fetch_players_data();
  fetch_list_players_data();

  let modalSellChips = document.querySelector("#modal_add_sell_chips");
  let modal = document.querySelector("#modal_add_start_player");
  let modalSellChipsClose = document.querySelector("#modal_close_sell_chips");

  function AddPlayer() {
    modal.classList.add("show-modal");
    modal.classList.add("show");
    modal.style.display = 'block';
  }

  function closeModal() {
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

  function AddSellChips(id) {

    $.ajax({
      url: `/setPlayer/${id}`,
      method: 'GET',
      contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
      dataType: 'JSON',
      // beforeSend: function (){
      //   $('').html('loading...')
      // },
      success: function (res) {
        document.querySelector("#add_name_player").value = res.name;
        document.querySelector("#add_id_player").value = res.id;
        modalSellChips.classList.add("show-modal");
        modalSellChips.classList.add("show");
        modalSellChips.style.display = 'block';
      },
      error: function (error) {
        console.log('error', error);
      },
    });

  }

  function CloseSellChips(id) {

    $.ajax({
      type: 'GET',
      url: `/setPlayer/${id}`,
      contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
      dataType: 'JSON',
      success: function (res) {
        console.log(res);
        document.querySelector("#name_player").value = res.name;
        document.querySelector("#id_player").value = res.id;
        let balance = document.querySelector("#balance_player");
        balance.value = res.balance;

        let amount_paid = document.querySelector("#amount_paid");
        let current_balance = document.querySelector("#current_balance");

        modalSellChipsClose.classList.add("show-modal");
        modalSellChipsClose.classList.add("show");
        modalSellChipsClose.style.display = 'block';

        $('#buy_chips').bind('input', function () {
          let buy = parseInt($(this).val(), 10);
          let total = (document.querySelector("#total"));

          total.value = buy + parseInt(balance.value, 10);
          amount_paid.value = 0;
          current_balance.value = parseInt(total.value, 10) + parseInt(amount_paid.value, 10)
        });

        $('#amount_paid').bind('input', function () {
          current_balance.value = parseInt(total.value, 10) + parseInt($(this).val(), 10);
        });
      },
      error: function (error) {
        console.log('error', error);
      },
    });
  }


  function fetch_players_data(query = '') {
    $.ajax({
      url: "{{ route('search.players', $match->id) }}",
      method: 'GET',
      data: { query: query },
      contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
      dataType: 'JSON',
      beforeSend: function () {
        $('#result_search_players').html(`
        <tr>
          <td colspan="7" class="text-center">
            <div class="spinner-border" role="status">
            </div>
          </td>
        </tr>`);
      },
      success: function (data) {
        $('#result_search_players').html(data.table_data);
      },
    })
  }

  $(document).on('keyup', '#search', function () {
    var query = $(this).val();
    fetch_players_data(query);
  });


  function fetch_list_players_data(query = '') {
    $.ajax({
      url: "{{ route('list.players') }}",
      method: 'GET',
      data: { query: query },
      contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
      dataType: 'JSON',
      beforeSend: function () {
        $('#list_players').html(`
        <tr>
          <td colspan="4" class="text-center">
            <div class="spinner-border" role="status">
            </div>
          </td>
        </tr>`);
      },
      success: function (data) {
        $('#list_players').html(data.table_data);
      },
      error: function (error) {
        console.log(error);
      }
    })
  }

  $(document).on('keyup', '#search_players', function () {
    console.log($(this).val());
    var query = $(this).val();
    fetch_list_players_data(query);
  });

</script>
@endsection
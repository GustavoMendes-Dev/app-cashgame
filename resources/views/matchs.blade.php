@extends('layouts.main')

@section('title', 'Partidas')

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
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1"> @yield('title') </span>
                            <span class="text-muted mt-1 fw-bold fs-7">{{ count($matchs) }} Partidas</span>
                        </h3>
                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="" data-bs-original-title="Click to add a user">
                            <button onclick="AddMatch()" href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black"></rect>
                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black"></rect>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Nova Partida
</button>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="min-w-150px">Título</th>
                                        <th class="min-w-150px">Data</th>
                                        <th class="min-w-120px">Jogadores</th>
                                        <th class="min-w-120px">Status</th>
                                        <th class="min-w-100px text-end">Ações</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    @foreach ($matchs as $match)
                                        <tr>
                                            <td>
                                                <a href="{{ url('/matchs', $match->id)}}" class="text-dark fw-bolder text-hover-primary fs-6">{{ $match->title }}</a>
                                            </td>
                                            <td>{{ date('d/m/Y', strtotime($match->created_at)); }}</td>
                                            <td class="text-dark fw-bolder text-hover-primary fs-6">{{ count($match->players) }}</td>
                                            <td>
                                                @if ($match->status >= 1) 
                                                    <span class="badge badge-light-success">Aberta</span>
                                                @else 
                                                    <span class="badge badge-light-info">Fechada</span>
                                                @endif
                                            </td>
                                            <td class="text-end">
                                                <a href="{{ url('/matchs', $match->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
                                                            <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <form class="form-delete" action="{{ url('/matchs', $match->id)}}" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                    <button type="submit" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                                <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                                <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--begin::Body-->
                </div>
            </div>
        </div>
    </div>
</div>
@include('modals.add-match')
<script>
    let modal = document.querySelector("#modal_add_match");

    function AddMatch(){
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
    }
</script>
@endsection


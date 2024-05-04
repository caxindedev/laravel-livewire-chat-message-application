@extends('templates.auth')

@section('title', 'NUTRICARE - AGENDAMENTO')


@section('left-menu')
    @include('templates.layout.parts.left-menu')
@endsection

@section('content')
<div class="page-content">
    <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Listagem das Turmas</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Turmas</a></li>
                                        <li class="breadcrumb-item active">Listagem das Turmas</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        @foreach ($turmas as $turma)
                            <div class="col-xxl-4 col-12">
                                <div class="card card-overlay">

                                    <img class="card-img img-fluid" src="{{ $turma->fotografia ?? 'assets/images/small/img-12.jpg' }}" alt="Card image">
                                    <div class="card-img-overlay p-0 d-flex flex-column">
                                        <div class="card-header bg-transparent">
                                            <h4 class="card-title text-white mb-0">{{ $turma->curso->nome }}</h4>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text text-white mb-2"> {{ $turma->data_inicio }} - {{ $turma->data_termino }}</p>
                                            <p class="card-text">
                                                <small class="text-white">{{ $turma->created_at }}</small>
                                            </p>
                                        </div>
                                        <div class="card-footer bg-transparent text-center">
                                            <a href="javascript:void(0);" class="link-light">Mais <i class="ri-arrow-right-s-line align-middle ms-1 lh-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        @endforeach

                    </div>

                </div>
            </div>

@endsection

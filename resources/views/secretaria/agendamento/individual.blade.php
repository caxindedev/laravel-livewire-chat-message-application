@extends('templates.auth')

@section('title', 'NUTRICARE - BEM VINDO')


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
                        <h4 class="mb-sm-0">Agendar Atividade</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Agendamento</a></li>
                                <li class="breadcrumb-item active">Individual</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <div class="flex-shrink-0">

                            </div>
                        </div><!-- end card header -->

                        <div class="card-body">

                            <div class="live-preview">

                                {{ session('message') }}
                                @if (session('message'))
                                    <div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show"
                                        role="alert">
                                        <i class="ri-notification-off-line label-icon"></i><strong>Successo</strong>
                                        {{ session('message') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('agenda.store') }}">
                                    @csrf
                                    <div class="row">
                                        <!--end col-->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="ForminputState" class="form-label">Paciente</label>
                                                <select id="ForminputState" name="aluno_id" class="form-select" data-choices
                                                    data-choices-sorting="true">
                                                    @foreach ($alunos as $aluno)
                                                        <option value="{{ $aluno->id }}">{{ $aluno->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="start" class="form-label">Data</label>
                                                <input type="date" name="start" class="form-control" id="data_marcar">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="atividade_agenda" class="form-label">Atividade</label>
                                                <input type="text" name="title" required class="form-control"
                                                    id="atividade_agenda">
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="ForminputState" class="form-label">Cor</label>
                                                <select id="ForminputState" name="color" class="form-select" data-choices data-choices-sorting="true">
                                                    <option value="#ffa500"><span style="background-color: #ffa500;">Amarelo</span></option>
                                                    <option value="#0000ff"><span style="background-color: #0000ff">Azul</span></option>
                                                    <option value="#ff0000"><span style="background-color: #ff0000">Vermelho</span></option>
                                                    <option value="#3cb371"><span style="background-color: #3cb371">Verde</span></option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="descricao_agenda" class="form-label">Descrição</label>
                                                <textarea id="descricao_agenda" rows="5" name="descricao" class="form-control">

                                                        </textarea>
                                            </div>
                                        </div>
                                        <!--end col-->



                                        <div class="col-lg-12">
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-primary">Enviar Dados</button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->

            </div>
            <!--end row-->
        </div>
    </div>
@endsection

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
                                <h4 class="mb-sm-0">Criar Turma</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Turma</a></li>
                                        <li class="breadcrumb-item active">Nova Turma</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Nova Turma</h4>
                                    <div class="flex-shrink-0">

                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">

                                    <div class="live-preview">
                                        <form method="POST" action="{{ route('turma.store') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="lastNameinput" class="form-label">Nome</label>
                                                        <input type="text" name="nome" required class="form-control"  id="lastNameinput">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="ForminputState" class="form-label">Curso</label>
                                                        <select id="ForminputState" required name="curso_id" class="form-select" data-choices data-choices-sorting="true">
                                                            @foreach ($cursos as $curso)
                                                                <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="lastNameinput" class="form-label">Banner</label>
                                                        <input type="file" name="fotografia" required class="form-control"  id="lastNameinput">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="compnayNameinput" class="form-label">Data de Início</label>
                                                        <input type="date" name="data_inicio" required class="form-control"  id="compnayNameinput">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="phonenumberInput" class="form-label">Data de Término</label>
                                                        <input type="date" name="data_termino" required class="form-control"  id="phonenumberInput">
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

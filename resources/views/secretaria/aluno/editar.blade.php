@extends('templates.auth')

@section('title', 'NUTRICARE - BEM VINDO')


@section('left-side-menu')
    @include('templates.layout.parts.left-menu')
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Editar Paciente</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pacientes</a></li>
                                <li class="breadcrumb-item active">Novo Paciente</li>
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
                            <h4 class="card-title mb-0 flex-grow-1">Novo Paciente</h4>
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
                                <form method="POST" action="{{ route('aluno.update', $aluno->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstNameinput" class="form-label">Nome Completo</label>
                                                <input type="text" name="nome" value="{{ $aluno->user->name }}" required class="form-control"
                                                    id="firstNameinput">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="ForminputState" class="form-label">Genero</label>
                                                <select id="ForminputState" name="genero" class="form-select" data-choices
                                                    data-choices-sorting="true">
                                                    <option selected>Masculino</option>
                                                    <option>Feminino</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="lastNameinput" class="form-label">Data de Nascimento</label>
                                                <input type="date" name="data_nascimento" value="{{ $aluno->data_nascimento }}" class="form-control" id="lastNameinput">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="compnayNameinput" class="form-label">Email</label>
                                                <input type="email" name="email" value="{{ $aluno->user->email }}" required class="form-control"
                                                    id="compnayNameinput">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="phonenumberInput" class="form-label">Telefone</label>
                                                <input type="tel" max="9" maxlength="9" name="telefone" value="{{ $aluno->telefone }}" required
                                                    class="form-control" id="phonenumberInput">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="emailidInput" class="form-label">Whatsapp</label>
                                                <input type="tel" max="9" maxlength="9" value="{{ $aluno->whatsapp }}" name="whatsapp"
                                                    class="form-control" id="emailidInput">
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

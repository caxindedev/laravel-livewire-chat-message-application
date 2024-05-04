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
                                <h4 class="mb-sm-0">Editar Empresa</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Empresa</a></li>
                                        <li class="breadcrumb-item active">Editar Empresa</li>
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
                                    <h4 class="card-title mb-0 flex-grow-1"> Empresa</h4>
                                    <div class="flex-shrink-0">

                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">

                                    <div class="live-preview">
                                        <form method="POST" action="{{ route('empresa.update', $empresa->id)}}">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="firstNameinput" class="form-label">Nome da Empresa</label>
                                                        <input type="text" name="nome" value="{{ $empresa->nome }}" required class="form-control"  id="firstNameinput">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="lastNameinput" class="form-label">Número de Identificaçãao Fiscal - NIF</label>
                                                        <input type="text" name="nif" value="{{ $empresa->nif }}" class="form-control"  id="lastNameinput">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="compnayNameinput" class="form-label">Email</label>
                                                        <input type="email" name="email" value="{{ $empresa->email }}" required class="form-control"  id="compnayNameinput">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="phonenumberInput" class="form-label">Telefone</label>
                                                        <input type="tel" name="telefone" value="{{ $empresa->telefone }}" max="9" maxlength="9" required class="form-control"  id="phonenumberInput">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="emailidInput" class="form-label">Endereço</label>
                                                        <input type="text" name="endereco" value="{{ $empresa->endereco }}" class="form-control"  id="emailidInput">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-primary">Salvar Dados</button>
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

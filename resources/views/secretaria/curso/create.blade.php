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
                                <h4 class="mb-sm-0">Criar Curso</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Curso</a></li>
                                        <li class="breadcrumb-item active">Nova Curso</li>
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
                                    <h4 class="card-title mb-0 flex-grow-1">Nova Curso</h4>
                                    <div class="flex-shrink-0">

                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">

                                    <div class="live-preview">
                                        <form method="POST" action="{{ route('curso.store') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="firstNameinput" class="form-label">Nome do Curso</label>
                                                        <input type="text" name="nome" required class="form-control"  id="firstNameinput">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="lastNameinput" class="form-label">Fotografia</label>
                                                        <input type="file" name="fotografia" class="form-control"  id="lastNameinput">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="compnayNameinput" class="form-label">Descrição</label>
                                                        <textarea rows="5" name="descricao" class="form-control">

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

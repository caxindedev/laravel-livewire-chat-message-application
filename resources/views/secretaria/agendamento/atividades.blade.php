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
                                <h4 class="mb-sm-0">Atividades Agendadas</h4>
o
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Agendamento</a></li>
                                        <li class="breadcrumb-item active">Atividades Agendadas</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="live-preview">
                                        <form method="post" action="{{ route('aluno.search') }}">
                                            @csrf
                                            <div class="row row-cols-lg-auto g-3 align-items-center">
                                                <div class="col-12">
                                                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Nome</label>
                                                    <div class="input-group">
                                                        <input type="text" name="nome" class="form-control" id="inlineFormInputGroupUsername" placeholder="Nome">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Data</label>
                                                    <div class="input-group">
                                                        <input type="date" name="email" class="form-control" id="inlineFormInputGroupUsername" placeholder="Email">
                                                    </div>
                                                </div>


                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary">Pesquisar</button>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </form>
                                    </div>
                                    <div class="d-none code-view">

                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div> <!-- end col -->
                    </div><!-- end row -->


                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">


                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="table-responsive table-card">
                                            <table class="table align-middle table-nowrap table-striped-columns mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col">Nome Completo</th>
                                                        <th scope="col">Data</th>
                                                        <th scope="col">Atividade</th>
                                                        <th scope="col">Descricao</th>
                                                        <th scope="col" style="width: 150px;">Opções</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($agendamentos as $agendamento)
                                                    <tr>
                                                        <td>{{ $agendamento->aluno_id }}</td>
                                                        <td>{{ $agendamento->data }}</td>
                                                        <td>{{ $agendamento->atividade }}</td>
                                                        <td>{{ $agendamento->descricao }}</td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-map-pin-line"></i></button>
                                                            <form class="btn btn-danger btn-icon waves-effect waves-light" action="{{ route('agendamento.destroy', $agendamento) }}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-icon waves-effect waves-light">
                                                                    <i class="ri-delete-bin-5-line"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                </div>
            </div>

@endsection

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
                                <h4 class="mb-sm-0">Empresas Registadas</h4>
o
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Empresas</a></li>
                                        <li class="breadcrumb-item active">Empresas Registadas</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
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
                                                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Email</label>
                                                    <div class="input-group">
                                                        <input type="text" name="email" class="form-control" id="inlineFormInputGroupUsername" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Telefone</label>
                                                    <div class="input-group">
                                                        <input type="text" name="telefone" class="form-control" id="inlineFormInputGroupUsername" placeholder="Telefone">
                                                    </div>
                                                </div>
                                                <!--end col-->


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
                                                        <th scope="col">Nome </th>
                                                        <th scope="col">NIF</th>
                                                        <th scope="col">Telefone</th>
                                                        <th scope="col">Endereço</th>
                                                        <th scope="col" style="width: 150px;">Opções</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($empresas as $empresa)
                                                    <tr>
                                                        <td>{{ $empresa->nome }}</td>
                                                        <td>{{ $empresa->email }}</td>
                                                        <td>{{ $empresa->telefone }}</td>
                                                        <td>{{ $empresa->endereco }}</td>
                                                        <td>
                                                            <a href="{{ route('empresa.show', $empresa)}}" class="btn btn-primary btn-icon waves-effect waves-light">
                                                                <i class="ri-map-pin-line"></i>
                                                            </a>
                                                            <form class="btn btn-danger btn-icon waves-effect waves-light" action="{{ route('empresa.destroy', $empresa) }}" method="post">
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

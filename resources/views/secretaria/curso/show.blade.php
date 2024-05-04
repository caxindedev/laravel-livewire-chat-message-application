@extends('templates.auth')

@section('title', 'NUTRICARE - BEM VINDO')


@section('left-menu')
    @include('templates.layout.parts.left-menu')
@endsection

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="profile-foreground position-relative mx-n4 mt-n4">
            <div class="profile-wid-bg">
                <img src="assets/images/profile-bg.jpg" alt="" class="profile-wid-img">
            </div>
        </div>
        <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
            <div class="row g-4">
                <div class="col-auto">
                    <div class="avatar-lg">
                        <img src="{{ url('assets/images/users/avatar-1.jpg') }}" alt="user-img" class="img-thumbnail rounded-circle">
                    </div>
                </div>
                <!--end col-->
                <div class="col">
                    <div class="p-2">
                        <h3 class="text-white mb-1">{{ $curso->nome }}</h3>
                        <p class="text-white text-opacity-75">  </p>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>

        <div class="row">
            <div class="col-12">
                <div>
                    <div class="d-flex profile-wrapper">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab" aria-selected="true">
                                    <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Visao Geral</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#documents" role="tab" aria-selected="false" tabindex="-1">
                                    <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Múdulos</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#documents" role="tab" aria-selected="false" tabindex="-1">
                                    <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Aulas</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#documents" role="tab" aria-selected="false" tabindex="-1">
                                    <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Ferramentas</span>
                                </a>
                            </li>
                        </ul>
                        <div class="flex-shrink-0">
                            <a href="" class="btn btn-info"><i class="ri-edit-box-line align-bottom"></i> Editar</a>
                        </div>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content pt-4 text-muted">
                        <div class="tab-pane active show" id="overview-tab" role="tabpanel">
                            <div class="row">


                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">Info.</h5>
                                            <div class="table-responsive">
                                                <table class="table table-borderless mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Curso :</th>
                                                            <td class="text-muted">{{ $curso->nome }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Data de Criação :</th>
                                                            <td class="text-muted">{{ $curso->created_at }}</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">Descrição do Curso</h5>
                                            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, at tempore asperiores blanditiis omnis sequi debitis laborum distinctio eligendi! Fugit saepe libero velit dignissimos odio, nostrum delectus inventore iure cumque? </p>
                                            <div class="row">

                                                <div class="col-6 col-md-4">
                                                    <div class="d-flex mt-4">
                                                        <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                            <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                                <i class="ri-global-line"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div><!-- end card -->

                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>

                        <!--end tab-pane-->
                        <div class="tab-pane fade" id="documents" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <h5 class="card-title flex-grow-1 mb-0">Colaboradores</h5>
                                        <div class="flex-shrink-0">
                                            <!-- Default Modals -->
                                            <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#colaboradorModal">Adicionar</button>
                                            <div id="colaboradorModal" class="modal fade" tabindex="-1" aria-labelledby="colaboradorModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="colaboradorModalLabel">Adicionar Colaborador</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                                                        </div>
                                                        <form method="POST" action="{{ route('aluno.store') }}">
                                                            @csrf
                                                            <input type="hidden" name="empresa_id" value="">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="firstNameinput" class="form-label">Nome Completo</label>
                                                                        <input type="text" name="nome" required class="form-control"  id="firstNameinput">
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="ForminputState" class="form-label">Genero</label>
                                                                        <select id="ForminputState" name="genero" class="form-select" data-choices data-choices-sorting="true">
                                                                            <option selected>Masculino</option>
                                                                            <option>Feminino</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="lastNameinput" class="form-label">Data de Nascimento</label>
                                                                        <input type="date" name="data_nascimento" class="form-control"  id="lastNameinput">
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="compnayNameinput" class="form-label">Email</label>
                                                                        <input type="email" name="email" required class="form-control"  id="compnayNameinput">
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="phonenumberInput" class="form-label">Telefone</label>
                                                                        <input type="tel" max="9" maxlength="9" name="telefone" required class="form-control"  id="phonenumberInput">
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="emailidInput" class="form-label">Whatsapp</label>
                                                                        <input type="tel" max="9" maxlength="9" name="whatsapp" class="form-control"  id="emailidInput">
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
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="table-responsive">
                                                <table class="table table-borderless align-middle mb-0">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th scope="col">Nome Completo</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Telefone</th>
                                                            <th scope="col">Whatsapp</th>
                                                            <th scope="col">Opcoes</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>


                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="text-center mt-3">
                                                <a href="javascript:void(0);" class="text-info"><i class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load more </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end tab-pane-->
                    </div>
                    <!--end tab-content-->
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

    </div><!-- container-fluid -->
</div>

@endsection

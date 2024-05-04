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
                                <h4 class="mb-sm-0">Cursos</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Cursos</a></li>
                                        <li class="breadcrumb-item active">Listagem dos Cursos</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        @foreach ($cursos as $curso)
                            <div class="col-xxl-4 col-12">
                                <div class="card card-overlay">

                                    <img class="card-img img-fluid" src="{{ $curso->fotografia? $curso->fotografia :'assets/images/small/img-12.jpg' }}" alt="Card image">
                                    <div class="card-img-overlay p-0 d-flex flex-column">
                                        <div class="card-header bg-transparent">
                                            <h4 class="card-title text-white mb-0">{{ $curso->nome }}</h4>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text text-white mb-2"> {{ $curso->descricao }} </p>
                                            <p class="card-text">
                                                <small class="text-white">{{ $curso->created_at }}</small>
                                            </p>
                                        </div>
                                        <div class="card-footer bg-transparent text-center">
                                            <a href="{{ route('curso.show', $curso) }}" class="link-light">Ver mais <i class="ri-arrow-right-s-line align-middle ms-1 lh-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        @endforeach

                    </div>

                </div>
            </div>

@endsection

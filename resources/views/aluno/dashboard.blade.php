@extends('templates.aluno')


@section('content-aluno')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title mb-2">Conheça-me</h5>
                                <p class="card-text text-muted mb-0">Sou Nutriciosta Clínica e Desportiva, há 20 anos, atuo no combate à obesidade, unindo os fundamendos da nutrição funcional aos conhcimentos que adquiri na Pós-graduação em medicina Tradicional Chinesa. Defendo o consumo de alimentos conciente, além do prazer de comer bem e saudável.
                                    Tenho conduzido os meus mais de 5 mil pacientes e alunos de uma forma simples e prática rumo à saúde plena.
                                </p> <br>
                                <p class="card-text text-muted mb-0">
                                    Da minha própria experiência da gestação aos 40 tive a necessidade de aprofundar os meus conhecimentos sobre o papel das hormonas na gestão do peso, do comportamento e das emoções através da formação em Endocrinologia e Nutrição.
                                </p><br>
                                <p class="card-text text-muted mb-0">
                                    Desta formação, aliada à minha vasta experiência profissional nasceu o Método de Regulação Hormonal. Um Método que visa promover através da alimentação funcional a regulação das hormonas associadas directa ou indiretamente com o comportamento alimentar e a gestão energética e deste modo favorecer a queima de gorgura corporal e o equilíbrio físico e emocional.
                                </p>
                            </div>
                            <div class="card-footer">
                                <p class="card-text"><small class="text-muted">Dra Scheila Pagés</small></p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img class="rounded-end img-fluid h-100 object-fit-cover" src="{{ url('assets/images/small/dra.png') }}" alt="Card image">
                        </div>
                    </div>
                </div><!-- end card -->
            </div>

        </div>

        <div class="row">
            <div class="col-12">

                <div class="card-group">
                    <div class="card mb-4">
                        <img class="card-img-top img-fluid" src="{{ url('assets/images/small/dra-scheila.png') }}" alt="Card image cap">
                    </div><!-- end card -->
                    <div class="card mb-4">
                        <img class="card-img-top img-fluid" src="{{ url('assets/images/small/nutricare1.png') }}" alt="Card image cap">
                    </div><!-- end card -->
                    <div class="card mb-4">
                        <img class="card-img-top img-fluid" src="{{ url('assets/images/small/regulacao.png') }}" alt="Card image cap">
                    </div><!-- end card -->
                </div><!-- end card group-->
            </div><!-- end col -->
        </div>

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->


@endsection

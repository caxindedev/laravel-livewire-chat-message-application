<?php

use App\Http\Livewire\Chat\CreateChat;
use App\Http\Livewire\Chat\Main;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AlunoController,
    DashboardController,
    MedidaController,
    HistoricoController,
    PlanoController,
    EmpresaController,
    TurmaController,
    CursoController,
    AgendaController,
    LivroController,
    AulaController,
    FotografiaController,
};

Route::redirect('/', '/login');
//livewire routes


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/users', CreateChat::class)->name('users');
    Route::get('/chat{key?}', Main::class)->name('chat');


    Route::get('/secretaria/dashboard', [DashboardController::class, 'secretariaDashboard'])->name('dashboard.secretaria');

    Route::get('/principal/dashboard', [DashboardController::class, 'principalDashboard'])->name('dashboard.principal');

    Route::get('/chat', [DashboardController::class, 'chatDashboard'])->name('dashboard.chat');

    Route::get('/empresa/dashboard', [DashboardController::class, 'empresaDashboard'])->name('dashboard.empresa');

    Route::get('/aluno/dashboard', [DashboardController::class, 'alunoDashboard'])->name('dashboard.aluno');

    // Routes AlunoController
    Route::resource('aluno', AlunoController::class);
    Route::post('/aluno/filtrar', [AlunoController::class, 'pesquisar'])->name('aluno.search');


    Route::resource('empresa', EmpresaController::class);

    Route::resource('curso', CursoController::class);


    Route::resource('turma', TurmaController::class);

    Route::get('/aluno/dados-pessoais', [AlunoController::class, 'dadosPessoais'])->name('aluno.dadosPessoais');

    Route::get('/aluno/medidas/instrucoes', [AlunoController::class, 'instrucoes'])->name('aluno.instrucoes');

    Route::get('/aluno/medida/create', [MedidaController::class, 'create'])->name('aluno.medida.create');

    Route::get('/aluno/historico/create', [HistoricoController::class, 'create'])->name('aluno.historico.create');

    Route::get('/aluno/meu-plano', [PlanoController::class, 'get'])->name('aluno.plano');

    # Route::get('/agenda', [AgendaController::class,'index'])->name('secretaria.agenda');

    /* +++++++++++++++++++++++++ */


    Route::get('/aluno/chat', [AlunoController::class, 'chat'])->name('aluno.chat');

    Route::get('/principal/chat', [AlunoController::class, 'chatP'])->name('aluno.chatP');

    Route::prefix('aluno')->group(function () {
        Route::get('/ebooks/suplementos/fase1', [LivroController::class, 'suplementofase1'])->name('aluno.suplementofase1');

        Route::get('/ebooks/receitas/fase1', [LivroController::class, 'receitasfase1'])->name('aluno.receitasfase1');

        Route::get('/mentoria/modulo1/aula1', [AulaController::class, 'aula1'])->name('aluno.mentoria.modulo1.aula1');
        Route::get('/mentoria/modulo1/aula2', [AulaController::class, 'aula2'])->name('aluno.mentoria.modulo1.aula2');
        Route::get('/mentoria/modulo1/aula3', [AulaController::class, 'aula3'])->name('aluno.mentoria.modulo1.aula3');
        Route::get('/mentoria/modulo1/aula4', [AulaController::class, 'aula4'])->name('aluno.mentoria.modulo1.aula4');
        Route::get('/mentoria/modulo1/aula5', [AulaController::class, 'aula5'])->name('aluno.mentoria.modulo1.aula5');

        Route::get('/mentoria/modulo2/aula1', [AulaController::class, 'modulo2Aula1'])->name('aluno.mentoria.modulo2.aula1');
        Route::get('/mentoria/modulo2/aula2', [AulaController::class, 'modulo2Aula2'])->name('aluno.mentoria.modulo2.aula2');
        Route::get('/mentoria/modulo2/aula3', [AulaController::class, 'modulo2Aula3'])->name('aluno.mentoria.modulo2.aula3');
        Route::get('/mentoria/modulo2/aula4', [AulaController::class, 'modulo2Aula4'])->name('aluno.mentoria.modulo2.aula4');
        Route::get('/mentoria/modulo2/aula5', [AulaController::class, 'modulo2Aula5'])->name('aluno.mentoria.modulo2.aula5');

        Route::get('/aluno/agenda/calendário-de-grupo', [AlunoController::class, 'calendarioGrupo'])->name('aluno.agenda.grupo');
    });

    Route::get('/secretaria/agenda/grupo', [AlunoController::class, 'agendaGrupo'])->name('secretaria.agendaGrupo');
    Route::get('/secretaria/agenda/individual', [AlunoController::class, 'agendaIndividual'])->name('secretaria.agendaIndividual');

    Route::get('/principal/alunos', [AlunoController::class, 'alunos'])->name('principal.alunos');
    Route::get('/principal/alunos/medidas', [MedidaController::class, 'indexAluno'])->name('principal.medidas');

    Route::get('/principal/turmas/particulares', [TurmaController::class, 'particulares'])->name('turma.particulares');
    Route::get('/principal/turmas/corporate', [TurmaController::class, 'corporate'])->name('turma.corporate');

    Route::get('/principal/agenda/individual', [TurmaController::class, 'individual'])->name('principal.agenda.individual');
    Route::get('/principal/agenda/grupo', [TurmaController::class, 'grupo'])->name('principal.agenda.grupo');

    Route::get('/empresa/turmas', [TurmaController::class, 'empresa'])->name('empresa.turmas');

    // Routes AlunoController

    Route::resource('fotografia', FotografiaController::class);

    Route::resource('medida', MedidaController::class);

    Route::resource('plano', PlanoController::class);

    Route::resource('agenda', AgendaController::class);
});

Route::fallback(function () {
    return view('404');
});

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

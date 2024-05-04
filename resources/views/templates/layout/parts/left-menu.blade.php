<ul class="navbar-nav" id="navbar-nav">
    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarDashboards" role="button" aria-expanded="false"
            aria-controls="sidebarDashboards">
            <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Início</span>
        </a>

    </li> <!-- end Dashboard Menu -->
    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false"
            aria-controls="sidebarApps">
            <i class="ri-apps-2-line"></i> <span data-key="t-apps">Pacientes</span>
        </a>
        <div class="collapse menu-dropdown" id="sidebarApps">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="{{ route('aluno.create') }}" class="nav-link" data-key="t-calendar"> Novo Paciente </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('aluno.index') }}" class="nav-link" data-key="t-chat">
                        Listar Pacientes </a>
                </li>

            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
            aria-expanded="false" aria-controls="sidebarLayouts">
            <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Empresas
        </a>
        <div class="collapse menu-dropdown" id="sidebarLayouts">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="{{ route('empresa.create') }}" class="nav-link" data-key="t-horizontal">Nova Empresa</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('empresa.index') }}" class="nav-link" data-key="t-detached">Listar Empresas</a>
                </li>

            </ul>
        </div>
    </li> <!-- end Dashboard Menu -->

    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button"
            aria-expanded="false" aria-controls="sidebarIcons">
            <i class="ri-compasses-2-line"></i> <span data-key="t-icons">Cursos</span>
        </a>
        <div class="collapse menu-dropdown" id="sidebarIcons">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="{{ route('curso.create') }}" class="nav-link" data-key="t-remix">Novo Curso</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('curso.index') }}" class="nav-link" data-key="t-boxicons">Listar Cursos</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false"
            aria-controls="sidebarAuth">
            <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Turmas</span>
        </a>
        <div class="collapse menu-dropdown" id="sidebarAuth">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="{{ route('turma.create') }}" class="nav-link" role="button" aria-expanded="false"
                        aria-controls="sidebarSignIn" data-key="t-signin">
                        Nova Turma
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('turma.index') }}" class="nav-link" role="button" aria-expanded="false"
                        aria-controls="sidebarSignUp" data-key="t-signup">
                        Lisar Turmas
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse"
            role="button" aria-expanded="false" aria-controls="sidebarForms">
            <i class="ri-file-list-3-line"></i> <span data-key="t-forms">Agenda Individual</span>
        </a>
        <div class="collapse menu-dropdown" id="sidebarForms">
            <ul class="nav nav-sm flex-column">

                <li class="nav-item">
                    <a href="{{ route('agenda.create') }}" class="nav-link"
                        data-key="t-form-select"> Agendar Atividades </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('agenda.index') }}" role="button" aria-expanded="false">
                        <i class="ri-calendar-todo-fill"></i> <span data-key="t-forms">Calendario</span>
                    </a>
                </li>

            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a href="{{ route('agenda.index') }}" class="nav-link" data-key="t-basic-elements">Ver Atividades</a>
    </li>

</ul>

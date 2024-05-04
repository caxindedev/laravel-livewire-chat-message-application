document.addEventListener('DOMContentLoaded', function () {

    const calendarEl = document.getElementById('calendar')
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: {
            code: 'pt',
            buttonText: {
                prev: 'Anterior',
                next: 'Proximo',
                PrevYear: 'Ano Anterior',
                nextYear: 'Proximo ano',
                year: 'Ano',
                today: 'Hoje',
                month: 'Mes',
                week: 'Semana',
                day: 'Dia',
                list: 'Lista',
            },
        }, // the initial locale. if not specified, uses the first one
        start: 'title', // will normally be on the left. if RTL, will be on the right
        center: '',
        end: 'today prev,next', // will normally be on the right. if RTL, will be on the left
        today: 'today',
        month: 'month',
        week: 'week',
        day: 'Dia',
        list: 'list',
        themeSystem: 'bootstrap5',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
        editable: true,
        eventLimit: true,
        editable: true,
        eventClick: function (info) {
            info.jsEvent.preventDefault();
            $('#agendamentoModalLabel').text(info.event.title);
            $('#dataInicio').val(info.event.start.toLocaleString('pt'));
            $('#evento').html(info.event.extendedProps.descricao);
            $('#agendamentoModal').modal('show');
        },
        eventMouseEnter: function (info) {
            info.jsEvent.preventDefault();
            $(info.el).popover({

                content: `<div class='d-flex mb-4 align-items-center'>` +
                    `<div class='flex-shrink-0'>` +
                    `<img src='` + info.event.extendedProps.foto + `' alt='' class='avatar-sm rounded-circle'>` +
                    `</div>` +
                    ` <div class='flex-grow-1 ms-2'>` +
                    `<h5 class='card-title mb-1'>` + info.event.extendedProps.nome + `</h5>` +
                    `<p class='text-muted mb-0'>` + info.event.extendedProps.regra + `</p>` +
                    `</div>` +
                    `</div>` +
                    `<h6 class='mb-1'>` + info.event.title + `</h6>` +
                    `<p class='card-text text-muted'>` + info.event.extendedProps.descricao + `</p>`,

                trigger: 'hover',
                placement: 'top',
                container: 'body',
                html: true
            });
            $(info.el).popover('show');
        },
        eventMouseLeave: function (info) {
            $(info.el).popover('dispose');
        },
        events: dados,

    })
    calendar.render()
})

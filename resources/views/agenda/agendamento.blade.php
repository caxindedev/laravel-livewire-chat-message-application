@extends('templates.auth')

@section('title', 'NUTRICARE - AGENDAMENTO')


@section('left-menu')
    @include('templates.layout.parts.left-menu')
@endsection

@section('content')
    <div class="row" style="margin-top: 100px;">
        <div class="col-12">
            <div class="row">

                <div class="col-xl-12">
                    <div class="card card-h-100">
                        <div class="card-body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
            <!--end row-->

            <div style='clear:both'></div>

            <!-- Add New Event MODAL -->
            <div class="modal show" id="event-agendamento" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-0">
                        <div class="modal-header p-3 bg-info-subtle">
                            <h5 class="modal-title" id="modal-title">Add Event</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form class="needs-validation" name="event-form" id="form-event" novalidate="">
                                <div class="text-end">
                                    <a href="#" class="btn btn-sm btn-soft-primary" id="edit-event-btn"
                                        data-id="new-event" onclick="editEvent(this)" role="button" hidden="true">Edit</a>
                                </div>
                                <div class="event-details">
                                    <div class="d-flex mb-2">
                                        <div class="flex-grow-1 d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3">
                                                <i class="ri-calendar-event-line text-muted fs-16"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="d-none fw-semibold mb-0" id="event-start-date-tag"></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="flex-shrink-0 me-3">
                                            <i class="ri-time-line text-muted fs-16"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="d-block fw-semibold mb-0"><span id="event-timepicker1-tag"></span> -
                                                <span id="event-timepicker2-tag"></span>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="flex-shrink-0 me-3">
                                            <i class="ri-map-pin-line text-muted fs-16"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="d-block fw-semibold mb-0"> <span id="event-location-tag"></span></h6>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="flex-shrink-0 me-3">
                                            <i class="ri-discuss-line text-muted fs-16"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="d-none text-muted mb-0" id="event-description-tag"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row event-form">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Type</label>
                                            <div class="choices" data-type="select-one" tabindex="0" role="listbox"
                                                aria-haspopup="true" aria-expanded="false">
                                                <div class="choices__inner"><select
                                                        class="form-select d-block choices__input" name="category"
                                                        id="event-category" required="" hidden="" tabindex="-1"
                                                        data-choice="active">
                                                        <option value="bg-danger-subtle"
                                                            data-custom-properties="[object Object]">Danger</option>
                                                    </select>
                                                    <div class="choices__list choices__list--single">
                                                        <div class="choices__item choices__item--selectable" data-item=""
                                                            data-id="1" data-value="bg-danger-subtle"
                                                            data-custom-properties="[object Object]" aria-selected="true">
                                                            Danger</div>
                                                    </div>
                                                </div>
                                                <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                                    <div class="choices__list" role="listbox">
                                                        <div id="choices--event-category-item-choice-1"
                                                            class="choices__item choices__item--choice is-selected choices__item--selectable is-highlighted"
                                                            role="option" data-choice="" data-id="1"
                                                            data-value="bg-danger-subtle"
                                                            data-select-text="Press to select" data-choice-selectable=""
                                                            aria-selected="true">Danger</div>
                                                        <div id="choices--event-category-item-choice-2"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="2"
                                                            data-value="bg-dark-subtle" data-select-text="Press to select"
                                                            data-choice-selectable="">Dark</div>
                                                        <div id="choices--event-category-item-choice-3"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="3"
                                                            data-value="bg-info-subtle" data-select-text="Press to select"
                                                            data-choice-selectable="">Info</div>
                                                        <div id="choices--event-category-item-choice-4"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="4"
                                                            data-value="bg-primary-subtle"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            Primary</div>
                                                        <div id="choices--event-category-item-choice-5"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="5"
                                                            data-value="bg-success-subtle"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            Success</div>
                                                        <div id="choices--event-category-item-choice-6"
                                                            class="choices__item choices__item--choice choices__item--selectable"
                                                            role="option" data-choice="" data-id="6"
                                                            data-value="bg-warning-subtle"
                                                            data-select-text="Press to select" data-choice-selectable="">
                                                            Warning</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="invalid-feedback">Please select a valid event category</div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Event Name</label>
                                            <input class="form-control d-block" placeholder="Enter event name"
                                                type="text" name="title" id="event-title" required=""
                                                value="">
                                            <div class="invalid-feedback">Please provide a valid event name</div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label>Event Date</label>
                                            <div class="input-group">
                                                <input type="text" id="event-start-date"
                                                    class="form-control flatpickr flatpickr-input"
                                                    placeholder="Select date" readonly="readonly" required="">
                                                <span class="input-group-text"><i
                                                        class="ri-calendar-event-line"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-12" id="event-time">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Start Time</label>
                                                    <div class="input-group">
                                                        <input id="timepicker1" type="text"
                                                            class="form-control flatpickr flatpickr-input"
                                                            placeholder="Select start time" readonly="readonly">
                                                        <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label class="form-label">End Time</label>
                                                    <div class="input-group">
                                                        <input id="timepicker2" type="text"
                                                            class="form-control flatpickr flatpickr-input"
                                                            placeholder="Select end time" readonly="readonly">
                                                        <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="event-location">Location</label>
                                            <div>
                                                <input type="text" class="form-control d-block" name="event-location"
                                                    id="event-location" placeholder="Event location">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <input type="hidden" id="eventid" name="eventid" value="">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control d-block" id="event-description" placeholder="Enter a description" rows="3"
                                                spellcheck="false"></textarea>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-soft-danger" id="btn-delete-event"
                                        hidden="true"><i class="ri-close-line align-bottom"></i> Delete</button>
                                    <button type="submit" class="btn btn-success" id="btn-save-event">Add Event</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end modal dialog-->
            </div> <!-- end modal-->
            <!-- end modal-->
        </div>
    </div> <!-- end row-->

{{--
    <div class="modal fade" id="agendamentoModal" tabindex="-1" aria-labelledby="agendamentoModalLabel"
        aria-modal="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="agendamentoModalLabel">Agendamento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0);">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div>
                                    <label for="evento" class="form-label">Evento</label>
                                    <p class="form-control" id="evento"></p>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div>
                                            <label for="dataInicio" class="form-label">Data inicio</label>
                                            <input type="datatime" class="form-control" id="dataInicio">
                                        </div>
                                    </div>

                                </div>
                            </div><!--end col-->

                            <div class="col-lg-12">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancele</button>
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
@endsection

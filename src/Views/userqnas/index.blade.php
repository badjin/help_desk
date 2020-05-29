@extends('panichd::layout.user')

@include('panichd::shared.common')

@section('content')

    <style>
        .card {
            display: flex;
        }
    </style>
    <div id="filter_panel" class="card">
{{--    <div id="panel_log" class="card">--}}
        <div class="card-body">
            <div class="container">
                <div style="float: left; margin-top: 12px">
                    <h3 class="text-left" style="margin: 0px;">How to</h3>
                </div>
                <a href="{{ action('\PanicHD\PanicHD\Controllers\TicketsController@indexDirect') }}">
                    <button class="btn btn-primary float-right">Log A Ticket</button>
                </a>
            </div>
        </div>
    </div>

<!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true" style="margin-bottom: 20px">

    @foreach($qnas as $qna)
        <!-- Accordion card -->
        <div class="card">

            <!-- Card header -->
            <div class="card-header" style="margin-left: 270px; background-color: #e0e0e0" role="tab" id="{{ 'headingTwo' . $qna->id }}">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="{{ '#collapseTwo' . $qna->id }}"
                   aria-expanded="false" aria-controls="{{ 'collapseTwo' . $qna->id }}">
                    <h5 class="mb-0">
                        {{ $qna->question }} <i class="fas fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>

            <!-- Card body -->
            <div id="{{ 'collapseTwo' . $qna->id }}" class="collapse" role="tabpanel" aria-labelledby="{{ 'headingTwo' . $qna->id }}"
                 data-parent="#accordionEx1">
                <div class="card-body">
                    <div class="summernote-text-wrapper"> {!! $qna->answer !!} </div>
                </div>
            </div>

        </div>
        <!-- Accordion card -->
    @endforeach

</div>
<!-- Accordion wrapper -->
@endsection

@include('panichd::tickets.partials.summernote')
@extends($master)

@include('panichd::shared.common')

@section('content')

    <style>
        label {
            display: inline-block;
            margin: 10px;
        }

        .card {
            display: flex;
        }
    </style>

    <div id="filter_panel" class="card">
        <div class="card-body">
            <div class="container">
                <div style="float: left; margin-top: 12px">
                    <h3 class="text-left" style="margin: 0px;">Q&A</h3>
                </div>
                <form action="/panichd/qnas/{{ $qna->id }}" method="POST" class="float-right ml-1">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-primary float-right">Delete</button>
                </form>
                <div style="float: right">
                    <a href="/panichd/qnas/{{ $qna->id }}/edit">
                        <button class="btn btn-primary float-right">Edit</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div id="ticket-body" class="card-body">
            <label >{{ $qna->question }}</label>
            <div style="float: right">
                <small >Created at {{ $qna->created_at }}</small><br>
                <small >Updated at {{ $qna->updated_at }}</small><br>
            </div>
            <div class="border my-3 p-3">
                <div class="summernote-text-wrapper"> {!! $qna->answer !!} </div>
            </div>
        </div>
    </div>

@endsection

@include('panichd::tickets.partials.summernote')

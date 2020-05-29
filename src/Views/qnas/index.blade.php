@extends($master)

@include('panichd::shared.common')

@section('content')

    <style>
        .qnalist:hover {
            cursor: pointer;
            cursor: hand;
        }

        .card {
            display: flex;
        }
    </style>

    <div id="filter_panel" class="card">
        <div class="card-body">
            <div class="container">
                <div style="float: left; margin-top: 12px">
                    <h3 class="text-left" style="margin: 0px;">Top Questions</h3>
                </div>
                <div style="float: right">
                    <a href="/panichd/qnas/create">
                        <button class="btn btn-primary float-right">Create new</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <ul>
        @foreach($qnas as $qna)
            <div class="qnalist">
                <li style="list-style: none; color: black" class="border m-3 p-3">
                    <a href="/panichd/qnas/{{$qna->id}}">{{ $qna->question }}</a>
                    <small class="float-right">
                        Created at {{ $qna->created_at }}
                    </small>
                </li>
            </div>
        @endforeach
    </ul>

@endsection

{{--@section('footer')--}}
{{--    @include('panichd::tickets.show.scripts')--}}
{{--@append--}}

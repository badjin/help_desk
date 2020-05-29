@extends($master)

@include('panichd::shared.common')

@section('content')

    <style>
        input[type=text], textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: none;
            background-color: #e2e3e5;
        }

        .card {
            display: flex;
        }
    </style>

    <div id="filter_panel" class="card">
        <div class="card-body">
            <div class="container">
                <div style="float: left">
                    <h3 class="text-left" style="margin: 0px;">Edit Q&A</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div id="ticket-body" class="card-body">
            <form class="width:100%" action="/panichd/qnas/{{ $qna->id }}" method="POST">
                @method('PUT')
                @csrf
                <label class="block" for="title">Question</label>
                <input type="text" name="question" id="question" value="{{ old('question') ? old('question') : $qna->question }}" required><br><br>
                @error('question')
                <small class="text-red-700">{{ $message }}</small>
                @enderror
                <label class="block" for="title">Answer</label>
                <textarea class="form-control summernote-editor" name="answer" id="answer" cols="30" rows="10" required>{{ old('answer') ? old('answer') : $qna->answer }}</textarea><br>
                @error('answer')
                <small class="text-red-700">{{ $message }}</small>
                @enderror
                <button class="btn btn-primary float-right">Update</button>
            </form>
        </div>
    </div>

@endsection

@include('panichd::tickets.partials.summernote')


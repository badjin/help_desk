<?php

namespace PanicHD\PanicHD\Controllers;

use App\Http\Controllers\Controller;
use PanicHD\PanicHD\Models\Qna;

class QnasController extends Controller
{
    public function index() {

        $qnas = Qna::latest()->get();
        return view('panichd::qnas.index', [
            'qnas' => $qnas
        ]);
    }

    public function index4User() {

        $qnas = Qna::latest()->get();
        return view('panichd::qnas.user.index', [
            'qnas' => $qnas
        ]);
    }

    public function create() {
        return view('panichd::qnas.create');
    }

    public function store() {

        request()->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        $values = request(['question', 'answer']);

        $qna = Qna::create($values);

        return redirect()->action('\PanicHD\PanicHD\Controllers\QnasController@index');
    }

    public function show(Qna $qna) {

//        abort_unless(auth()->user()->owns($qna), 403);

        return view('panichd::qnas.show', [
            'qna'=>$qna
        ]);
    }

    public function edit(Qna $qna) {

//        abort_unless(auth()->user()->owns($qna), 403);

        return view('panichd::qnas.edit', [
            'qna'=>$qna
        ]);
    }

    public function update(Qna $qna) {

//        abort_unless(auth()->user()->owns($qna), 403);

        request()->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        $qna->update([
            'question' => request('question'),
            'answer' => request('answer')
        ]);
        return redirect()->action('\PanicHD\PanicHD\Controllers\QnasController@index');
    }

    public function destroy(Qna $qna) {

//        abort_unless(auth()->user()->owns($qna), 403);

        $qna->delete();
        return redirect()->action('\PanicHD\PanicHD\Controllers\QnasController@index');
    }
}

<?php

namespace PanicHD\PanicHD\Controllers;

use App\Http\Controllers\Controller;
use PanicHD\PanicHD\Models\Qna;

class UserQnasController extends Controller
{
    public function index() {

        $qnas = Qna::latest()->get();
        return view('panichd::userqnas.index', [
            'qnas' => $qnas
        ]);
    }
}

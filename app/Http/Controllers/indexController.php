<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index() {
        return view('index');
    }

    public function store(Request $request) {
        $qry = Student::insert([
            'fname' => $request->fname,
            'mname' => $request->mname,
            'lname' => $request->lname,
            'suffix' => $request->suffix,
            'gender' => $request->gender,
            'bdate' => $request->bdate,
        ]);
        return $qry ? redirect('/') : redirect('/');
    }
}

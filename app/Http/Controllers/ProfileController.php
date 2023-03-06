<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller {
    //
    public function index($nim = 0) {
        if ($nim != 'hanif' && $nim != 'trisinus') {
            return view('error', ['nim'=>$nim]);
        } else if ($nim == 'hanif') {
            return view('profileHanif');
        } else {
            return view('profileTrisinus');
        }
    }

}

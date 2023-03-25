<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller {
    //
    public function index($slug = 'slug') {
        $profile = Profile::getBySlug($slug);
        if($slug != 'hanif' && $slug != 'trisinus') {
            // return view('error', ['slug'=>$slug]);
            echo "<script>window.alert('error');</script>";
        } else if ($slug == 'hanif') {
            return view('profileHanif', ['profile' => $profile]);
        } else {
            return view('profileTrisinus', ['profile' => $profile]);
        }
    }
}


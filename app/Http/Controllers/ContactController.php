<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactformdata;
use Illuminate\Console\View\Components\Alert;
// use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $data = new Contactformdata;
            $data->fname = $request['fname'];
            $data->lname = $request['lname'];
            $data->number = $request['number'];
            $data->message = $request['message'];
            $data->save();
            return redirect()->back();
        }
}
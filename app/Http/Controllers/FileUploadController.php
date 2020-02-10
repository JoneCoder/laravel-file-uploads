<?php

namespace App\Http\Controllers;

use App\FileUpload;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    //return file upload view page
    public function index()
    {
        return view('welcome');
    }

    //Receive http Ajax form request than store the receive data
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:50000|mimes:jpeg,bmp,png,jpg,pdf'
        ]);
        $data = FileUpload::store($request);
        if ($data){
            return $data;
        }else{
            return false;
        }
    }
}

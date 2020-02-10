<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    public static function store($request)
    {
        if ($request->hasFile('file')){
            $fileExtension = $request->file->getClientOriginalExtension();
            $fileName = time().$fileExtension;
            $store = move_uploaded_file($request->file, public_path('uploads/'.$fileName));
            if ($store){
                $data = FileUpload::create([
                    'name'  => $fileName,
                    'type'  => $fileExtension
                ]);
                return $data;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}

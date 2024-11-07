<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;

trait UploadImageTrait
{

    public function uploadImage(UploadedFile $image, $folder = 'uploads'): string
    {
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path($folder), $imageName);

        return "$folder/$imageName";
    }


    public function deleteImage($path): void
    {
        $fullPath = public_path($path);
        if (file_exists($fullPath)) {
            unlink($fullPath);
        }
    }
}

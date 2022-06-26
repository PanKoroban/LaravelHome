<?php

namespace App\Services\Contract;

use Illuminate\Http\UploadedFile;

interface Upload
{
    public function UploadImage(UploadedFile $file);
}

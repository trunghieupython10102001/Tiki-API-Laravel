<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UploadController extends Controller {
    protected function getStoredImageURL(String $location) {
        return substr($location, strlen('public/'));
    }

    public function uploadFile(Request $request)
    {
        if (!$request->hasFile('image')) {
            
        }
        $image = $request -> file("image");
        $storeFolder = "public/images";
        $location = $image -> store($storeFolder);

        $path = asset('storage/' . $this->getStoredImageURL($location));
        return response() -> json([
            "status" => 200,
            "path" => $path
        ]);
    }
}

?>
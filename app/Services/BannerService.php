<?php

namespace App\Services;

use App\Models\Banner;

class BannerService {
    public function save($data) {
        Banner::updateOrCreate(['id' => $data['id']], $data);
    }

    public function save_image($file) {
        $dir = Banner::DEFAULT_IMG_BANNER_DIR;

        $ex = $file->guessClientExtension();

        if($file->move($dir, $file->getClientOriginalName())) return true;

        return false;
    }


}
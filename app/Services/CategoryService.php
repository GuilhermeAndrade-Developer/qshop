<?php 
namespace App\Services;

use App\Models\Category;

class CategoryService {
    public function save($data) {
        return Category::updateOrCreate(['id' => $data['id']], $data);
    }

    public function saveSubcategory($data) {
        Category::where('id', $data['id'])->update(['parent_id' => $data['parent_id']]);
    }

    public function editStatus($data) {
        Category::where('id', $data['id'])->update(['status' => $data['status']]);
    }

    public function save_image($file) {

        $dir = Category::DEFAULT_IMG_CATEGORY_DIR;

        $ex = $file->guessClientExtension();

        if($file->move($dir, $file->getClientOriginalName())) return true;

        return false;

    }
}
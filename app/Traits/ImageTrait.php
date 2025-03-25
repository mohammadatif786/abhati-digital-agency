<?php

namespace App\Traits;

trait ImageTrait
{
    public function storeUpdateImage($name, $oldImage = null)
    {
        if ($oldImage && file_exists(public_path('media/' . $oldImage))) {
            unlink(public_path('media/' . $oldImage));
        }

        $filename = time() . '-' . $name->getClientOriginalName();
        $name->move(public_path('media'), $filename);

        return $filename;
    }
}

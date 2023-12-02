<?php

function uploadImage($image)
{
    $imageName = rand() . '-' . $image->getClientOriginalName();
    $image->move('images', $imageName);
    $imagePath = 'images/' . $imageName;
    return $imagePath;
}

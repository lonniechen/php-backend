<?php
class ColorController extends DatabaseInterface
{
    public function getAllColors()
    {
        $colors = $this->repo->getAllColors();
        var_dump($colors);
    }

    public function getColorById($id){
        $color = $this->repo->getColorById($id);
        var_dump($color);
    }
}

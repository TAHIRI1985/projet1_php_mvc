<?php

namespace App\Entity;

use Core\Entity\Entity;

class ArticleEntity extends Entity

{

    public function getUrl()
    {
        return 'index.php?p=article&id=' . $this->id;
    }
    public function getImage1()
    {
        return 'src=' . "$this->image1_Article";
    }
    public function getImage2()
    {
        return 'src=' . "$this->image2_Article";
    }
    public function getDescription()
    {
        return  $this->description_Article;
    }

    public function getQuantity()
    {
        return 'Q:' . $this->Quantité;
    }
    public function getPrix()
    {
        return 'prix:' . $this->prix_Article . ' € ';
    }
}

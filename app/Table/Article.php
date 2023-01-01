<?php

namespace App\Table;

use App\App;

class Article extends Table
{

    protected static $table = 'articles';



    public static function find($id)
    {
        return self::query("SELECT articles.id , articles.nom_Article, articles.description_Article,articles.image1_Article,
        articles.image2_Article, 
        articles.Quantité,articles.prix_Article, categories.nom_Categorie as categorie
        FROM  articles 
        LEFT  JOIN categories
        ON  id_categories=categories.id
       WHERE articles.id=?
        
         ", [$id], true);
    }










    public static function getLast()
    {
        return self::query("SELECT articles.id , articles.nom_Article, articles.description_Article,articles.image1_Article,
                                     articles.image2_Article, 
                                     articles.Quantité,articles.prix_Article, categories.nom_Categorie as categorie
                                     FROM  articles 
                                     LEFT  JOIN categories
                                     ON  id_categories=categories.id
                                     ORDER BY articles.dat_Article DESC

                                    ");
    }



    public static function lastByCategorie($id_categories)
    {
        return self::query("SELECT articles.id , articles.nom_Article, articles.description_Article,articles.image1_Article,
                                     articles.image2_Article, 
                                     articles.Quantité,articles.prix_Article, categories.nom_Categorie as categorie
                                     FROM  articles 
                                     LEFT  JOIN categories
                                     ON  id_categories=categories.id
                                     WHERE id_categories= ?
                                     ORDER BY articles.dat_Article DESC

        ", [$id_categories]);
    }


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

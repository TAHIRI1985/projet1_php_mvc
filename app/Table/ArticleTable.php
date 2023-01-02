<?php

namespace App\Table;

use Core\Table\Table;

class ArticleTable extends Table
{


    public function last()
    {
        return $this->query(
            "SELECT articles.id , articles.nom_Article, articles.description_Article,articles.image1_Article,
                articles.image2_Article, 
                articles.Quantité,articles.prix_Article, categories.nom_Categorie as categorie
                FROM  articles 
                LEFT  JOIN categories
                ON  id_categories=categories.id
                ORDER BY articles.dat_Article DESC

   "
        );
    }
}

<?php

namespace App\Table;

use Core\Table\Table;

class ArticleTable extends Table
{
    protected $table = 'articles';

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
    public function findWithCategory($id)
    {
        return $this->query(
            "SELECT articles.id , articles.nom_Article, articles.description_Article,articles.image1_Article,
                articles.image2_Article, 
                articles.Quantité,articles.prix_Article, categories.nom_Categorie as categorie
                FROM  articles 
                LEFT  JOIN categories
                ON  id_categories=categories.id
                WHERE articles.id=?",
            [$id],
            true


        );
    }

    public function lastByCategorie($id_categories)
    {
        return $this->query(
            "SELECT articles.id , articles.nom_Article, articles.description_Article,articles.image1_Article,
                articles.image2_Article, 
                articles.Quantité,articles.prix_Article, categories.nom_Categorie as categorie
                FROM  articles 
                LEFT  JOIN categories
                ON  id_categories=categories.id
                WHERE articles.id_categories=?
                ORDER BY articles.dat_Article DESC",
            [$id_categories]


        );
    }
}

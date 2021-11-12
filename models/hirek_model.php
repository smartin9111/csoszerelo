<?php
class Hirek_Model
{
    public function saveArticle(array $article)
    {

        $retData['eredmeny'] = "";
        $retData['uzenet'] = "";
        try {
            // Kapcsolódás
            $connection = Database::getConnection();
            $connection->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

            // Létezik már a felhasználói név?
            $sqlSelect = "
                INSERT INTO `hirek` 
                ( `cim`, `tartalom`, `felhasznaloId`, `letrehozva`) VALUES 
                (?, ?, ?, ?);";
            $sth = $connection->prepare($sqlSelect);
            $sth->execute([
                $article["cim"],
                $article["tartalom"],
                $article["felhasznaloId"],
                $article["letrehozva"],
            ]);
        } catch (PDOException $e) {
            $retData['eredmeny'] = "ERROR";
            $retData['uzenet'] = "Kapcsolati probléma: " . $e->getMessage();
        }

        return $retData;
    }

    public function getArticles()
    {

        $connection = Database::getConnection();
        $connection->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        // SELECT * FROM `hirek` JOIN felhasznalok ON hirek.felhasznaloId = felhasznalok.id
        $result = [];

        return $result;
    }
}
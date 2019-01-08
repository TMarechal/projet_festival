<?php

class Festival extends Model {

    /**
     * @description Renvoi la liste des films
     * @return array $films
     */
    public static function getAllFest(){
        $db = Database::getInstance();
        $sql = "SELECT * FROM festival
                order by rand()
                limit 0, 5";

        $name_fest = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        return $name_fest;
    }

    /**
     * @description Renvoie les infos d'un film*
     * @param int $id_film
     * @return array $film
     */
    public static function getFilmInfos($id_film){
        $db = Database::getInstance();
        $sql = $db->prepare("select * from films
                             where idfilms = :id");
        $sql->bindValue(':id', $id_film, PDO::PARAM_INT);
        $sql->execute();

        $film = $sql->fetch(PDO::FETCH_ASSOC); 

        return $film;
    }
}
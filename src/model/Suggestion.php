<?php

namespace Ls\Sugerencias\model;

use PDO;

class Suggestion extends Database
{

    public static function saveSearch($q)
    {
        $db = new Database();
        $array=['de','el','a','para','la','los','con','como'];
        $words = explode(' ', $q);

        foreach ($words as $word) {
            if (!array_search($word, $array)) {
                $query = $db->connect()->prepare('INSERT INTO search(q, session_id) VALUES(:q, :id)');
                $query->execute(['q' => $word, 'id' => $_SESSION['session_id']]);
            }
          //  if ($word !== 'de' || $word !== 'el' || $word !== 'a') {
                
            
        }
    }

    public static function getSuggestions()
    {
        $ids = [];
        $res = [];
        $db = new Database();

        $query = $db->connect()->prepare("SELECT * FROM search JOIN sitios ON sitios.categories LIKE concat('%',search.q, '%') WHERE session_id = :id LIMIT 0,30");
        $query->execute(['id' => $_SESSION['session_id']]);

        $r = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($r as $suggestion) {
            $exists=array_search($suggestion['id'], $ids);

            if ($exists===FALSE) {
                array_push($ids, $suggestion['id']);
                array_push($res, $suggestion);
            }
        }

        return $res;
    }
}
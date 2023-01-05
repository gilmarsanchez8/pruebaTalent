<?php
class InformationModel extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function get($filter){
        $items = [];
        $filterItems = [];

        $dataMovies = file_get_contents('movies.json');
        $jsonMovies = json_decode($dataMovies, true);
        $listMovies = $jsonMovies['Search'];
        
        foreach($listMovies as $movie){
            $title  = $movie['Title'];
            $year   = $movie['Year'];
            $type   = $movie['Type'];
            $poster = $movie['Poster'];
            
            $item = array('title' => $title, 'year' => $year, 
                            'type' => $type, 'poster' => $poster);
            array_push($items, $item);
        }

        if($filter == ''){
            return $items;
        }else{
            $result = array_filter($items, function ($item) use ($filter) {
                if (stripos($item['title'], $filter) !== false) {
                    return true;
                }
                return false;
            });
            return $result;
        }
    }
}
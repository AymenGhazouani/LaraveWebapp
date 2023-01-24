<?php 
namespace App;
class Listing{
    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempor nisl quis tellus viverra, eu dapibus massa congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam auctor eget diam ac ullamcorper. Sed placerat libero ut porta lobortis. Maecenas sed sem orci. Ut sem velit.'
            ],


            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempor nisl quis tellus viverra, eu dapibus massa congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam auctor eget diam ac ullamcorper. Sed placerat libero ut porta lobortis.'
            ]
        ];
    }


    public static function find($id){
        $listings = self::all();
        foreach($listings as $listing)
            if ($listing['id'] == $id){
                return $listing;
            }
    }
}
<?php

class nested_view_assembly {
    
    /*
    Generates a view from nested elements, goes top to bottom, least to most nested
    */
    
    public static function construct_view($views){
        $content = '';
        foreach($views as $view){
        $content = View::make($view)->with('content', $content);    
        }
        return $content;
    }
}
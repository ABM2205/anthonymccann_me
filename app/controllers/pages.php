<?php

class pages extends BaseController {

public function home(){
    $content = View::make('animus/home'); // The Core content of the page
    $animus = View::make('corpus/menubar')->with('content',$content); // loading the menubar, html is modularized
    return View::make('corpus/core')->with('animus',$animus); // putting it all together and loading it into the shell at {{ animus }}
    
}


}

<?php

class pages extends BaseController {

public function home(){
    $views = array(
        'core'      => 'animus/home',
        'menubar_1' => 'corpus/menubar',
        'control'   => 'corpus/control_panel',
        'body'      => 'corpus/core'
    );
    return nested_view_assembly::construct_view($views);
}


}

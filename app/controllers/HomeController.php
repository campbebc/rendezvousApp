<?php
 
class HomeController extends BaseController {
 
    protected $layout = 'base';

    public function index()
    {

        $data = array(
            'heading' => '~~~~~~~~~~~~~~~',
            'body' => 'This will be the front page of the application where everything can be navigated to.',
        );
        
        $this->layout->content = View::make('hello', $data);
    }
 
}

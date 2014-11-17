<?php
 
class AboutController extends BaseController {
 
    protected $layout = 'base';

    public function index()
    {

        $data = array(
            'heading' => '~~~~~~~~~~~~~~~',
            'body' => 'This will have team and project info.',
        );
        
        $this->layout->content = View::make('about', $data);
    }
 
}
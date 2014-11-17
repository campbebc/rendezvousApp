<?php
 
class OccasionController extends BaseController {

	protected $layout = 'base';
 
    public function index()
    {
        // get the events from the database by asking the Active Record for "all"
        $occasions = Occasion::all();
 
        // and create a view which we return - note dot syntax to go into folder
        return View::make('occasion.index', array('occasions' => $occasions));
    }
}
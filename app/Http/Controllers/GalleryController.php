<?php

namespace App\Http\Controllers;

use Cloudinary\Api;
use Cloudinary\Search;
use Illuminate\Http\Request;


class GalleryController extends Controller
{
   
    private $api;
    private $search;
    private $result;
    private $walkingResult;
    private $travelResult;
   
     /*-folder:travel
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     { 
        $api = new Api();
        $search = new Search();
        $this->walkingResult = $search->expression('Jizelle/Walking')->execute()['resources'];
        $this->travelResult = $search->expression('Jizelle/Travel')->execute()['resources'];

     }
    
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function walking()
    {
        return view('gallery', ['images' => $this->walkingResult]);
    }
    
    public function travel()
    {
        return view('gallery', ['images' => $this->travelResult]);
    }
}

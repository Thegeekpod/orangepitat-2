<?php

namespace App\Http\Controllers\frontend;

use App\core\project\ProjectInterface;
use App\Http\Controllers\Controller;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public $projectInterface;
    public function __construct(ProjectInterface $projectInterface)
    {
        $this->projectInterface  = $projectInterface;
    }
    public function index (){
        return view("frontend.home.home");
    }
    public function gallery (){
        return view("frontend.gallery.gallery");
    }
    public function testimonials (){
        $data['testimonials'] = Testimonials::get();
        return view("frontend.testimonials.testimonials", $data);
    }
    public function contact (){
        return view("frontend.contact.contact");
    }
    public function about (){
        return view("frontend.about.about");
    }

    // service

    public function location(){
        return view("frontend.location.location");
    }
    public function packages(){
        return view("frontend.location.packages");
    }
    public function tour_packages_details(){
        return view("frontend.location.tour-packages-details");
    }
}

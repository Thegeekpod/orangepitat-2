<?php

namespace App\Http\Controllers\frontend;

use App\core\project\ProjectInterface;
use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Package;
use App\Models\ProjectImage;
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
        $data['testimonials'] = Testimonials::get();
        $data['locations'] = Location::get();
        return view("frontend.home.home", $data);
    }
    public function gallery (){
        $data['galleryImages'] = ProjectImage::get();
        return view("frontend.gallery.gallery", $data);
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
    public function packages($slug){
        $data['packages'] = Package::whereHas('location', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->get();
        return view("frontend.location.packages",$data);
    }
    public function tour_packages_details($slug){
        $data['package'] = Package::whereSlug($slug)->first();
        return view("frontend.location.tour-packages-details",$data);
    }
}

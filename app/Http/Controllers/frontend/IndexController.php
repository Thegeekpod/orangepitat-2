<?php

namespace App\Http\Controllers\frontend;

use App\core\project\ProjectInterface;
use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Package;
use App\Models\ProjectImage;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;

class IndexController extends Controller
{
    public $projectInterface;
    public function __construct(ProjectInterface $projectInterface)
    {
        $this->projectInterface = $projectInterface;
    }
    public function index()
    {
        $data['testimonials'] = Testimonials::get();
        $data['locations'] = Location::get();
        return view("frontend.home.home", $data);
    }
    public function gallery()
    {
        $data['galleryImages'] = ProjectImage::get();
        return view("frontend.gallery.gallery", $data);
    }
    public function testimonials()
    {
        $data['testimonials'] = Testimonials::get();
        return view("frontend.testimonials.testimonials", $data);
    }
    public function contact()
    {
        return view("frontend.contact.contact");
    }
    public function about()
    {
        return view("frontend.about.about");
    }

    // service

    public function location()
    {
        return view("frontend.location.location");
    }
    public function packages($slug)
    {
        $data['packages'] = Package::whereHas('location', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->get();
        return view("frontend.location.packages", $data);
    }
    public function tour_packages_details($slug)
    {
        $data['package'] = Package::whereSlug($slug)->first();
        return view("frontend.location.tour-packages-details", $data);
    }

    public function booking(Request $request)
    {

        $inputArray = [
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'from_date' => $request->input('from_date'),
            'to_date' => $request->input('to_date'),
        ];

        $userMail = 'iamavijit101@gmail.com';
        $emailSubject = 'New Booking !';

        if (isset ($userMail)) {

            try {
                Mail::send('Mail.adminBookingMail', [
                    'name' => $request->input('name'),
                    'phone' => $request->input('phone'),
                    'email' => $request->input('email'),
                    'from_date' => $request->input('from_date'),
                    'to_date' => $request->input('to_date'),
                ], function ($message) use ($userMail, $emailSubject) {
                    $message->to($userMail);
                    $message->subject($emailSubject);
                });
            } catch (Exception $e) {

            }

        }

        return redirect()->back()->with('success','Your request has been sent successfully');
    }
}

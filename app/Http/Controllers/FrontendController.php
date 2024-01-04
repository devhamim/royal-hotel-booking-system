<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\achieve;
use App\Models\banner;
use App\Models\blog;
use App\Models\client;
use App\Models\customerSay;
use App\Models\gallery;
use App\Models\service;
use App\Models\setting;
use App\Models\team;
use App\Models\blogComment;
use App\Models\careerlist;
use App\Models\careersApplayStore;
use App\Models\country;
use App\Models\gestcheckout;
use App\Models\gestroombook;
use App\Models\media;
use App\Models\privacyPolicy;
use App\Models\product;
use App\Models\rome;
use App\Models\video;
use Illuminate\Http\Request;
use Str;

class FrontendController extends Controller
{
    //home
    function home(){
        $abouts = about::where('status', 1)->where('define', 1)->get();
        $banners = banner::where('status', 1)->get();
        $products = product::where('status', 1)->where('define', 2)->get();
        $services = service::where('status', 1)->get();
        $teams = team::where('status', 1)->get();
        $gallerys = gallery::where('status', 1)->get();
        $clients = client::where('status', 1)->get();
        $achieves = achieve::where('status', 1)->get();
        $customerSays = customerSay::where('status', 1)->get();
        $videos = video::where('status', 1)->get();
        $blogs = blog::where('status', 1)->where('define', 2)->get();
        $settings = setting::all();
        $rooms = rome::where('status', 1)->get();
        $rooms_gest = rome::where('status', 1)->orderBy('id', 'ASC')->get();
        return view('frontend.home',[
            'abouts'=>$abouts,
            'banners'=>$banners,
            'services'=>$services,
            'teams'=>$teams,
            'settings'=>$settings,
            'gallerys'=>$gallerys,
            'clients'=>$clients,
            'achieves'=>$achieves,
            'customerSays'=>$customerSays,
            'blogs'=>$blogs,
            'products'=>$products,
            'videos'=>$videos,
            'rooms'=>$rooms,
            'rooms_gest'=>$rooms_gest,
        ]);
    }

    //about_us
    function about_us(){
        $abouts = about::where('status', 1)->where('define', 2)->get();
        $products = product::where('status', 1)->get();
        $customerSays = customerSay::where('status', 1)->get();
        $clients = client::where('status', 1)->get();
        $teams = team::where('status', 1)->get();
        $blogs = blog::where('status', 1)->where('define', 2)->get();
        return view('frontend.about', [
            'abouts'=>$abouts,
            'products'=>$products,
            'clients'=>$clients,
            'teams'=>$teams,
            'blogs'=>$blogs,
            'customerSays'=>$customerSays,
        ]);
    }
    //services
    function services(){
        $services = service::where('status', 1)->get();
        return view('frontend.services', [
            'services'=>$services,
        ]);
    }
    //our_portfolio
    function our_portfolio(){
        return view('frontend.protfolio');
    }
    //our_blog
    function our_blog(){
        $blogs = blog::where('status', 1)->get();
        return view('frontend.blog',[
            'blogs'=>$blogs,
        ]);
    }
    //our_blog_details
    function our_blog_details($slug){
        $latest_blogs = blog::where('status', 1)->get();
        $blogs = blog::where('slug', $slug)->get();
        $blog_comment = blogComment::where('blogs_id', $blogs->first()->id)->get();
        $blog_comment_count = blogComment::where('blogs_id', $blogs->first()->id)->count();
        $blog_comment_all = blogComment::all();
        return view('frontend.blog_details',[
            'blogs'=>$blogs,
            'latest_blogs'=>$latest_blogs,
            'blog_comment'=>$blog_comment,
            'blog_comment_count'=>$blog_comment_count,
            'blog_comment_all'=>$blog_comment_all,
        ]);
    }
    //contect
    function contect(){
        $settings = setting::all();
        return view('frontend.contect', [
            'settings'=>$settings,
        ]);
    }
    //gallerys
    function gallerys(){
        $gallerys = gallery::where('status', 1)->paginate(20);
        return view('frontend.gallery', [
            'gallerys'=>$gallerys,
        ]);
    }
    //our_team
    function our_team(){
        $teams = team::where('status', 1)->get();
        return view('frontend.team', [
            'teams'=>$teams,
        ]);
    }
    //our_team
    function our_clients(){
        $clients = client::where('status', 1)->get();
        $customerSays = customerSay::where('status', 1)->get();
        return view('frontend.client', [
            'clients'=>$clients,
            'customerSays'=>$customerSays,
        ]);
    }

    //our_privacy_policy
    function our_privacy_policy(){
        $privacyPolicy = privacyPolicy::all();
        return view('frontend.privacyPolicy', [
            'privacyPolicy'=>$privacyPolicy,
        ]);
    }
    //our_product
    function our_product(){
        $products = product::where('status', 1)->get();
        return view('frontend.product', [
            'products'=>$products,
        ]);
    }
     //our_media
    function our_media(){
        $medias = media::where('status', 1)->get();
        return view('frontend.media', [
            'medias'=>$medias,
        ]);
    }

    // register_dealerform
    function register_dealerform(){
        return view('frontend.dealerform');
    }

    // location
    function location(){
        return view('frontend.location');
    }
    // career
    function career(){
        $careerlists = careerlist::all();
        return view('frontend.careers', [
            'careerlists'=>$careerlists,
        ]);
    }
    // careers_applay
    function careers_applay($id){
        $careerlists = careerlist::find($id);
        $countries = country::all();

        return view('frontend.careers_applay', [
            'careerlists'=>$careerlists,
            'countries'=>$countries,
        ]);
    }


    function career_applay_store(Request $request){
        $rules = [
            'career_id'     => 'required',
            'resume'        => 'required',
            'fast_name'     => 'required',
            'middle_name'   => '',
            'last_name'     => 'required',
            'gender'        => 'required',
            'email'         => 'required',
            'country_code'  => 'required',
            'number'        => 'required',
            'country_name'  => 'required',
            'address_one'   => 'required',
            'address_two'   => '',
            'city'          => '',
            'post_code'     => '',
            'street'        => '',
            'hear_about_us' => '',
            'desired_salary'=> '',
            'job_title'     => '',
            'start_date'    => '',
            'end_date'      => '',
            'edu_level'     => '',
            'edu_institution' => '',
            'gradu_year'    => '',
            'cover_later'   => '',
            'link'          => '',
        ];

        $validatesData = $request->validate($rules);


        if($request->hasFile('resume')){
            $resume = $request->file('resume');
            $extension = $resume->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $resume->move(public_path('uploads/career'), $file_name);
            $validatesData['resume'] = $file_name;
        }
        if($request->hasFile('cover_later')){
            $cover_later = $request->file('cover_later');
            $extension = $cover_later->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $cover_later->move(public_path('uploads/career'), $file_name);
            $validatesData['cover_later'] = $file_name;
        }

        careersApplayStore::create($validatesData);
        toast('Add Success','success');
        return redirect()->route('career.applay.success');
    }

    function career_applay_success(){
        return view('frontend.career_success');
    }

    function room_finds(){
        $rooms = rome::where('status', 1)->get();
        $rooms_gest = rome::where('status', 1)->orderBy('id', 'ASC')->get();
        $checkIn = '';
        $checkOut = '';
        return view('frontend.roomfind', [
            'rooms'=>$rooms,
            'rooms_gest'=>$rooms_gest,
            'checkIn'=>$checkIn,
            'checkOut'=>$checkOut,
        ]);
    }

    function room_details($slug, Request $request){
        $rooms = rome::where('slug',$slug)->where('status', 1)->get();
        $checkIn = $request->input('check_in', null);
        $checkOut = $request->input('check_out', null);
        return view('frontend.roomDetails', [
            'rooms'=>$rooms,
            'checkIn'=>$checkIn,
            'checkOut'=>$checkOut,
        ]);
    }


    function gest_room_book(Request $request){
        $rules = [
            'room_id'=> 'required',
            'checkin'=> 'required',
            'checkout'=> 'required',
            'rooms'=> 'required',
            'gest'=> 'required',
        ];

        $validatedData = $request->validate($rules);

        $gestroomdata = gestroombook::create($validatedData);
        toast('Add Success','success');
        return redirect()->route('room.gest.book', ['gestroomdata' => $gestroomdata->id]);
    }

    function room_gest_book($gestroomdata){
        $gestroomdatas = gestroombook::find($gestroomdata);
        return view('frontend.checkout',[
            'gestroomdatas'=>$gestroomdatas,
        ]);
    }

    function checkout_booking(Request $request){
        $rules = [
            'gest_id'=>'required',
            'room_id'=>'required',
            'fast_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'country'=>'required',
            'city'=>'required',
            'zip'=>'',
            'number'=>'required',
            'note'=>'',
        ];

        $validatesData = $request->validate($rules);


        $checkoutdata = gestcheckout::create($validatesData);
        toast('Add Success','success');
        return redirect()->route('booking.payment',['checkoutdata'=>$checkoutdata]);

    }


    function booking_payment($checkoutdata){
        $checkouts = gestcheckout::where('id', $checkoutdata)->get();
        return view('frontend.bookingpayment',[
            'checkoutdata'=>$checkoutdata,
            'checkouts'=>$checkouts,
        ]);
    }

    function booking_payment_store(Request $request){
        $gestcheckout = $request->gestcheckout_id;

        $rules = [];

    if ($request->btn == 1) {
        $rules = [
            'paypal_mail' => 'required',
            'transaction_id' => 'required',
            'paypal' => 'required',
        ];
    } elseif ($request->btn == 2) {
        // Stripe rules
        $rules = [
            'st_card_holder' => 'required',
            'st_card_number' => 'required',
            'st_expire_month' => 'required',
            'st_expire_year' => 'required',
            'st_cvc' => 'required',
            'stripe' => 'required',
        ];
    } elseif ($request->btn == 3) {
        // Debit card rules
        $rules = [
            'card_holder' => 'required',
            'card_number' => 'required|min:16|max:16',
            'expire_month' => 'required',
            'expire_year' => 'required',
            'cvc' => 'required|min:3|max:3',
            'debit' => 'required',
        ];
    }

    $validatedData = $request->validate($rules);

    gestcheckout::where('id', $gestcheckout)->update($validatedData);

    return redirect()->route('booking.success');

    }
    function booking_success(){
        return view('frontend.checkingsuccess');
    }

    function searchrooms(Request $request){

        $request->validate([
            'check_in' => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
            'rooms' => 'required|integer|min:1',
            'guests' => 'required|integer|min:1',
        ], [
            'check_in.after_or_equal' => 'Check-in date must be today or a future date.',
        ]);

        $checkIn = $request->input('check_in', null);
        $checkOut = $request->input('check_out', null);
        $rooms = $request->input('rooms');
        $guests = $request->input('guests');

        $rooms_gest = rome::where(function($q) use ($rooms, $guests) {
            $q->where('id', 'like', '%' . $rooms . '%')
              ->orWhere('adult', 'like', '%' . $guests . '%');
        })->get();

        return view('frontend.roomfind', [
            'rooms_gest' => $rooms_gest,
            'checkIn' => $checkIn,
            'checkOut' => $checkOut,
        ]);

    }

}

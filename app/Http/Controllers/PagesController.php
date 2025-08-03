<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function about()
    {
        return view('pages.about');
    }



    public function team()
    {
        return view('pages.team');
    }
    public function team_carousel()
    {
        return view('pages.team-carousel');
    }

    public function team_details()
    {
        return view('pages.team-details');
    }

    public function portfolio()
    {
        return view('pages.portfolio');
    }

    public function portfolio_details()
    {
        return view('pages.portfolio-details');
    }

    public function testimonials()
    {
        return view('pages.testimonials');
    }

    public function testimonials_carousel()
    {
        return view('pages.testimonials-carousel');
    }

    public function pricing()
    {
        return view('pages.pricing');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function notfound()
    {
        return view('pages.404');
    }

    public function coming_soon()
    {
        return view('pages.coming-soon');
    }




    public function services()
    {
        return view('pages.services');
    }
    public function services_carousel()
    {
        return view('pages.services-carousel');
    }
    public function threat_detection_prevention()
    {
        return view('pages.threat-detection-prevention');
    }
    public function endpoint_device_security()
    {
        return view('pages.endpoint-device-security');
    }
    public function data_protection_privacy()
    {
        return view('pages.data-protection-privacy');
    }

    public function backup_recovery()
    {
        return view('pages.backup-recovery');
    }
    public function advanced_technology()
    {
        return view('pages.advanced-technology');
    }
    public function cloud_managed_services()
    {
        return view('pages.cloud-managed-services');
    }




    public function products()
    {
        return view('pages.products');
    }
    public function product_details()
    {
        return view('pages.product-details');
    }
    public function cart()
    {
        return view('pages.cart');
    }
    public function checkout()
    {
        return view('pages.checkout');
    }
    public function wishlist()
    {
        return view('pages.wishlist');
    }
    public function sign_up()
    {
        return view('pages.sign-up');
    }
    public function login()
    {
        return view('pages.login');
    }






    public function blog()
    {
        return view('pages.blog');
    }

    public function blog_carousel()
    {
        return view('pages.blog-carousel');
    }

    public function blog_list()
    {
        return view('pages.blog-list');
    }

    public function blog_list_2()
    {
        return view('pages.blog-list-2');
    }

    public function blog_details()
    {
        return view('pages.blog-details');
    }




    public function contact()
    {
        return view('pages.contact');
    }

}
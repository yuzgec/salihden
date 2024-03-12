<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Pivot;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Artesaos\SEOTools\Facades\SEOMeta;

class HomeController extends Controller
{
    public function index(){
        SEOMeta::setTitle("Denden Yachts | İstanbul");
        SEOMeta::setDescription("Denden Yachts | İstanbul");
        SEOMeta::setCanonical(url()->full());
        $Hakkimizda = Page::where('id', '=',1)->first();
        $Odullerimiz = Page::where('id', '=',3)->first();
        return view('frontend.index', compact('Hakkimizda','Odullerimiz'));
    }

    public function categorydetail($url)
    {
        $Detay = ProductCategory::whereHas('translations', function ($query) use ($url) {
            $query->where('slug', $url);
        })->first();
        views($Detay)->cooldown(60)->record();

        $Product = Product::with(['getCategory'])->where('category',$Detay->id)->get();
        SEOMeta::setTitle($Detay->title.' | Denden Yachts | İstanbul');
        SEOMeta::setDescription("Denden Yachts | İstanbul");
        SEOMeta::setCanonical(url()->full());
        return view('frontend.category.index', compact('Detay', 'Product'));
    }

    public function corporatedetail($url)
    {
        $Detay = Page::whereHas('translations', function ($query) use ($url) {
            $query->where('slug', $url);
        })->first();

        views($Detay)->cooldown(60)->record();

        SEOMeta::setTitle($Detay->title.' | Denden Yachts | İstanbul');
        SEOMeta::setDescription("Denden Yachts | İstanbul");
        SEOMeta::setCanonical(url()->full());
        return view('frontend.page.index', compact('Detay'));
    }

    public function productdetail($url)
    {
        $Detay = Product::whereHas('translations', function ($query) use ($url) {
            $query->where('slug', $url);
        })->first();

        views($Detay)->cooldown(60)->record();


        SEOMeta::setTitle($Detay->title.' | Denden Yachts | İstanbul');
        SEOMeta::setDescription("Denden Yachts | İstanbul");
        SEOMeta::setCanonical(url()->full());
        return view('frontend.product.detail', compact('Detay'));
    }

    public function servicedetail($url)
    {
        $Detay = Service::whereHas('translations', function ($query) use ($url) {
            $query->where('slug', $url);
        })->first();

        views($Detay)->cooldown(60)->record();

        return view('frontend.service.detail', compact('Detay'));
    }

    public function gallery(){

        return view('frontend.gallery.index');
    }

    public function contactus(){

        SEOMeta::setTitle('İletişim | Denden Yachts | İstanbul');
        SEOMeta::setDescription("Denden Yachts | İstanbul");
        SEOMeta::setCanonical(url()->full());
        return view('frontend.contact');

    }


    public function reference(){

        return view('frontend.reference.index');
    }

    public function blog(){
        $All =  Blog::all();
        return view('frontend.blog.index',compact('All'));
    }

    public function blogdetail($url){
        $Detay = blog::whereHas('translations', function ($query) use ($url) {
            $query->where('slug', $url);
        })->first();

        return view('frontend.blog.detail', compact('Detay'));
    }

}

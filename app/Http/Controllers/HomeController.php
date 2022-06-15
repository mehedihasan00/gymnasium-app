<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // index 
    public function index()
    {
        return view('pages.website.index');
    }
    // About
    public function about() {
        return view('pages.website.about');
    }
    public function gallery() {
        return view('pages.website.gallery');
    }
    public function class() {
        return view('pages.website.class');
    }
    public function classDetail($id) {
        return view('pages.website.class-detail');
    }
    public function trainers() {
        return view('pages.website.trainers');
    }
    public function pricing_table() {
        return view('pages.website.pricing-table');
    }
    public function testimonial() {
        return view('pages.website.testimonial');
    }
    public function faq() {
        return view('pages.website.faq');
    }
    public function blog() {
        return view('pages.website.blog');
    }
    public function blogDetail($id) {
        return view('pages.website.blog-detail');
    }

    public function contact() {
        return view('pages.website.contact-us');
    }
}

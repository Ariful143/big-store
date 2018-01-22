<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BigStoreController extends Controller
{
   public function  index(){
       return view('front.home.home');
   }
   public function  home(){
       return view('front.home.home');
   }
   public function code(){
       return view('front.code.code');
   }
   public function contactUs(){
       return view('front.contact.contact');
   }
   public function kitchen(){
       return view('front.kitchen.kitchen');
   }
   public function care(){
       return view('front.care.care');
   }
   public function houseHold(){
       return view('front.household.hold');
   }
   public function single(){
       return view('front.about.single');
   }
   public function wishlist(){
       return view('front.wishlist.wishlist');
   }
   public function logIn(){
       return view('front.login.login');
   }
   public function register(){
       return view('front.register.register');
   }
   public function orderHistory(){
       return view('front.order.order');
   }
   public function shipping(){
       return view('front.shipping.shipping');
   }
   public function faqs(){
       return view('front.faqs.faqs');
   }
   public function termCondition(){
       return view('front.terms.terms');
   }
   public function offer(){
       return view('front.offer.offer');
   }
}

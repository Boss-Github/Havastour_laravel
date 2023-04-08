<?php

namespace App\Http\Controllers;

use App\Andijan;
use App\Buxara;
use App\Contact;
use App\Fergana;
use App\Nukus;
use App\Order;
use App\Qoqand;
use App\Samarqand;
use App\Shaxrisabz;
use App\Tashkent;
use App\Termez;
use App\Top_menu;
use App\tour;
use App\Tours_comment;
use App\Urganch;
use App\Xiva;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(Request $request){
        if($request->isMethod("post")){
            $order = new Contact();
            $order-> name = $request->name;
            $order-> email = $request->email;
            $order-> tema = $request->tema;
            $order-> comment = $request->comment;
            $order->save();

            return redirect()->back();
        }
        return view("index", compact('menu'));
    }


    public function contact(Request $request){
        if($request->isMethod("post")){
            $order = new Contact();
            $order-> name = $request->name;
            $order-> email = $request->email;
            $order-> tema = $request->tema;
            $order-> comment  = $request->comment;
            $order->save();

            return redirect()->back();
        }
        return view("contact");
    }

    public function about(){
        return view("about");
    }

    public function tour(){
        $tours = tour::all();
        return view("tour", compact('tours'));
    }

    public function txbs(){
        $txbs = tour::all();
        return view("txbs",compact('txbs'));
    }

    public function swb(){
        $swb = tour::all();
        return view("swb", compact('swb'));
    }

    public function bst(){
        $bst = tour::all();
        return view("bst", compact('bst'));
    }

    public function navruz(){
        $tour_navruz = tour::all();
        return view("navruz", compact('tour_navruz'));
    }

    public function kumushkon(){
        $tour_kumushkon = tour::all();
        return view("kumushkon", compact('tour_kumushkon'));
    }

    public function tour_remes(){
        $tour_remes = tour::all();
        return view("tour_remes", compact('tour_remes'));
    }

    public function tour_gurman(){
        $tour_gurman = tour::all();
        return view("tour_gurman", compact('tour_gurman'));
    }

    public function tour_camel(){
        $tour_camel = tour::all();
        return view("tour_camel", compact('tour_camel'));
    }

    public function tour_palomnik(){
        $tour_palomnik = tour::all();
        return view("tour_palomnik", compact('tour_palomnik'));
    }

    public function tour_for(){
        $tour_for = tour::all();
        return view("tour_for", compact('tour_for'));
    }

    public function tour_school(){
        $tour_school = tour::all();
        return view("tour_school", compact('tour_school'));
    }

    public function tour_health(){
        $tour_health = tour::all();
        return view("tour_health", compact('tour_health'));
    }

    public function tour_family(){
        $tour_family = tour::all();
        return view("tour_family", compact('tour_family'));
    }

    public function tour_horse(){
        $tour_horse = tour::all();
        return view("tour_horse", compact('tour_horse'));
    }

    public function tour_bus(){
        $tour_bus = tour::all();
        return view("tour_bus", compact('tour_bus'));
    }

    public function tour_samarqand(){
        $tour_samarqand = tour::all();
        return view("tour_samarqand", compact('tour_samarqand'));
    }

    public function tour_buxara(){
        $tour_buxara = tour::all();
        return view("tour_buxara", compact('tour_buxara'));
    }

    public function tashkent(){
        $information = Tashkent::all();
        return view("hotels.tashkent", compact('information'));
    }

    public function samarqand(){
        $information_samarqand = Samarqand::all();
        return view("hotels.samarqand", compact('information_samarqand'));
    }

    public function shaxrisabz(){
        $information_shaxrisabz = Shaxrisabz::all();
        return view("hotels.shaxrisabz", compact('information_shaxrisabz'));
    }

    public function buxara(){
        $information_buxara = Buxara::all();
        return view("hotels.buxara", compact('information_buxara'));
    }

    public function xiva(){
        $information_xiva = Xiva::all();
        return view("hotels.xiva", compact('information_xiva'));
    }

    public function urgench(){
        $information_urgench = Urganch::all();
        return view("hotels.urgench", compact('information_urgench'));
    }

    public function nukus(){
        $information_nukus = Nukus::all();
        return view("hotels.nukus", compact('information_nukus'));
    }

    public function termez(){
        $information_termez = Termez::all();
        return view("hotels.termez", compact('information_termez'));
    }

    public function andijan(){
        $information_andijan = Andijan::all();
        return view("hotels.andijan", compact('information_andijan'));
    }

    public function qoqand(){
        $information_qoqand = Qoqand::all();
        return view("hotels.qoqand", compact('information_qoqand'));
    }

    public function fergana(){
        $information_fergana = Fergana::all();
        return view("hotels.fergana", compact('information_fergana'));
    }

    public function city_tashkent(){
        return view("cities.city_tashkent");
    }

    public function city_samarqand(){
        return view("cities.city_samarqand");
    }

    public function city_shaxrisabz(){
        return view("cities.city_shaxrisabz");
    }

    public function city_nurata(){
        return view("cities.city_nurata");
    }

    public function city_buxara(){
        return view("cities.city_buxara");
    }

    public function city_xiva(){
        return view("cities.city_xiva");
    }

    public function city_toprak(){
        return view("cities.city_toprak");
    }

    public function city_nukus(){
        return view("cities.city_nukus");
    }

    public function city_termez(){
        return view("cities.city_termez");
    }

    public function city_fergana(){
        return view("cities.city_fergana");
    }

    public function uzbekistan(){
        return view("guide.uzbekistan");
    }

    public function story_uzb(){
        return view("guide.story_uzb");
    }

    public function greate_path(){
        return view("guide.great_path");
    }

    public function uzbek_cuisine(){
        return view("guide.uzbek_cuisine");
    }

    public function craft(){
        return view("guide.craft");
    }

    public function tradition(){
        return view("guide.tradition");
    }

    public function uzbek_clothes(){
        return view("guide.uzbek_clothes");
    }

    public function holiday(){
        return view("guide.holiday");
    }

    public function faq(){
        return view("faq");
    }

    public function addtocart($id){
        $product = tour::find($id);
        Cart::add([
            'id' => $product->id,
            'name' => "$product->title",
            'qty' => 1,
            'price' => "$product->price",
            'weight' => 550,
            'options' => ['size' => 'large']]);

        return redirect()->route('cart');
    }

    public function cart(Request $request){

        if($request->isMethod("post")){
            $order = new Order();
            $order-> name = $request->name;
            $order-> email = $request->email;
            $order-> tell = $request->tell;
            $order-> comment  = $request->comment;

            $order-> subtotal = $request->subtotal;
            $order-> order_name = $request->order_name;
            $order-> price = $request->price;
            $order-> count = $request->count;
            $order->save();

            Cart::destroy();

            return redirect()->back();
        }

        return view('cart');
    }

    public function remove($rowId)
    {
        Cart::remove($rowId);
        return redirect()->back();
    }

    public function plus($rowId,$qty)
    {
        Cart::update($rowId, $qty+1);
        return redirect()->back();
    }

    public function minus($rowId,$qty)
    {
        Cart::update($rowId, $qty-1);
        return redirect()->back();
    }

}

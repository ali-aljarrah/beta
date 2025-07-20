<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\QuoteFormMail;
use App\Models\Article;
use App\Models\FAQ;
use App\Models\News;
use App\Models\Service;
use App\Models\SupplyChain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function home() {
        $services = Service::select('id', 'title', 'slug', 'description')->where('is_active', 1)->get();

        $faqs = FAQ::where('is_active', 1)->get();

        $news = News::where('is_active', 1)->limit(6)->get();

        return view('home', [
            'services' => $services,
            'news' => $news,
            'faqs' => $faqs
        ]);
    }

    public function service($id, $slug) {
        $service = Service::where('is_active', 1)->where('id', $id)->firstOrFail();

        return view('service', [
            'service' => $service
        ]);
    }

    public function supplyChain($id, $slug) {
        $supplyChain = SupplyChain::where('is_active', 1)->where('id', $id)->firstOrFail();

        return view('supplyChain', [
            'supplyChain' => $supplyChain
        ]);
    }

    public function news() {
        $news = News::where('is_active', 1)->paginate(12);

        return view('news', [
            'news' => $news
        ]);
    }

    public function blog() {
        $articles = Article::select('id', 'title', 'slug', 'description')->where('is_active',1)->paginate(12);

        return view('blog', [
            'articles' => $articles
        ]);
    }

    public function article($id, $slug) {
        $article = Article::where('is_active', 1)->where('id', $id)->firstOrFail();

        return view('article', [
            'article' => $article
        ]);
    }

    public function contact() {
        return view('contact');
    }

    public function quote() {
        return view('quote');
    }

    public function submitQuote(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'countrySelect' => 'required|string',
            'FreightSelect' => 'required|string',
            'originCountrySelect' => 'required|string',
            'destinationCountrySelect' => 'required|string',
            'ArrivalType' => 'required|string',
            'ContainerType' => 'required|string',
            'commodity' => 'required|string',
            'g-recaptcha-response' => 'required|recaptcha'
        ],
        [
            'g-recaptcha-response.required' => 'Prove you are a human!'
        ]);

         // Send email
        Mail::to(env('MAIL_TO_ADDRESS'))->send(new QuoteFormMail($request));

        return response()->json(['success' => true]);
    }

     public function submitContact(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required|recaptcha'
        ],
        [
            'g-recaptcha-response.required' => 'Prove you are a human!'
        ]);

         // Send email
        Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactMail($request));

        return response()->json(['success' => true]);
    }
}

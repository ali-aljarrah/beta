<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Service;
use App\Models\SupplyChain;

class PagesController extends Controller
{
    public function home() {
        $services = Service::select('id', 'title', 'slug', 'description')->where('is_active', 1)->get();

        $news = News::where('is_active', 1)->limit(6)->get();

        return view('home', [
            'services' => $services,
            'news' => $news
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
        return view('blog');
    }
}

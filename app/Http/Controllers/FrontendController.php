<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Artikel;
use App\Produk;
use App\Galeri;
use App\Testimoni;
use App\Kontak;

class FrontendController extends Controller
{
	public function beranda(){
		$produks = Produk::paginate(4);
		$artikels = Artikel::paginate(1);
        $artikel = Artikel::paginate(3);
		$galeris = Galeri::paginate(8);
		$users = User::all();
        $testimonis = Testimoni::all();
        $kontaks = Kontak::all();
		return view('index', compact('kontaks','testimonis','produks','artikels','artikel','galeris','users'));
	}
    public function produk(){
    	$produks = Produk::all();
    	return view('frontend.produk', compact('produks'));
    }

    public function galeri(){
    	$galeris = Galeri::all();
    	return view('frontend.galeri', compact('galeris'));
    }

    public function artikel(){
        $artikels = Artikel::paginate(3);
        return view('frontend.artikel', compact('artikels'));
    }

    public function single(Artikel $artikel){
        $previous = Artikel::where('id', '<', $artikel->id)->orderBy('id', 'desc')->first();
        $next = Artikel::where('id', '>', $artikel->id)->orderBy('id')->first();

        return view('frontend.single', compact('artikel','previous','next'));
    }
    public function testimoni(){
        $testimonis = Testimoni::all();
        return view('frontend.testimoni', compact('testimonis'));
    }

    public function kontak(){
        $kontaks = Kontak::all();
        return view('frontend.kontak', compact('kontaks'));
    }

}

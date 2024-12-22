<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    // Show all portfolios
    public function index()
    {
        $portfolios = Portofolio::all();
        return view('portofolio', compact('portfolios'));
    }

    // Show a single portfolio
    public function show($id)
    {
        $portfolio = Portofolio::findOrFail($id);
        return view('portofolio-show', compact('portfolio'));
    }
}

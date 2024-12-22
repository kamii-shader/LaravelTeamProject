<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use App\Models\Donation;

class DonationController extends Controller
{
    public function view()
    {
        $portofolios = Portofolio::withSum('donations', 'amount')->get();
        return view('donation', compact('portofolios'));
    }

    // Menyimpan data donasi
    public function store(Request $request)
    {
        $donation = new Donation();
        $donation->user_id = auth()->id();
        $donation->portofolio_id = $request->portofolio_id;
        $donation->amount = $request->amount;
        $donation->save();

        return redirect()->route('donation.create')->with('success', 'Donasi berhasil disubmit!');
    }
}

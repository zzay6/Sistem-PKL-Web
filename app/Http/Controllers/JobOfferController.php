<?php

namespace App\Http\Controllers;

use App\Models\JobOffer;
use Illuminate\Http\Request;

class JobOfferController extends Controller
{
    public function index()
    {
        return view('job_offers.index', [
            'jobOffers' => JobOffer::with('company')->latest()->get()
        ]);
    }

    public function create()
    {
        return view('job_offers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_id' => 'required|exists:companies,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        JobOffer::create($request->all());

        return redirect()->route('job_offers.index')->with('success', 'Job offer created successfully.');
    }
}

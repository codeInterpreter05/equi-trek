<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormCompany;

class FormCompanyController extends Controller
{
    public function create()
    {
        return view('formcompany.create');
    }

    public function store(Request $request)
    {
        // Add validation for new fields 'face_value' and 'url'
        $request->validate([
            'name' => 'required|string|max:255',
            'about' => 'required|string',
            'market_cap' => 'nullable|numeric',
            'current_price' => 'nullable|numeric',
            'high_low' => 'nullable|string|max:50',
            'stock_pe' => 'nullable|numeric',
            'book_value' => 'nullable|numeric',
            'dividend_yield' => 'nullable|numeric',
            'roce' => 'nullable|numeric',
            'roe' => 'nullable|numeric',
            'face_value' => 'nullable|numeric', // Validation for face_value
            'url' => 'nullable|url', // Validation for url
        ]);

        // Create the new company with the validated input
        FormCompany::create([
            'name' => $request->input('name'),
            'about' => $request->input('about'),
            'market_cap' => $request->input('market_cap'),
            'current_price' => $request->input('current_price'),
            'high_low' => $request->input('high_low'),
            'stock_pe' => $request->input('stock_pe'),
            'book_value' => $request->input('book_value'),
            'dividend_yield' => $request->input('dividend_yield'),
            'roce' => $request->input('roce'),
            'roe' => $request->input('roe'),
            'face_value' => $request->input('face_value'), // Include face_value
            'url' => $request->input('url'), // Include url
        ]);

        return redirect()->back()->with('success', 'Company info saved successfully!');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $company = FormCompany::where('name', 'like', '%' . $query . '%')->first();
            
            if ($company) {
                return redirect()->route('company.show', ['id' => $company->id]);
            }
        }

        return back()->with('error', 'Company not found.');
    }

    public function show($id)
    {
        $company = FormCompany::findOrFail($id);

        return view('company.show', compact('company'));
    }
}

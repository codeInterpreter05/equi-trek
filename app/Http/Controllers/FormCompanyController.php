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
        $request->validate([
            'name' => 'required|string|max:255',
            'symbol' => 'required|string|max:255',
            'sector' => 'nullable|string|max:255',
            'industry' => 'nullable|string|max:255',
            'market_cap' => 'nullable|numeric',
        ]);

        FormCompany::create($request->all());

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


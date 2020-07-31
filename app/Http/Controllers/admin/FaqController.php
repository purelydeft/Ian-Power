<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Faq;

class FaqController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('admin.FAQs.faqList');
    }

    public function create()
    {
        return view('admin.FAQs.create');
    }

    public function store(Request $request)
    {
        $faq = Faq::create($request->all());
        // $faq->save();
        return redirect('admin/faqs')->with('success','Faq created successfully.');
    }

    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('admin.FAQs.edit',compact('faq'));
    }

    public function update(Request $request,$id)
    {
        $faq = faq::where('id', $id);

        $faq->update([
    		'faq_title' => $request['faq_title'],
    		'faq_description' => $request['faq_description'],
    	]);
        return redirect('admin/faqs')->with('success','Faq updated successfully.');
    }

    public function destroy($id)
    {

        $faq = faq::where('id', $id);
        $faq->delete();
       return redirect('admin/faqs')->with('success','faq deleted successfully.');
    }

}

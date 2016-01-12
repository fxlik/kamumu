<?php


namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class ProductController extends Controller {

	public function create()
	{
    return View('formtest');
	}

	public function store(Request $request)
	{
		{
        $validator = Validator::make($request->all(), [
            'nama' => 'required|unique:posts|max:255',
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('product/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Store the blog post...
    }
	}
}
?>

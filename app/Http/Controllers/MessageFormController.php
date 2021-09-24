<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Factory\MessageInterface;
use App\Models\ClientsMessages;
use Illuminate\Http\Request;

class MessageFormController extends Controller implements MessageInterface {

	public function createForm(Request $request) {
		return view('contact');
	}

	public function createPost($content): void{
		// Form validation
		$this->validate($content, [
			'name' => 'required',
			'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
			'message' => 'required',
		]);

		ClientsMessages::create($content->all());

	}

	public function sendForm(Request $request) {

		$this->createPost($request);
		return back()->with('success', 'Thank you for writing to us.');

	}
}

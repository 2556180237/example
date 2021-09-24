<?php

namespace App\Http\Controllers\Factory;

interface MessageInterface {

	public function createPost($content): void;
}

<?php

namespace App\Http\Controllers\Factory;

use App\Http\Controllers\Factory\MessageInterface;

abstract class MessagePost {

	abstract public function getSendType(): MessageInterface;

	public function post($content): void{

		$message = $this->getSendType();
		$message->createPost($content);
	}
}

<?php
namespace App\Helpers;

class Helper {
	public static function uploadFile($key, $path) {
		return request()->file($key)->store($path);
	}
}
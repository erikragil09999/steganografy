<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class SteganoController extends Controller
{
	public function index()
	{
		return view('stegano');
	}

	public function analyze(Request $request)
	{
		$cover_image = $request->cover_image;

		$image_properties = getimagesize($cover_image);

		$mean = $image_properties['0']+$image_properties['1']/2;
		$diff = $image_properties['0']-$image_properties['1'];
		
		$diff_deriv = 2 * $diff + $image_properties['bits'] ;
		$x_deriv = $mean + ($diff_deriv+1/2);
		$y_deriv = $mean - ($diff_deriv/2);

		return view('result', compact('image_properties', 'mean', 'diff', 'diff_deriv', 'x_deriv', 'y_deriv'));
	}

	function is_even($num)
	{
	// returns true if $num is even, false if not
		return ($num%2==0);
	}

	function asc2bin($char)
	{
	// returns 8bit binary value from ASCII char
	// eg; asc2bin("a") returns 01100001
		return str_pad(decbin(ord($char)), 8, "0", STR_PAD_LEFT);
	}

	function bin2asc($bin)
	{
	// returns ASCII char from 8bit binary value
	// eg; bin2asc("01100001") returns a
	// argument MUST be sent as string
		return chr(bindec($bin));
	}

	function rgb2bin($rgb)
	{
	// returns binary from rgb value (according to evenness)
	// this way, we can store one ascii char in 2.6 pixels
	// not a great ratio, but it works (albeit slowly)

		$binstream = "";
		$red = ($rgb >> 16) & 0xFF;
		$green = ($rgb >> 8) & 0xFF;
		$blue = $rgb & 0xFF;

		if(is_even($red))
		{
			$binstream .= "1";
		} else {
			$binstream .= "0";
		}
		if(is_even($green))
		{
			$binstream .= "1";
		} else {
			$binstream .= "0";
		}
		if(is_even($blue))
		{
			$binstream .= "1";
		} else {
			$binstream .= "0";
		}

		return $binstream;
	}

}

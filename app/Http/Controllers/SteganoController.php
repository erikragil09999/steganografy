<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class SteganoController extends Controller
{
	public function index()
	{
		return view('stegano');
	}

	public function register(Request $request)
	{
		$input = $request->all();

		return $input;
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

}

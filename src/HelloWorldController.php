<?php namespace Blackie0424\HelloWorld;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


class HelloWorldController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $message = 'Hello World';
        return view('HelloWorld::welcome',compact('message'));
	}

}

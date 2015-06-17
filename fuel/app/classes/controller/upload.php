<?php

class Controller_Upload extends Controller
{

//http://docolog.cocolog-nifty.com/papalog/2012/03/selectoptionimg.html
	//http://sandbox.scriptiny.com/tinybox2/
	public function before()
	{
		parent::before();
		Config::load('upload', true);
	}

	public function get_index()
	{
		$files = array();
		try
		{
			$files = File::read_dir(Config::get('upload.path'));
		} catch (InvalidPathException $e)
		{
			
		}
		return View::forge('upload/index', array('files' => $files));
	}

	public function post_upload()
	{
		Upload::process(array('path' => Config::get('upload.path')));
		if (Upload::is_valid())
		{
			Upload::save();
		}
		return Response::redirect('upload/index');
	}

}

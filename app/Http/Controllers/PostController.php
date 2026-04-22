<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

	class PostController extends Controller
	{
		public function show()
		{
			return view('post.show', [
				'title' => 'page title',
				'text'  => 'page content',
			]);
		}

		public function pp()
		{
			$posts = DB::table('posts5')->get();
			return view('post.pp', ['title' => 'page title','posts' => $posts]);
		}




	}
?>

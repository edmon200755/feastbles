<?php
namespace App\Http\Controllers;

use App\Models\Post5;
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
			$posts = Post5::all();
			return view('post.pp', ['title' => 'page title','posts' => $posts]);
		}

		public function getone()
		{
			$posts = Post5::find(1); 
			return view('post.getone', ['title' => 'page title','posts' => $posts]);
		}




	}
?>

<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
	class UserController extends Controller
	{
		public function show()
		{
			return view('user.shows', [
				'title' => 'page title',
				'text'  => 'привет',
			]);
		}



		public function namesurname($name, $surname)
		{
			return view('user.names', [
				'title' => 'page title',
				'name'  => $name,
				'surname' => $surname
			]);
		}



		public function hello($age)
		{
			return view('user.hello', [
				'title' => 'page title',
				'age'  => $age,
			]);
		}










	}
?>

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

        public function nas($name, $age, $salary)
		{
			return view('user.nas', [
				'title' => 'page title',
				'name'  => $name,
				'age'  => $age,
				'salary'  => $salary,
			]);
		}


        public function num2()
		{
            $peremen = 'color: blue';
			return view('user.num2', 
				compact('peremen'));
		}

        public function class($age, $name, $surname)
		{
			return view('user.a', [
				'title' => 'page title',
                'age'  => $age,
				'name'  => $name,
				'surname'  => $surname,
			]);
		}

		public function red()
		{
            $peremen = 'color: red';
			return view('user.red', [
				'title' => 'page title',
                'peremen'  => $peremen,
			]);
		} 

		public function href()
		{
			$text = 'Перейти по ссылке';
            $href = 'https://omacademy.ru/';
			return view('user.href', [
				'title' => 'page title',
            'text' => $text,
			'href' => $href
			]);
		}

		public function date()
		{
            $artem = date('d.m.Y');
			return view('user.date', [
				'title' => 'page title',
				'artem' => $artem
			]);
		}






	}
?>

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

		public function sotr()
		{
			$name = 'artem';
			$age = '23';
			$salary = '16000';
			return view('user.sotrudnik', [
				'title' => 'page title',
				'name' => $name,
				'age' => $age,
				'salary' => $salary,
			]);
		}

		public function mas()
		{

			return view('user.mas', [
				'title' => 'page title',
				'arr' => [1,2,3,4,5]
			]);
		}

			public function gorod()
		{
			$city = 'Омск';
			return view('user.city', [
				'title' => 'page title',
				'city' => $city
			]);
		}

		public function pot()
		{
			$strana = 'Германия';
			$city = 'Берлин';
			return view('user.pot', [
				'title' => 'page title',
				'location' => ['strana' => $strana, 'city' => $city]
			]);
		}

		public function vremya()
		{
			$year = '';
			$month = '';
			$day = '';
			return view('user.shas', [
				'title' => 'page title',
				'year' => $year,
				'month' => $month,
				'day' => $day
			]);
		}

		public function zhir()
		{
            $str = '<b>text</b>';
			return view('user.zhir', [
				'title' => 'page title',
				'str' => $str
			]);
		}

		public function comm()
		{
            $kod = 'hello';
			return view('user.comm', [
				'title' => 'page title',
				'kod' => $kod
			]);
		}

		public function vozr()
		{
            $age = 18;
			return view('user.vozr', [
				'title' => 'page title',
				'age' => $age
			]);
		}

		public function vozrast()
		{
            $age = 19;
			return view('user.vozrast', [
				'title' => 'page title',
				'age' => $age
			]);
		}

		public function rovno()
		{
            $age = 19;
			return view('user.rovno', [
				'title' => 'page title',
				'age' => $age
			]);
		}

		public function unless()
		{
            $age = 17;
			return view('user.unless', [
				'title' => 'page title',
				'age' => $age
			]);
		}

		public function sumas()
		{
   
			return view('user.sumas', [
				'title' => 'page title',
				'arr' => [1,2,3,4,5]
			]);
		}

		public function ul()
		{
   
			return view('user.ul', [
				'title' => 'page title',
				'arr' => [1,2,3,4,5]
			]);
		}

		public function square()
		{
   
			return view('user.square', [
				'title' => 'page title',
				'arr' => [1,2,3,4,5]
			]);
		}

		public function kor()
		{
   
			return view('user.kor', [
				'title' => 'page title',
				'arr' => [1,2,3,4,5]
			]);
		}

		public function cpicok()
		{
   
			return view('user.cpicok', [
				'title' => 'page title',
				'arr' => ['Hello', 'World', 'Tamaev']
			]);
		}

		public function plus()
		{
   
			return view('user.plus', [
				'title' => 'page title',
				'arr' => ['Hello', 'World', 'Tamaev']
			]);
		}

		public function chetnie()
		{
   
			return view('user.chetnie', [
				'title' => 'page title',
				'arr' => [1,2,3,4,5,6,7,8,9,10]
			]);
		}

		public function datka()
		{
            $data = 12;
			return view('user.datka', [
				'title' => 'page title',
				'data' => $data
			]);
		}

		public function html()
		{
            $employees = [
		[
			'name' => 'user1',
			'surname' => 'surname1',
			'salary' => 1000,
		],
		[
			'name' => 'user2',
			'surname' => 'surname2',
			'salary' => 2000,
		],
		[
			'name' => 'user3',
			'surname' => 'surname3',
			'salary' => 3000,
		],
	];
			return view('user.html', [
				'title' => 'page title',
				'employees' => $employees
				

			]);
		}

		public function users()
		{
            $users = ['Artem2007', 'Edmon2007', 'Trofimoz2007', 'Zetmermeister2007'];
			return view('user.users', [
				'title' => 'page title',
				'users' => $users
			]);
		}

		public function iter()
		{
            $users = ['Artem2007', 'Edmon2007', 'Trofimoz2007', 'Zetmermeister2007'];
			return view('user.iter', [
				'title' => 'page title',
                'users' => $users
			]);
		}

		public function sod()
		{
            $users = ['Artem2007', 'Edmon2007', 'Trofimoz2007', 'Zetmermeister2007'];
			return view('user.sod', [
				'title' => 'page title',
                'users' => $users
			]);
		}

		public function clacss()
		{
            $users = ['Artem2007', 'Edmon2007', 'Trofimoz2007', 'Zetmermeister2007'];
			return view('user.clacss', [
				'title' => 'page title',
                'users' => $users
			]);
		}





		






	}
?>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

use DB;

class UsersController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index(Request $request)
	{
	    return view('users.index', []);
	}

	public function create(Request $request)
	{
	    return view('users.add', [
	        []
	    ]);
	}

	public function edit(Request $request, $id)
	{
		$user = User::findOrFail($id);
	    return view('users.add', [
	        'model' => $user	    ]);
	}

	public function show(Request $request, $id)
	{
		$user = User::findOrFail($id);
	    return view('users.show', [
	        'model' => $user	    ]);
	}

	public function grid(Request $request)
	{
		$len = $_GET['length'];
		$start = $_GET['start'];

		$select = "SELECT id,nama,email,created_at,updated_at,username ";
		$presql = " FROM users a ";
		if($_GET['search']['value']) {	
			$presql .= " WHERE nama LIKE '%".$_GET['search']['value']."%' ";
		}
		
		$presql .= "  ";

		$sql = $select.$presql." LIMIT ".$start.",".$len;


		$qcount = DB::select("SELECT COUNT(a.id) c".$presql);
		//print_r($qcount);
		$count = $qcount[0]->c;

		$results = DB::select($sql);
		$ret = [];
		foreach ($results as $row) {
			$r = [];
			foreach ($row as $value) {
				$r[] = $value;
			}
			$ret[] = $r;
		}

		$ret['data'] = $ret;
		$ret['recordsTotal'] = $count;
		$ret['iTotalDisplayRecords'] = $count;

		$ret['recordsFiltered'] = count($ret);
		$ret['draw'] = $_GET['draw'];

		echo json_encode($ret);

	}


	public function update(Request $request) {
	    //
	    /*$this->validate($request, [
	        'name' => 'required|max:255',
	    ]);*/
		$user = null;
		if($request->id > 0) { $user = User::findOrFail($request->id); }
		else { 
			$user = new User;
		}
	    

	    		
			    $user->id = $request->id?:0;
				
	    		
			    $user->nama = $request->nama;

		
			    $user->email = $request->email;

		
			    $user->password = bcrypt('asramaitb');

		
			    $user->username = $request->username;
		
	    	    //$user->user_id = $request->user()->id;
	    $user->save();

	    return redirect('/users');

	}

	public function store(Request $request)
	{
		return $this->update($request);
	}

	public function destroy(Request $request, $id) {
		
		$user = User::findOrFail($id);

		$user->delete();
		return "OK";
	    
	}

	
}
<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Repositories\ClientApi;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    protected $client;

    public function __construct(ClientApi $client){
        $this->client = $client;
    }
    public function index()
    {
        $users = $this->client->index();
       // dd($users);
        return view('users.index', compact('users'));
    }
    public function show($id)
    {
        $user = $this->client->user($id);
        return view('users.show', compact('user'));
    }
    public function search(Request $request)
    {

        $user = $this->client->user($request['search']);

        return view('users.index', compact('user'));
       // return redirect()->back()->with('users', $users);
    }


}

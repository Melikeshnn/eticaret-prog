<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

//MODELs
use App\Models\User;

class SuperAdminController extends Controller
{
    public function changeUserAuthorityIndex()
    {
        $normalUsers = User::where('type', 'user')->get();
        $admins = User::where('type', 'admin')->get();

        return view('back.superAdmin.changeUserAuthority', compact('normalUsers', 'admins'));
    }

    public function changeUserAuthority(Request $request)
    {
        if($request->type === 'user'){
            $user = User::findOrFail($request->selectedNormalUser);
            $user->type = 'admin';
            $user->save();
            flash('Success message')->success();
            return redirect()->back();
        }
        elseif($request->type === 'admin'){
            $admin = User::findOrFail($request->selectedAdmin);
            $admin->type = 'user';
            $admin->save();
            flash('Success message')->success();
            return redirect()->back();
        }
        flash('İşlem gerçekleştirilemedi.')->error();
        return redirect()->back();
    }

    public function changeUserActivePassiveIndex()
    {
        $users = User::orderBy('id')->paginate(10);
        $passiveUsers = User::where('isDeleted', 1)->get();
        $activeUsers = User::where('isDeleted', 0)->get();

        return view('back.superAdmin.changeUserActivePassive', compact('passiveUsers', 'activeUsers', 'users'));
    }

    public function changeUserActivePassive($id,$status)
    {
        try {
            $updateStatus =  User::whereId($id)->update([
                'isDeleted' => $status
            ]);

            if ($updateStatus) {
                flash('Kullanıcı durumu başarıyla güncellendi.')->success();
                return redirect()->back();
            }

            flash('Hata !')->error();
            return redirect()->back();


        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function userEdit($id){

        $users = User::findOrFail($id);

        return view('back.superAdmin.userUpdate', compact('users'));
    }

    public function userUpdate(Request $request)
    {
        $user = User::findOrFail($request->userId);

        if($request['newpass1'] == $request['newpass2'])
        {
        $user->name = $request['name'];
        $user->surname = $request['surname'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['newpass1']);

        /*
        if($request->has('newProfilePhoto')){
            $fileNameStartWith = auth()->user()->id . '_' . strtolower(auth()->user()->name) . '-' . strtolower(auth()->user()->surname) . '_';
            $fileName = $fileNameStartWith . 'newProfilePhoto' . '_' . date_timestamp_get(date_create()) . '.' . $request->newProfilePhoto->extension();
            $fileNameWithUpload = 'images/uploads/userProfilePhotos/' . $fileName;
            $request->newProfilePhoto->move(public_path('images/uploads/userProfilePhotos'), $fileNameWithUpload);
            $user->profilePhoto = $fileName;
        }*/

        $user->save();

        flash('Bilgileriniz başarıyla değiştirildi.')->success();
        return redirect()->route('back.superAdmin.changeUserActivePassive');
    }
    else if($request['newpass1'] != $request['newpass2'])
    {
        flash('Yeni şifreler birbiriyle eşleşmedi. Tekrar Deneyin !')->error();
        return redirect()->route('back.superAdmin.changeUserActivePassive');
    }
    }

    public function userSearch(Request $request){
        try {
            $users = User::where('name', 'LIKE', '%'.$request->name.'%')->limit(1)->paginate(1);
            if(count($users) === 1){
                return view('back.superAdmin.changeUserActivePassive', compact('users'));

            }
            flash('Böyle bir kullanıcı yok !')->error();
            return redirect()->back();
        }
        catch (\Exception $exception){
            flash('İşlem gerçekleştirilirken bir hata oldu. '. $exception->getMessage())->error();
            return redirect()->back();
        }
    }

    public function userDelete($id){

        $users = User::findOrFail($id);
        $users->delete();
        flash('Kullanıcı başarıyla silindi.')->success();
        return redirect()->route('back.superAdmin.changeUserActivePassive');
    }
}

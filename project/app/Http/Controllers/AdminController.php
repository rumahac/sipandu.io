<?php

namespace App\Http\Controllers;

use App\Admin;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreValidationRequest;
use App\Http\Requests\UpdateValidationRequest;
use App\Slider;
use App\Specialist;
use App\Service;
use App\Resume;
use App\Counter;
use App\Image;
use App\Portfolio;
use App\Post;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $sliders = Slider::all();
        $galleries = Image::all();
        $ads = Portfolio::all();
        $referrals = Counter::where('type','referral')->orderBy('total_count','desc')->take(11)->get();
        $browsers = Counter::where('type','browser')->orderBy('total_count','desc')->take(11)->get();
        return view('admin.index',compact('sliders','referrals','browsers','ads','galleries'));
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function info()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.info',compact('admin'));
    }

    public function infoup(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        $input = $request->all();
            if ($file = $request->file('himg')) 
            {              
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images',$name);
                if($admin->himg != null)
                {
                    unlink(public_path().'/assets/images/'.$admin->himg);
                }            
            $input['himg'] = $name;
            } 
            if ($file1 = $request->file('mimg')) 
            {              
                $name = time().$file1->getClientOriginalName();
                $file1->move('assets/images',$name);
                if($admin->mimg != null)
                {
                    unlink(public_path().'/assets/images/'.$admin->mimg);
                }            
            $input['mimg'] = $name;
            } 
            if ($file2 = $request->file('appimg')) 
            {              
                $name = time().$file2->getClientOriginalName();
                $file2->move('assets/images',$name);
                if($admin->appimg != null)
                {
                    unlink(public_path().'/assets/images/'.$admin->appimg);
                }            
            $input['appimg'] = $name;
            }  
            if ($file3 = $request->file('playimg')) 
            {              
                $name = time().$file3->getClientOriginalName();
                $file3->move('assets/images',$name);
                if($admin->playimg != null)
                {
                    unlink(public_path().'/assets/images/'.$admin->playimg);
                }            
            $input['playimg'] = $name;
            }            
        $admin->update($input);
        return redirect()->route('admin-info')->with('success','Successfully Updated The Information.');;
    }

    public function proinfo()
    {
        $admin = Auth::guard('admin')->user();
        if($admin->pareas != null)
        {
            $pareas = explode(',', $admin->pareas);            
        }
        return view('admin.proinfo',compact('admin','pareas'));
    }

    public function proinfoup(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        $data = $request->all();
        if (!empty($request->pareas)) 
         {
            $data['pareas'] = implode(',', $request->pareas);       
         }
        if (empty($request->pareas)) 
         {
            $data['pareas'] = null;       
         }
        $admin->update($data);
        return redirect()->route('admin-proinfo')->with('success','Successfully Updated The Information.');;
    }

    public function video()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.video',compact('admin'));
    }

    public function videoup(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        $url = $request->vid;

        if ( (strpos($url, 'youtube') !== false) || (strpos($url, 'vimeo') !== false) ) 
        {
            $input = $request->all();
                if ($file = $request->file('vidimg')) 
                {    
                    $name = time().$file->getClientOriginalName();
                    $file->move('assets/images',$name);
                    if($admin->vidimg != null)
                    {
                        unlink(public_path().'/assets/images/'.$admin->vidimg);
                    }            
                $input['vidimg'] = $name;
                } 
            $admin->update($input);
            return redirect()->route('admin-video')->with('success','Successfully Updated The Information.');
        }

        else
        {
        return redirect()->route('admin-video')->with('unsuccess','The URL is Invaild.');        
        }
    }

    public function proimg()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.proimg',compact('admin'));
    }

    public function proimgup(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        $input = $request->all();
            if ($file = $request->file('fimg')) 
            {              
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images',$name);
                if($admin->fimg != null)
                {
                    unlink(public_path().'/assets/images/'.$admin->fimg);
                }            
            $input['fimg'] = $name;
            } 
            if ($file = $request->file('hsimg')) 
            {              
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images',$name);
                if($admin->hsimg != null)
                {
                    unlink(public_path().'/assets/images/'.$admin->hsimg);
                }            
            $input['hsimg'] = $name;
            } 
        $admin->update($input);
        return redirect()->route('admin-profile1')->with('success','Successfully Updated The Information.');;
    }

    public function profileimg()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.pimg',compact('admin'));
    }

    public function profileimgup(Request $request)
    {
        $this->validate($request, [
               'ba' => 'numeric',
               'sa' => 'numeric',
               'pa' => 'numeric'
           ]);
        $admin = Auth::guard('admin')->user();
        $input = $request->all();
        $admin->update($input);
        return redirect()->route('admin-proimg')->with('success','Successfully Updated The Information.');;
    }

    public function basic(Request $request)
    {
        $this->validate($request, [
               'ba' => 'numeric'
           ]);
        $admin = Auth::guard('admin')->user();
        $input = $request->all();
        $admin->update($input);
        return redirect()->route('admin-proimg')->with('basic','Successfully Updated');;
    }

    public function standard(Request $request)
    {
        $this->validate($request, [
               'sa' => 'numeric'
           ]);
        $admin = Auth::guard('admin')->user();
        $input = $request->all();
        $admin->update($input);
        return redirect()->route('admin-proimg')->with('standard','Successfully Updated');;
    }

    public function pro(Request $request)
    {
        $this->validate($request, [
               'pa' => 'numeric'
           ]);
        $admin = Auth::guard('admin')->user();
        $input = $request->all();
        $admin->update($input);
        return redirect()->route('admin-proimg')->with('pro','Successfully Updated');;
    }

    public function simg()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.spimg',compact('admin'));
    }

    public function simgup(Request $request)
    {
        $this->validate($request, [
               'p1' => 'integer',
               'p2' => 'integer',
               'p3' => 'integer',
               'p4' => 'integer'
           ]);
        $admin = Auth::guard('admin')->user();
        $input = $request->all();
            if ($file = $request->file('simg')) 
            {              
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images',$name);
                if($admin->simg != null)
                {
                    unlink(public_path().'/assets/images/'.$admin->simg);
                }            
            $input['simg'] = $name;
            } 
            if ($file = $request->file('appico')) 
            {              
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images',$name);
                if($admin->appico != null)
                {
                    unlink(public_path().'/assets/images/'.$admin->appico);
                }            
            $input['appico'] = $name;
            } 
            if ($file = $request->file('plaico')) 
            {              
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images',$name);
                if($admin->plaico != null)
                {
                    unlink(public_path().'/assets/images/'.$admin->plaico);
                }            
            $input['plaico'] = $name;
            } 
            if ($file = $request->file('fsimg')) 
            {              
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images',$name);
                if($admin->fsimg != null)
                {
                    unlink(public_path().'/assets/images/'.$admin->fsimg);
                }            
            $input['fsimg'] = $name;
            } 
        $admin->update($input);
        return redirect()->route('admin-special')->with('success','Successfully Updated The Information.');;
    }

    public function bimg()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.bimg',compact('admin'));
    }

    public function bimgup(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        $input = $request->all();
            if ($file = $request->file('timg')) 
            {              
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images',$name);
                if($admin->timg != null)
                {
                    unlink(public_path().'/assets/images/'.$admin->timg);
                }            
            $input['timg'] = $name;
            } 
        $admin->update($input);
        return redirect()->route('admin-back')->with('success','Successfully Updated The Information.');;
    }

    public function profileupdate(UpdateValidationRequest $request)
    {
        $input = $request->all();  
        $admin = Auth::guard('admin')->user();        
            if ($file = $request->file('photo')) 
            {              
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images',$name);
                if($admin->photo != null)
                {
                    unlink(public_path().'/assets/images/'.$admin->photo);
                }            
            $input['photo'] = $name;
            } 

        $admin->update($input);
        Session::flash('success', 'Successfully updated your profile');
        return redirect()->back();
    }


    public function passwordreset()
    {
        return view('admin.reset-password');
    }

    public function changepass(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        if ($request->cpass){
            if (Hash::check($request->cpass, $admin->password)){
                if ($request->newpass == $request->renewpass){
                    $input['password'] = Hash::make($request->newpass);
                }else{
                    Session::flash('unsuccess', 'Confirm password does not match.');
                    return redirect()->back();
                }
            }else{
                Session::flash('unsuccess', 'Current password Does not match.');
                return redirect()->back();
            }
        }
        $admin->update($input);
        Session::flash('success', 'Successfully updated your password');
        return redirect()->back();
    }
    
}

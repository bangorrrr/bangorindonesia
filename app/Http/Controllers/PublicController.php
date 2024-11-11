<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\MasterHead;
use App\Models\MasterCarousel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Exception;

class PublicController extends Controller
{
    public function index(){
        return view('pages.front.index');
    }

    public function about(){
        return view('pages.front.about');
    }
    public function menu(){
        return view('pages.front.menu');
    }
    public function store(){
        return view('pages.front.store');
    }
    public function partnership(){
        return view('pages.front.partnership');
    }
    public function bigorder(){
        return view('pages.front.bigorder');
    }
    public function contact(){
        return view('pages.front.contact');
    }
    public function bangorberbagi(){
        return view('pages.front.bangor-berbagi');
    }

    public function bangorgoestoschool(){
        return view('pages.front.bangor-goestoschool');
    }
    public function bangorfuncookingclass(){
        return view('pages.front.bangor-funcookingclass');
    }
    public function bangorstreetactivation(){
        return view('pages.front.bangor-streetactivation');
    }

    public function bangorgoestoevent(){
        return view('pages.front.bangor-goestoevent');
    }



    public function getData():JsonResponse
    {
        $masterHead = MasterHead::select('title','subtitle','image')->latest()->first();
        $contact = Contact::select('name','email','phone','message')->get();
        $mastercarousel = MasterCarousel::select('title','image')->get();
        $data = [
            'master_head' => $masterHead,
            'master_carousel' => $mastercarousel,
        ];
        return response()->json($data);
    }

    public function storeMessage(Request $request): JsonResponse
    {
        date_default_timezone_set('Asia/Jakarta');
        $rescode = 200;
        try{
            $rules = [
                'name' => 'required|string|max:255',
                'email' => 'required|email:dns|max:255',
                'phone' => 'required|string|max:15',
                'message' => 'required|string|max:255',
            ];
            $massages = [
                'required' => ':attribute wajib diisi',
                'string' => ':attribute harus bertipe string',
                'max' => ':attribute tidak boleh lebih dari :max',
                'email.dns' => 'email tidak valid',

            ];
            $data = $request->all();
            $validator = Validator::make($data, $rules, $massages);
            if($validator->fails()){
                $v_error = $validator->errors()->all();
                $res = ['success'=>0, 'messages'=> implode(',',$v_error)];
            }
            else{
                $validData = $validator->validate();
                contact::create($validData);
                $res = ['success'=>0, 'messages'=> 'Success'];
            }
        }
        catch (QueryException $e) {
            $res = ['success' => 0, 'messages' => 'Ops terjadi kesalahan saat Proses data'];
            Log::error('QueryException: '.$e);
        } catch (Exception $e) {
            $res = ['success' => 0, 'messages' => 'Ops terjadi kesalahan pada server'];
            Log::error('Exception: '.$e);
        }

        return response()->json($res, $rescode);
    }

}

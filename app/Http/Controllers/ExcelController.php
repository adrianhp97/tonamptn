<?php

namespace App\Http\Controllers;

use DB;
use App\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ExcelController extends Controller
{
    public function index()
	{
		return view('export');
	}
	public function downloadExcel($type)
	{
		$data = Peserta::get()->toArray();
		return \Excel::create('Data Peserta', function($excel) use ($data) {
			$excel->sheet('peserta', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
	public function importExcel()
	{
		if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = \Excel::load($path, function($reader) {
			})->get();
			if(!empty($data) && $data->count()){
                $insert = $data->toArray();  
                foreach ($insert as $key => $value) {
                    $insert[$key]['login'] = false;
                }  
                DB::table('peserta')->delete();
                DB::table('peserta')->insert($insert);
			}
		}
		return back();
	}
}

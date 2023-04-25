<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class MahasiswaController extends Controller
{
    public function index()
    {
    	// take data to mahasiswa
    	$mahasiswa = DB::table('mahasiswa')->get();
 
    	// send data mahasiswa to index
    	return view('index',['mahasiswa' => $mahasiswa]);
    }

	// for showing up view of mahasiswa
    public function tambah()
	{
		// calls tambah
		return view('tambah');
	}

	//store data
	public function store(Request $request)
	{
		$validatedData = $request->validate([
			'nim' => ['required', 'numeric', 'digits:10', function($attribute, $value, $fail) {
				if(DB::table('mahasiswa')->where('mahasiswa_nim', $value)->exists()) {
					$fail('NIM sudah ada');
				}
			}],
			'nama' => ['required', 'string'],
			'fakultas' => ['required', 'string', 'max:255'],
			'prodi' => ['required', 'string', 'max:255'],
			'alamat' => ['required', 'string', 'max:255'],
		], [
			'nim.digits' => 'NIM harus terdiri 10 angka',
			'nim.required' => 'NIM tidak boleh kosong.',
			'nim.numeric' => 'NIM harus berisi angka.',
			'nama.required' => 'Nama tidak boleh kosong.',
			'fakultas.required' => 'Fakultas tidak boleh kosong.',
			'prodi.required' => 'Prodi tidak boleh kosong.',
			'alamat.required' => 'Alamat tidak boleh kosong.',

		]);
		
	
		// only for desired data
		$mahasiswaData = Arr::only($validatedData, ['nim', 'nama', 'fakultas', 'prodi', 'alamat']);
	
		// store data to database
		$mahasiswa = DB::table('mahasiswa')->insert([
			'mahasiswa_nim' => $mahasiswaData['nim'],
			'mahasiswa_nama' => $mahasiswaData['nama'],
			'mahasiswa_fakultas' => $mahasiswaData['fakultas'],
			'mahasiswa_prodi' => $mahasiswaData['prodi'],
			'mahasiswa_alamat' => $mahasiswaData['alamat']
		]);
	
		// redirect with success message
		return redirect()->route('mahasiswa')->with(['success' => 'Data Berhasil Disimpan!']);
	}

	
	public function edit($nim)
{
	// take data according to nim
	$mahasiswa = DB::table('mahasiswa')->where('mahasiswa_nim',$nim)->get();
	// passing data mahasiswa and send it to edit.blade.php
	return view('edit',['mahasiswa' => $mahasiswa]);
 
}

// update data mahasiswa
public function update(Request $request)
{
	
    DB::table('mahasiswa')
        ->where('mahasiswa_nim', $request->nim)
        ->update([
            'mahasiswa_nim' => $request->nim, // uneditable primary key
            'mahasiswa_nama' => $request->nama,
            'mahasiswa_fakultas' => $request->fakultas,
            'mahasiswa_prodi' => $request->prodi,
            'mahasiswa_alamat' => $request->alamat
        ]);

    	return redirect()->route('mahasiswa')->with(['success_delete' => 'Data Berhasil Diupdate!']);
}

	
	

	// method for delete data mahasiswa
	public function hapus($nim)
	{
		// delete data according to nim
		DB::table('mahasiswa')->where('mahasiswa_nim',$nim)->delete();
		
		// direct page to index
		return redirect()->route('mahasiswa')->with(['success_delete' => 'Data Berhasil Dihapus!']);
	}
}

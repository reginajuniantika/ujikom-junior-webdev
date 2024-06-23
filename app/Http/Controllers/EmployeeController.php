<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreemployeeRequest;
use App\Http\Requests\UpdateemployeeRequest;
use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = employee::orderBy('id', 'desc')->get();

        return view('pegawai', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreemployeeRequest $request)
    {
        $validated = $request->validated();
        $imageName = time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move(public_path('images'), $imageName);
        $validated['photo'] = $imageName;
        employee::create($validated);

        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateemployeeRequest $request, employee $employee, $id)
    {
        $validated = $request->validated();
        $data = employee::find($id);
        $data->update([
            'name' => $validated['nameupdate'],
            'email' => $validated['emailupdate'],
            'phone_number' => $validated['phone_numberupdate'],
            'alamat' => $validated['alamatupdate'],
            'domisili' => $validated['domisiliupdate'],
        ]);
        return redirect()->back()->with('success', 'Data Berhasil Update');
    }

    public function updateimage(Request $request, $id)
    {
        request()->validate(
            [
                'imageupdate' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'imageupdate.required' => 'Gambar Surat Harus diisi',
                'imageupdate.mimes' => 'Format Ikon Harus jpeg,png,jpg,gif,svg',
                'imageupdate.max' => 'Ukuran Ikon Maksimal 2 Mb',
            ]
        );

        // Cari employee berdasarkan ID
        $data = employee::find($id);

        if ($data) {
            // Hapus gambar sebelumnya jika ada
            $oldImage = $data->photo;
            if ($oldImage) {
                $oldImagePath = public_path('images').'/'.$oldImage;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Simpan gambar baru
            $imageName = time().'.'.$request->imageupdate->getClientOriginalExtension();
            $request->imageupdate->move(public_path('images'), $imageName);

            // Update photo di database
            $data->update([
                'photo' => $imageName,
            ]);

            return back()->with('successedit', '');
        } else {
            return back()->with('error', 'Employee tidak ditemukan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employee $employee, $id)
    {
        employee::destroy($id);

        return redirect()->back()->with('successhapus', 'Data Berhasil Dihapus');
    }
}

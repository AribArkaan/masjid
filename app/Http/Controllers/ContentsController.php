<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Donasi;
use App\Models\event;
use App\Models\Hero;
use App\Models\Kontak;
use App\Models\PaymentMethod;
use App\Models\Tentang;
use Illuminate\Http\Request;

class ContentsController extends Controller
{
    public function index(Request $request)
    {

        $events = Event::all()->map(function ($event) {
            $event->path = $event->path ? asset('storage/' . $event->path) : null;
            return $event;
        });

        $donasis = Donasi::all()->map(function ($donasi) {
            $donasi->path = $donasi->path ? asset('storage/' . $donasi->path) : null;
            $donasi->qris_path = $donasi->qris_path ? asset($donasi->qris_path) : null;

            $donasi->bank = collect([
                ['key' => 'ATM1', 'nama' => $donasi->nama_atm_1, 'no_rek' => $donasi->no_rek_1, 'atas_nama' => $donasi->atas_nama_1],
                ['key' => 'ATM2', 'nama' => $donasi->nama_atm_2, 'no_rek' => $donasi->no_rek_2, 'atas_nama' => $donasi->atas_nama_2],
                ['key' => 'ATM3', 'nama' => $donasi->nama_atm_3, 'no_rek' => $donasi->no_rek_3, 'atas_nama' => $donasi->atas_nama_3],
            ])->filter(function ($bank) {
                return !empty($bank['nama']) && !empty($bank['no_rek']);
            })->values();

            $donasi->emoney = collect([
                ['key' => 'emoney1', 'nama' => $donasi->emoney_1, 'va' => $donasi->nomer_va_1, 'atas_nama' => $donasi->atas_nama_4],
                ['key' => 'emoney2', 'nama' => $donasi->emoney_2, 'va' => $donasi->nomer_va_2, 'atas_nama' => $donasi->atas_nama_5],
                ['key' => 'emoney3', 'nama' => $donasi->emoney_3, 'va' => $donasi->nomer_va_3, 'atas_nama' => $donasi->atas_nama_6],
            ])->filter(function ($emoney) {
                return !empty($emoney['nama']) && !empty($emoney['va']);
            })->values();


            return $donasi;
        });

      

        $contents = Content::all();
        $tentangs = Tentang::all();
        $Hero = Hero::all();
        $kontaks = Kontak::all();
        $events = event::all();

        return view('landingpage', compact('contents', 'tentangs', 'donasis', 'Hero', 'kontaks',  'events'));
    }


    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_atm_1' => 'required',
            'no_rek_1' => 'required',
            'nama_atm_2' => 'required',
            'no_rek_2' => 'required',
            'nama_atm_3' => 'required',
            'no_rek_3' => 'required',
            'emoney_1' => 'required',
            'nomer_va_1' => 'required',
            'emoney_2' => 'required',
            'nomer_va_2' => 'required',
            'emoney_3' => 'required',
            'nomer_va_3' => 'required',
            'qris_path' => 'nullable|file|mimes:png,jpg,jpeg|max:2048',

        ]);


        if ($request->hasFile('qris_path')) {
            $file = $request->file('qris_path');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path(), $fileName); 
            $validatedData['qris_path'] = $fileName; 
        }


        // Buat entri baru
        Donasi::create($validatedData);

        return redirect()->route('donasi.index');
    }

    public function getPaymentDetails($id)
    {
        $donasi = Donasi::findOrFail($id);

        $filteredData = [
            'bank' => $donasi->bank,
            'emoney' => $donasi->emoney,
            'qris_path' => $donasi->qris_path ? asset($donasi->qris_path) : null,
        ];

        return response()->json($filteredData);
    }


    public function getPaymentMethod(Request $request)
    {

        $paymentMethods = Donasi::find($request->id);

        return $paymentMethods;
    }
}

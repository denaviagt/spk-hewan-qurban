<?php

namespace App\Http\Controllers\Animal;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\AnimalType;
use App\Models\Criteria;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hewan.index', ["criterias" => Criteria::all(), "animals" => Animal::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hewan.add', [
            'animal_types' => AnimalType::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama_hewan = $request->nama_hewan;
        $tipe_hewan = $request->tipe_hewan;
        $umur = $request->umur;
        $berat = $request->berat;
        $warna = $request->warna;
        $jenisKelamin = $request->jkel;
        $bebasPMK = $request->bebas_pmk;

        $animalType = AnimalType::find($tipe_hewan);
        $animal = $animalType->animals()->create([
            'name' => $nama_hewan,
            'user_id' => auth()->id()
        ]);

        $criteriaAnimals = $animal->criteriaAnimals()->createMany([
            [
                'criteria_id' => 1,
                'value' => $umur,
                'score' => $this->scoreUmur($tipe_hewan, $umur)
            ],
            [
                'criteria_id' => 2,
                'value' => $berat,
                'score' => $this->scoreBerat($tipe_hewan, $berat)
            ],
            [
                'criteria_id' => 3,
                'value' => $warna,
                'score' => $this->scoreWarna($warna)
            ],
            [
                'criteria_id' => 4,
                'value' => $jenisKelamin,
                'score' => $this->scoreJenisKelamin($jenisKelamin)
            ],
            [
                'criteria_id' => 5,
                'value' => $bebasPMK,
                'score' => $this->scoreBebasPmk($bebasPMK)
            ],
        ]);

        return redirect('/hewan');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function scoreUmur($tipe_hewan, $Umur)
    {
        if ($tipe_hewan == 1) {
            if ($Umur < 2) return 0.01;
            if ($Umur <= 3) return 1;
        }

        if ($tipe_hewan == 2) {
            if ($Umur < 1) return 0.01;
            if ($Umur <= 2) return 1;
        }

        if ($tipe_hewan == 3) {
            if ($Umur < 0.5) return 0.01;
            if ($Umur <= 1.5) return 1;
        }

        return 0.3;
    }

    private function scoreBerat($tipe_hewan, $Berat)
    {
        if ($tipe_hewan == 2 || $tipe_hewan == 3) {
            if ($Berat < 23) return 0.2;
            if ($Berat <= 28) return 0.7;
        }

        if ($tipe_hewan == 1) {
            if ($Berat < 200) return 0.2;
            if ($Berat <= 300) return 0.7;
        }

        return 1;
    }

    private function scoreWarna($Warna)
    {
        if('putih' == strtolower($Warna)) return 1;
        if('coklat' == strtolower($Warna)) return 0.75;
        if ('hitam' == strtolower($Warna)) return 0.5;
        return 0.25;
    }

    private function scoreJenisKelamin($JenisKelamin)
    {
        if ('jantan' == strtolower($JenisKelamin)) return 1;
        return 0.5;
    }

    private function scoreBebasPmk($BebasPMK)
    {
        if ('ya' == strtolower($BebasPMK)) return 1;

        return 0.01;
    }
}

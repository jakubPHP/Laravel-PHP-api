<?php

namespace App\Http\Controllers;

    use App\Models\People;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;
    use Illuminate\Support\Facades\DB;
    
    class PeopleController extends Controller
{
    public function index(): JsonResponse
    {
        $people = People::all();

        return response()->json($people);
    }

    public function store(Request $request): JsonResponse
    {
        $people = People::create([
            'imie' => $request->input('imie'),
            'nazwisko' => $request->input('nazwisko'),
            'nr_telefonu' => $request->input('nr_telefonu'),
            'ulice' => $request->input('ulice'),
            'miasto' => $request->input('miasto'),
            'kraj' => $request->input('kraj')
        ]);

        return response()->json($people, 201);
    }

    public function show($id): JsonResponse
    {
        $people = People::find($id);

        if (!$people) {
            return response()->json(['message' => 'Nie znaleziono rekordu'], 404);
        }

        return response()->json($people);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $people = People::find($id);

        if (!$people) {
            return response()->json(['message' => 'Nie znaleziono rekordu'], 404);
        }

        $people->imie = $request->input('imie');
        $people->nazwisko = $request->input('nazwisko');
        $people->nr_telefonu = $request->input('nr_telefonu');
        $people->ulice = $request->input('ulice');
        $people->miasto = $request->input('miasto');
        $people->kraj = $request->input('kraj');

        $people->save();

        return response()->json($people);
    }

    public function destroy($id): JsonResponse
    {
        $people = People::find($id);

        if (!$people) {
            return response()->json(['message' => 'Nie znaleziono rekordu'], 404);
        }

        $people->delete();

        return response()->json(['message' => 'Rekord został usunięty']);
    }
}



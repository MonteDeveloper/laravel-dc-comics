<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Comic;
// use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ComicRequest;

class ComicController extends Controller
{
    // private function validateProduct($data) {
    //     $rules = [
    //         "title" => "required",
    //         "description" => "nullable|min:5|max:65535",
    //         "thumb" => "nullable|url",
    //         "price" => "nullable|numeric|between:0.01,9999.99",
    //         "series" => "",
    //         "sale_date" => "nullable|date|max:10",
    //         "type" => "",
    //         "artists" => "nullable|max:65535|regex:/^([^,]+)(, ?[^,]+)*$/",
    //         "writers" => "nullable|max:65535|regex:/^([^,]+)(, ?[^,]+)*$/"
    //     ];        

    //     $messages = [
    //         "title.required" => "Il 'Titolo' è obbligatorio",
    //         "description.min" => "La 'Descrizione' deve essere almeno di :min caratteri",
    //         "description.max" => "La 'Descrizione' deve essere al massimo di :max caratteri",
    //         "thumb.url" => "Il campo 'Immagine' deve essere un URL valido",
    //         "price.numeric" => "Il 'Prezzo' deve essere un numero",
    //         "price.between" => "Il 'Prezzo' deve essere compreso tra :min e :max",
    //         "sale_date.required" => "La 'Data' di vendita è obbligatoria",
    //         "sale_date.date" => "La 'Data' di vendita deve essere una data valida",
    //         "artists.required" => "Il campo 'Artisti' è obbligatorio",
    //         "artists.max" => "Il campo 'Artisti' deve essere al massimo di :max caratteri",
    //         "artists.regex" => "Il campo 'Artisti' deve essere una lista di nomi e cognomi separati da virgola",
    //         "writers.required" => "Il campo 'Scrittori' è obbligatorio",
    //         "writers.max" => "Il campo 'Scrittori' deve essere al massimo di :max caratteri",
    //         "writers.regex" => "Il campo 'Scrittori' deve essere una lista di nomi e cognomi separati da virgola"
    //     ];
        

    //     $validateData = Validator::make($data, $rules, $messages)->validate();

    //     return $validateData;
    // } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicRequest $request)
    {
        // $data = $this->validateProduct($request->all());
        $data = $request->validated();

        $comic = new Comic;
        // $comic->title = $data['title'];
        // $comic->description = $data['description'] ?? null;
        // $comic->thumb = $data['thumb'] ?? null;
        // $comic->price = $data['price'] ?? null;
        // $comic->series = $data['series'] ?? null;
        // $comic->sale_date = $data['sale_date'] ?? null;
        // $comic->type = $data['type'] ?? null;
        // $comic->artists = $data['artists'] ?? null;
        // $comic->writers = $data['writers'] ?? null;
        $comic->fill($data);
        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //ECCO A COSA EQUIVALE IL compact()
        // return view("comics.show", ["comic"=> $comic] );
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComicRequest $request, Comic $comic)
    {
        // $data = $request->all();

        // $data = $this->validateProduct($request->all());
        $data = $request->validated();

        // $comic->title = $data['title'];
        // $comic->description = $data['description'] ?? null;
        // $comic->thumb = $data['thumb'] ?? null;
        // $comic->price = $data['price'] ?? null;
        // $comic->series = $data['series'] ?? null;
        // $comic->sale_date = $data['sale_date'] ?? null;
        // $comic->type = $data['type'] ?? null;
        // $comic->artists = $data['artists'] ?? null;
        // $comic->writers = $data['writers'] ?? null;
        $comic->fill($data);
        $comic->update();

        //usiamo il redirect per dire: esegui la richiesta sul db E POI mi dai la vista che ti dico
        //altrimenti se restituiamo direttamente la view, se poi aggiorniamo la pagina rimane in memoria la richiesta fatta al db e la rifarà ogni volta che aggiorniamo, noi non vogliamo questo
        // return redirect()->route('comics.show', $comic->id);
        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('home');
    }
}

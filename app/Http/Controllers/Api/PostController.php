<?php
// Questo controller riguarderà solo l'API
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // salva tutte le info grazie al modello Post. 
        // ordino le info partendo dall'ultima inserita. Limito la visualizzazione di 5 post per pagina
        $post = Post::orderBy('updated_at', 'DESC')->with('tags', 'Category')->paginate(5);

        return response()->json( compact('post') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // se avessi messo show(Post $post) non sarei stato in grado di strutturare la parte 1) del codice
    public function show($id)
    {
        // 1) la variabile post contiene la nostra query di ricerca
        $post = Post::with('Category', 'tags')->find($id);

        // tale query la passo ora nel json. Verrà generata un Api: api/posts/id(di riferimento)
        return response()->json( compact('post') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

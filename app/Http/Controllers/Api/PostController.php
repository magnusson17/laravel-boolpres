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

        // compact andrebbe usato quando ho + array
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
    public function show($slug)
    {
        // 1) la variabile post contiene la nostra query di ricerca
        // il find può richiamare solo l'id. Quindi se uso slug devo riscrivere il codice
        //$post = Post::with('Category', 'tags')->find($id);
        $post = Post::where('slug', $slug)->with('Category', 'tags')->first();
        if(!$post) return response('Post not found', 404);

        // tale query la passo ora nel json. Verrà generata un Api: api/posts/id(di riferimento)
        return response()->json( $post );
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

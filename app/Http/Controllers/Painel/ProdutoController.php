<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Product;

class ProdutoController extends Controller
{
    private $product;
            
    public function __construct(Product $product) {
        $this->product = $product;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Pegando os dados da minha model */
        $products = $product->all();
        
        return view('painel.products.index', compact('products'));
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    
    public function tests()
    {
        //Retorna true ou false
        /*
        $insert = $this->product->create([
            'name'        => 'Andrade',
            'number'      => 434443,
            'active'      => false,
            'category'    => 'eletronicos',
            'description' => 'Descrição vem aqui',
        ]);
        if( $insert )
            return "Inserido com sucesso, ID: {$insert->id}";
        else
            return 'Falha ao inserir';
        */
        $update = $this->product
                        ->where('number', 67675756)
                        ->update([
                                'name'        => 'Name Atualizado',
                                'number'      => 78799,
                                'active'      => true,
                            ]);        

            if ( $update )
                return 'Alterado com sucesso 2!';
            else
                return 'Falha ao alterar';
    }
}

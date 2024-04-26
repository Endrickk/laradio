<?php

namespace App\Models;

//use GuzzleHttp\Psr7\Request;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';

    public static function listar(int $limite)
    {
        $sql = self::select([
           "id",
           "nome",
           "email",
           "senha",
           "data_cadastro"
        ])
        ->limit($limite);

        return $sql->get();
        //return self::all();

    }

    public static function cadastrar(Request $request){

        return self::insert([
            "nome" => $request->input('nome'),
            "email" => $request->input('email'),
            "senha" => Hash::make($request->input('senha')),
            "data_cadastro" => new Carbon()
        ]);

    }
}

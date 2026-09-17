<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index() {

    $events = Event::all();

    return view('welcome',['events' => $events]);
}

    public function create(){
        return view('events.create');

    }
//função para trazer todos os dados que serão enviados pelo formulário de criar eventos
    public function store(Request $request){

        $event = new Event; // cria um novo registro vazio do model Event

        $event->title = $request->title; // pega o campo "title" do formulário
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        //image upload
        if ($request->hasfile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientoriginalName() . strtotime('now')) . "." . $extension;
            $request->image->move(public_path('img/events'), $imageName);
            $event->image = $imageName;
        }


        $event->save(); // salva tudo isso no banco de dados


        return redirect('/')->with([
            'msg'=>[
                'text'=>'Evento criado com sucesso',
                'color'=>'success'
            ]
        ]); //redireciona o usuário para a view home
    }
}

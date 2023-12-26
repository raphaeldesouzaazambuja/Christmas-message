<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Message;

class MessageController extends Controller
{
    public function show($hash, $preview = false)
    {
        $message = Message::where('hash', $hash)->first();

        return view('messages.show', compact('message', 'preview'));
    }

    private function showPreview($hash, $preview)
    {
        $message = Message::where('hash', $hash)->first();

        return view('messages.show', compact('message', 'preview'));
    }

    public function create()
    {
        return view("messages.create");
    }

    public function store(Request $request)
    {
        $message = new Message();

        !empty(trim($request->input("name"))) ? $message->name = trim($request->input("name")) : $message->name = null;

        if (!empty(trim($request->input("content"))))
        {
            $message->content = trim($request->input("content"));
        }
        else
        {
            return redirect()->back();
        }

        $hash = $this->hashGenerate();

        $message->hash = $hash;

        $message->save();

        return $this->showPreview($hash, true);
    }

    private function hashGenerate()
    {
        do
        {
            $hash = Str::random(10);
        }
        while(Message::where('hash', $hash)->exists());

        return $hash;
    }
}

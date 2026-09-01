<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{
    public function index()
    {
        $article_to_check = Article::whereNull('is_accepted')
            ->oldest()
            ->first();

        return view(
            'revisor.index',
            compact('article_to_check')
        );
    }

    public function accept(Article $article)
    {
        $article->setAccepted(true);

        return redirect()
            ->route('revisor.index')
            ->with('message', 'Hai accettato l\'annuncio.');
    }

    public function reject(Article $article)
    {
        $article->setAccepted(false);

        return redirect()
            ->route('revisor.index')
            ->with('message', 'Hai rifiutato l\'annuncio.');
    }

    public function becomeRevisor()
    {
        Mail::to('admin@presto.it')
            ->send(new BecomeRevisor(Auth::user()));

        return redirect()
            ->route('home')
            ->with(
                'message',
                'La tua richiesta per diventare revisore è stata inviata.'
            );
    }

    public function makeRevisor(User $user)
    {
        Artisan::call(
            'app:make-user-revisor',
            ['email' => $user->email]
        );

        return redirect()
            ->route('home')
            ->with('message', 'Utente reso revisore.');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Adapters\SMS\Twilio;
use Mail;
use App\Jobs\DeleteNote;
use Carbon\Carbon;

class CredsController extends Controller
{
    //
    public function index()
    {
        return view('pages.enter-creds');
    }

    public function store()
    {
        $note = Input::get('note');
        $phone = Input::get('phone');
        $email = Input::get('email');

        $phone = preg_replace("/[^0-9]/", "", $phone);

        $md5 = md5($note);
        $file = storage_path() . '/data/' . $md5 . '.txt';

        $handle = file_put_contents($file, $note);
        $link_str = env('APP_URL') . '/receive/' . substr($md5, 0, 26);
        $text_str = substr($md5, 26);

        $twilio = new Twilio();
        $twilio->setRecipient($phone)->setMessage($text_str)->send();
        Mail::raw("$link_str", function($message) use ($email) {$message->to($email);});

        return view('pages.done')->with('link', $link_str);
    }

    public function receive($slug) {
        return view('pages.receive')->with('slug', $slug);
    }

    public function confirm($slug) {
        $code = Input::get('code');
        $received_md5 = $slug . $code;
        // $file = storage_path() . '/data/' . $received_md5 . '.txt';
        $file_name = "{$received_md5}.txt";
        $file = storage_path("/data/{$file_name}");

        if (file_exists($file)) {
            $note = file_get_contents($file);
            if ($received_md5 == md5($note)) {

                // Delete the file
                $job = (new DeleteNote("{$received_md5}.txt"))
                            ->delay(Carbon::now()->addMinutes(15));
                dispatch($job);
                return view('pages.confirm')->with('note', $note)
                                            ->with('received_md5', $received_md5);

            }
        }
        return view('pages.error')->with('message', 'This content has either expired, or manually deleted by the creator.');
    }

    public function delete($received_md5) {
        $file_name = "{$received_md5}.txt";
        $job = new DeleteNote($file_name);
        dispatch($job);
        return redirect('/');
    }
}

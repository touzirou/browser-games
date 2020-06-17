<?php


namespace App\Http\Web\Calculator\Responders;

use Illuminate\Contracts\Support\Responsable;

class GetCalculatorResponder implements Responsable
{
    public function toResponse($request)
    {
        return view('calculator.index');
    }
}

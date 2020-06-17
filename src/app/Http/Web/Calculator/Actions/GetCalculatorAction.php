<?php

namespace App\Http\Web\Calculator\Actions;

use Illuminate\Http\Request;
use App\Http\Web\Calculator\Responders\GetCalculatorResponder as Response;

final class GetCalculatorAction
{
    public function __invoke(Request $request): Response
    {
        return new Response();
    }
}

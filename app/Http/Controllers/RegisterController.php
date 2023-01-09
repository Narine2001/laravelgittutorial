<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Mail\OrderShipped;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request): RedirectResponse
    {
        $data = $request->only(['name', 'surname', 'email', 'phone']);
        Order::query()->create($data);

        Mail::to('narine.avagyan.2001@mail.ru')->send(new OrderShipped($request->all()));

        return back()->with('orderSuccess', true);
    }
}






<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public array $services;

    public function __construct()
    {
        $this->services = ['Siti', 'eCommerce', 'Gestionali', 'Marketing'];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('services.index', ['services' => $this->services]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $service)
    {
        $services_lowercase = array_map(fn ($item) => Str::lower($item), $this->services);

        if (array_search($service, $services_lowercase) === false) {
            abort(404);
        }


        return view('services.' . $service);
    }
}

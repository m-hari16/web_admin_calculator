<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Repositories\GrafikRepository;

class DashboardController extends Controller
{
    protected $repo;

    public function __construct(GrafikRepository $repo)
    {
        $this->repo = $repo;        
    }

    public function index()
    {
        $data = $this->repo->getGrafikData();

        return view('page.dashboard.index', ['data' => $data]);
    }
}

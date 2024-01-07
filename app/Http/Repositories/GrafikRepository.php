<?php

namespace App\Http\Repositories;

use Illuminate\Support\Facades\Http;

class GrafikRepository
{
  public function getGrafikData()
  {
    $http = Http::withHeaders([
      'apiKey' => config('app.apkiKey')
    ])->get(
      config('app.base_url') . 'api/report/raccess-log-user'
    )->json();

    return $http;
  }
}
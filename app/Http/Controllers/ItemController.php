<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ItemController extends Controller
{
    public function getItems(Request $request)
    {
        $page = $request->query('page', 1);
        $perPage = $request->query('perPage', 100);

        $client = new Client();
        $url = "http://sf-legacy-api.now.sh/items?page={$page}";

        $response = $client->request('GET', $url);
        $data = json_decode($response->getBody(), true);

        $totalItems = $data['metadata']['totalItems'];
        $items = $data['data'];
        
        $offset = ($page - 1) * $perPage;

        $pagedItems = array_slice($items, $offset, $perPage);

        $paginatedData = [
            'metadata' => [
                'totalItems' => $totalItems,
                'perPage' => $perPage,
                'page' => $page,
            ],
            'data' => $pagedItems,
        ];

        return response()->json($paginatedData);
    }
}

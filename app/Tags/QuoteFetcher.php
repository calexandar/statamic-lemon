<?php

namespace App\Tags;

use Statamic\Tags\Tags;

class QuoteFetcher extends Tags
{
    /**
     * The {{ quote_fetcher }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        $quotes = collect([
            ['author' => 'Ron Swanson',
                'quotes' =>
                [
                    "sadadadadadajdaodjadadad",
                    "asdjadoadadadoasdoij asd",
                    "asdadjaodjo oiasjdoiaj",
                ]

            ],
            ['author' => 'Ron Swwead', 'quotes' => []],
        ]);

        $author = $this->params->get('author', 'Ron Swanson');

        $filtered_quotes = $quotes->where('author', $author)->first();

        return $filtered_quotes['quotes'];
    }


}

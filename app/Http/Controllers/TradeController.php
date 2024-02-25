<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TradeController extends Controller
{
    public function index()
    {
        $apiUrl = 'https://www.alphavantage.co/query';
        $function = 'TIME_SERIES_INTRADAY';
        $interval = '5min';
        $apiKey = 'demo'; // Replace with your actual Alpha Vantage API key

        // List of stock symbols (replace these with the symbols you're interested in)
        $stockSymbols = ['IBM', 'AAPL', 'GOOGL', 'MSFT', 'AMZN', 'TSLA', 'FB', 'NFLX', 'GOOGL', 'V'];

        // Initialize an array to store data for each stock
        $allStockData = [];

        foreach ($stockSymbols as $symbol) {
            $url = "$apiUrl?function=$function&symbol=$symbol&interval=$interval&apikey=$apiKey";

            $json = file_get_contents($url);
            $data = json_decode($json, true);

            if (isset($data['Time Series (5min)'])) {
                // Extract the stock symbol
                $stockSymbol = $data['Meta Data']['2. Symbol'];

                // Get the first data point (latest data)
                $latestData = reset($data['Time Series (5min)']);

                // Example: Extract the closing price
                $closingPrice = $latestData['4. close'];
                $openingPrice = $latestData['1. open'];

                // Store data for this stock
                $allStockData[$stockSymbol] = [
                    'Closing Price' => $closingPrice,
                    'Opening Price' => $openingPrice,
                    // Add more data as needed
                ];
            } else {
                // Handle the case where there is no time series data
                $allStockData[$symbol] = 'No time series data available';
            }
        }

        // Display the results for all stocks
        dd($allStockData);

        exit;
    }

    public function news()
    {
        // replace the "demo" apikey below with your own key from https://www.alphavantage.co/support/#api-key
        $json = file_get_contents('https://www.alphavantage.co/query?function=NEWS_SENTIMENT&tickers=AAPL&apikey=demo');

        $data = json_decode($json, true);
        $news = $data['feed'];
        // dd($news);
        return view('Trade.trade_news', compact('news'));

        // exit;
    }
}

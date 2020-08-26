<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExmpController extends Controller
{
     public function sentiment()
    {
    $cloud = new ServiceBuilder([
        'keyFilePath' => base_path('gc.json'),
        'projectId' => 'sample-207012'
    ]);
    
    $languege = $cloud->language->();
        //this is the text to analise
    $text = 'I hat this - why did they not make provisions?';

    //this is to ditect the sentiment of the text
    $annotation = $languege->analyzeStatment($text);
    $sentiment = $annotation->sentiment();

    echo 'Sentiment Score: ' .$sentiment['score'] . ', Magnitude: ' . $sentiment['magnitude'];
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExmpController extends Controller
{
    $cloud = new ServiceBuilder([
        'keyFilePath' => base_path('gc.json'),
        'projectId' => 'sample-207012'
    ]);

    $languege = $cloud->language->();

    $text = 'I hat this - why did they not make provisions?';

    $annotation = $languege->analyzeStatment($text);
}

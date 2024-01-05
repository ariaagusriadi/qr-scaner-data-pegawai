<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Endroid\QrCode\Builder\Builder;
use App\Http\Controllers\Controller;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Label\LabelAlignment;

class qrController extends Controller
{
    public function index()
    {
        return view('qr.index');
    }

    public function generate(Request $request)
    {
        $result = Builder::create()
            ->writer(new PngWriter())
            ->writerOptions([])
            ->data($request->link)
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(ErrorCorrectionLevel::High)
            ->size(300)
            ->margin(5)
            ->roundBlockSizeMode(RoundBlockSizeMode::Margin)
            ->labelText('Data Pegawai')
            ->labelFont(new NotoSans(20))
            ->labelAlignment(LabelAlignment::Center)
            ->validateResult(false)
            ->build();

        $str = Str::random(5);
        $result->saveToFile(public_path('assets') . "/$str.png");

        header('Content-Type: '.$result->getMimeType());
        echo $result->getString();
    }
}

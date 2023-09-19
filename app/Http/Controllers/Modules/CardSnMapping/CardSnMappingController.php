<?php

namespace App\Http\Controllers\Modules\CardSnMapping;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Modules\Api\CL\ClSnMapping;
use Illuminate\Http\Request;
use Inertia\Inertia;
use PhpOffice\PhpSpreadsheet\IOFactory;

class CardSnMappingController extends Controller
{
    public function index()
    {
        return Inertia::render('CardSnMapping/Index', [
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx',
        ]);

        $uploadedFile = $request->file('file');

        $destinationPath = 'ClSnSheet';

        $excelFileName = uniqid('excel_') . '.' . $uploadedFile->getClientOriginalExtension();

        $uploadedFile->move(public_path($destinationPath), $excelFileName);

        $excelFilePath = public_path($destinationPath . '/' . $excelFileName);
        $spreadsheet = IOFactory::load($excelFilePath);
        $worksheet = $spreadsheet->getActiveSheet();

        foreach ($worksheet->getRowIterator() as $row) {
            $clSnMapping = new ClSnMapping();

            $cellIterator = $row->getCellIterator();

            $cellIterator->seek('A');
            $clSnMapping->engraved_id = $cellIterator->current()->getValue();

            $cellIterator->seek('B');
            $hexadecimalValue = $cellIterator->current()->getValue();

            // Convert the hexadecimal value to decimal
            $decimalValue = hexdec($hexadecimalValue);

            // Set the decimal value as chip_id
            $clSnMapping->chip_id = $decimalValue;

            // Check if engraved_id is not null before saving
            if (!is_null($clSnMapping->engraved_id)) {
                $this->clSnMappingSave($clSnMapping->engraved_id, $clSnMapping->chip_id);
            }
        }

        return redirect()
            ->to('/card/sn/mapping')
            ->with([
                'message' => 'CARD MAPPING DONE SUCCESSFULLY.'
            ]);

    }

}

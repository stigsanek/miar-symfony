<?php

namespace App\Service;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

/**
 * Excel data export component
 */
class Exporter
{
    private const EXTENSION = 'Xlsx';

    private $data = [];

    private $filePrefix;

    public function __construct(array $data, string $filePrefix = 'data')
    {
        $this->data = $data;
        $this->filePrefix = $filePrefix;
    }

    public function export()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $cell = 1;

        foreach ($this->data[0] as $item => $value) {
            $sheet->setCellValueByColumnAndRow($cell, 1, $item);
            $cell++;
        }

        for ($i = 0; $i < count($this->data); $i++) {
            $cell = 1;
            $row = $i + 2;

            foreach ($this->data[$i] as $item) {
                $sheet->setCellValueByColumnAndRow($cell, $row, $item);
                $cell++;
            }
        }

        $this->setPageHeader();

        $writer = IOFactory::createWriter($spreadsheet, self::EXTENSION);
        $writer->save('php://output');

        exit;
    }

    private function setPageHeader()
    {
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $this->generateFileName() . '"');
        header('Cache-Control: max-age=0');
    }

    private function generateFileName(): string
    {
        $extension = mb_strtolower(self::EXTENSION);
        $filename = $this->filePrefix . '-' . date('d-m-Y H-i-s') . '.' . $extension;

        return $filename;
    }
}

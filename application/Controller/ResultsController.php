<?php

namespace Controller;

use Application\Library\TemplateHandler\TemplateHandler;
use Controller\ControllerBase;
use Library\Database\Db;
use PDO;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ResultsController extends ControllerBase
{
    public function getIndex(...$queryParams): string
    {
        session_start();
        if (!isset($_SESSION['user_id'])) header('location:/home');
        $count = $this->dbCount();
        return (new TemplateHandler())->compileComponent('results/results.twig', [
            'count' => $count,
            'cf' => $_POST['cf']
        ]);
    }

    private function dbCount()
    {
        $stmt = (new Db())->getPDO()->prepare("SELECT COUNT(*) FROM AIUTO WHERE CODICE_FISCALE_BENEFICIARIO=?");
        $stmt->execute([$_POST['cf']]);
        return $stmt->fetch(PDO::FETCH_LAZY)[0];
    }

    //TODO check for login vulnerability
    public function getDownload()
    {
        $stmt = (new Db())->getPDO()->prepare("SELECT TITOLO_MISURA,SOGGETTO_CONCEDENTE,COR,TITOLO_PROGETTO,DATA_CONCESSIONE,CUP,ATTO_CONCESSIONE,COD_PROCEDIMENTO,DES_PROCEDIMENTO,DES_REGOLAMENTO,DES_STRUMENTO,ELEMENTO_DI_AIUTO,IMPORTO_NOMINALE FROM AIUTO WHERE CODICE_FISCALE_BENEFICIARIO=?");
        $stmt->execute([$_POST['cf']]);
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $header = ['Titolo Misura',
            'Autorità Concedente',
            'COR',
            'Titolo Progetto',
            'Data Concessione',
            'Cup',
            'Atto concessione',
            'Codice procedimento',
            'Tipo procedimento',
            'Regolamento/Comunicazione',
            'Strumento di aiuto',
            'Elemento di aiuto',
            'Importo nominale'];

        //Intestazione
        $line = 1;
        $column = 1;
        foreach ($header as $item) {
            $sheet->setCellValueByColumnAndRow($column, $line, $item);
            $column++;
        }
        $line++;
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $column = 1;
            foreach ($row as $item) {
                $sheet->setCellValueByColumnAndRow($column, $line, $item);
                $column++;
            }
            $line++;
        }
        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="' . $_POST['cf'] . '.xlsx"');
        $writer->save("php://output");
        die;

    }
}
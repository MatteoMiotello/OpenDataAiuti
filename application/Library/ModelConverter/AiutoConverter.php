<?php
namespace Library\ModelConverter;
use Models\Aiuto;

class AiutoConverter {
    public function convert( $node ) {
        $aiutoModel = new Aiuto();
        $retval = array();

        $aiutoModel->setTitoloMisura($node->TITOLO_MISURA);
        $aiutoModel->setSoggettoConcedente($node->SOGGETTO_CONCEDENTE);
        $aiutoModel->setCor($node->COR);
        $aiutoModel->setTitoloProgetto($node->TITOLO_PROGETTO);
        $aiutoModel->setDataConcessione($node->DATA_CONCESSIONE);
        $aiutoModel->setCup($node->CUP);
        $aiutoModel->setAttoConcessione($node->ATTO_CONCESSIONE);
        $aiutoModel->setDenominazioneBeneficiario($node->DENOMINAZIONE_BENEFICIARIO);
        $aiutoModel->setCodiceFiscaleBeneficiario($node->CODICE_FISCALE_BENEFICIARIO);

        foreach( $node->COMPONENTI_AIUTO->COMPONENTE_AIUTO as $componente){
            $aiutoModel->setIdComponenteAiuto($componente->ID_COMPONENTE_AIUTO);
            $aiutoModel->setCodProcedimento( $componente->COD_PROCEDIMENTO );
            $aiutoModel->setDesProcedimento( $componente->DES_PROCEDIMENTO );
            $aiutoModel->setDesRegolamento( $componente->DES_REGOLAMENTO );
            foreach( $componente->STRUMENTI_AIUTO->STRUMENTO_AIUTO as $strumento){
                $aiutoModel->setDesStrumento( $strumento->DES_STRUMENTO );
                $aiutoModel->setElementoDiAiuto( $strumento->ELEMENTO_DI_AIUTO );
                $aiutoModel->setImportoNominale( $strumento->IMPORTO_NOMINALE );
                $retval[] = clone $aiutoModel;
            }
        }
        return $retval;
    }
}
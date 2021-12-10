<?php

include_once 'Aiuto.php';

class AiutoConverter {
    public function convert( $node ) {
        $aiutoModel = new Aiuto();

        $aiutoModel->setCar($node->CAR);
        $aiutoModel->setTitoloMisura($node->TITOLO_MISURA);
        $aiutoModel->setDesTipoMisura($node->DES_TIPO_MISURA);
        $aiutoModel->setCodCeMisura($node->COD_CE_MISURA);
        $aiutoModel->setBaseGiuridicaNazionale($node->BASE_GIURIDICA_NAZIONALE);
        $aiutoModel->setIdentificativoUfficio($node->IDENTIFICATIVO_UFFICIO);
        $aiutoModel->setSoggettoConcedente($node->SOGGETTO_CONCEDENTE);
        $aiutoModel->setCor($node->COR);
        $aiutoModel->setTitoloProgetto($node->TITOLO_PROGETTO);
        $aiutoModel->setDescrizioneProgetto($node->DESCRIZIONE_PROGETTO);
        $aiutoModel->setLinkTrasparenzaNazionale($node->LINK_TRASPARENZA_NAZIONALE);
        $aiutoModel->setDataConcessione($node->DATA_CONCESSIONE);
        $aiutoModel->setCup($node->CUP);
        $aiutoModel->setAttoConcessione($node->ATTO_CONCESSIONE);
        $aiutoModel->setDenominazioneBeneficiario($node->DENOMINAZIONE_BENEFICIARIO);
        $aiutoModel->setCodiceFiscaleBeneficiario($node->CODICE_FISCALE_BENEFICIARIO);
        $aiutoModel->setDesTipoBeneficiario($node->DES_TIPO_BENEFICIARIO);
        $aiutoModel->setRegioneBeneficiario($node->REGIONE_BENEFICIARIO);
        $aiutoModel->setCodProcedimento( $node->COMPONENTI_AIUTO->COMPONENTE_AIUTO->COD_PROCEDIMENTO );
        $aiutoModel->setDesProcedimento( $node->COMPONENTI_AIUTO->COMPONENTE_AIUTO->DES_PROCEDIMENTO );
        $aiutoModel->setDesRegolamento( $node->COMPONENTI_AIUTO->COMPONENTE_AIUTO->DES_REGOLAMENTO );
        $aiutoModel->setDesStrumento( $node->COMPONENTI_AIUTO->COMPONENTE_AIUTO->STRUMENTI_AIUTO->STRUMENTO_AIUTO->DES_STRUMENTO );
        $aiutoModel->setElementoDiAiuto( $node->COMPONENTI_AIUTO->COMPONENTE_AIUTO->STRUMENTI_AIUTO->STRUMENTO_AIUTO->ELEMENTO_DI_AIUTO );
        $aiutoModel->setImportoNominale( $node->COMPONENTI_AIUTO->COMPONENTE_AIUTO->STRUMENTI_AIUTO->STRUMENTO_AIUTO->IMPORTO_NOMINALE );

        return $aiutoModel;
    }
}
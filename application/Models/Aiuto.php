<?php

namespace Models;

use Application\Models\ModelBase;
use Library\Database\Db;
use PDO;

class Aiuto extends ModelBase {
    private $Id;
    private $TitoloMisura;
    private $SoggettoConcedente;
    private $Cor;
    private $TitoloProgetto;
    private $DataConcessione;
    private $Cup;
    private $AttoConcessione;
    private $DenominazioneBeneficiario;
    private $CodiceFiscaleBeneficiario;
    private $IdComponenteAiuto;
    private $CodProcedimento;
    private $DesProcedimento;
    private $DesRegolamento;
    private $DesStrumento;
    private $ElementoDiAiuto;
    private $ImportoNominale;

    /**
     * @return mixed
     */
    public function getId() {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     * @return Aiuto
     */
    public function setId($Id) {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitoloMisura() {
        return $this->TitoloMisura;
    }

    /**
     * @param mixed $TitoloMisura
     * @return Aiuto
     */
    public function setTitoloMisura($TitoloMisura) {
        $this->TitoloMisura = $TitoloMisura;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSoggettoConcedente() {
        return $this->SoggettoConcedente;
    }

    /**
     * @param mixed $SoggettoConcedente
     * @return Aiuto
     */
    public function setSoggettoConcedente($SoggettoConcedente) {
        $this->SoggettoConcedente = $SoggettoConcedente;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCor() {
        return $this->Cor;
    }

    /**
     * @param mixed $Cor
     * @return Aiuto
     */
    public function setCor($Cor) {
        $this->Cor = $Cor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitoloProgetto() {
        return $this->TitoloProgetto;
    }

    /**
     * @param mixed $TitoloProgetto
     * @return Aiuto
     */
    public function setTitoloProgetto($TitoloProgetto) {
        $this->TitoloProgetto = $TitoloProgetto;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataConcessione() {
        return $this->DataConcessione;
    }

    /**
     * @param mixed $DataConcessione
     * @return Aiuto
     */
    public function setDataConcessione($DataConcessione) {
        $this->DataConcessione = $DataConcessione;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCup() {
        return $this->Cup;
    }

    /**
     * @param mixed $Cup
     * @return Aiuto
     */
    public function setCup($Cup) {
        $this->Cup = $Cup;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttoConcessione() {
        return $this->AttoConcessione;
    }

    /**
     * @param mixed $AttoConcessione
     * @return Aiuto
     */
    public function setAttoConcessione($AttoConcessione) {
        $this->AttoConcessione = $AttoConcessione;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDenominazioneBeneficiario() {
        return $this->DenominazioneBeneficiario;
    }

    /**
     * @param mixed $DenominazioneBeneficiario
     * @return Aiuto
     */
    public function setDenominazioneBeneficiario($DenominazioneBeneficiario) {
        $this->DenominazioneBeneficiario = $DenominazioneBeneficiario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodiceFiscaleBeneficiario() {
        return $this->CodiceFiscaleBeneficiario;
    }

    /**
     * @param mixed $CodiceFiscaleBeneficiario
     * @return Aiuto
     */
    public function setCodiceFiscaleBeneficiario($CodiceFiscaleBeneficiario) {
        $this->CodiceFiscaleBeneficiario = $CodiceFiscaleBeneficiario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdComponenteAiuto()
    {
        return $this->IdComponenteAiuto;
    }

    /**
     * @param mixed $IdComponenteAiuto
     */
    public function setIdComponenteAiuto($IdComponenteAiuto)
    {
        $this->IdComponenteAiuto = $IdComponenteAiuto;
    }

    /**
     * @return mixed
     */
    public function getCodProcedimento() {
        return $this->CodProcedimento;
    }

    /**
     * @param mixed $CodProcedimento
     * @return Aiuto
     */
    public function setCodProcedimento($CodProcedimento) {
        $this->CodProcedimento = $CodProcedimento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDesProcedimento() {
        return $this->DesProcedimento;
    }

    /**
     * @param mixed $DesProcedimento
     * @return Aiuto
     */
    public function setDesProcedimento($DesProcedimento) {
        $this->DesProcedimento = $DesProcedimento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDesRegolamento() {
        return $this->DesRegolamento;
    }

    /**
     * @param mixed $DesRegolamento
     * @return Aiuto
     */
    public function setDesRegolamento($DesRegolamento) {
        $this->DesRegolamento = $DesRegolamento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDesStrumento() {
        return $this->DesStrumento;
    }

    /**
     * @param mixed $DesStrumento
     * @return Aiuto
     */
    public function setDesStrumento($DesStrumento) {
        $this->DesStrumento = $DesStrumento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getElementoDiAiuto() {
        return $this->ElementoDiAiuto;
    }

    /**
     * @param mixed $ElementoDiAiuto
     * @return Aiuto
     */
    public function setElementoDiAiuto($ElementoDiAiuto) {
        $this->ElementoDiAiuto = $ElementoDiAiuto;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImportoNominale() {
        return $this->ImportoNominale;
    }

    /**
     * @param mixed $ImportoNominale
     * @return Aiuto
     */
    public function setImportoNominale($ImportoNominale) {
        $this->ImportoNominale = $ImportoNominale;
        return $this;
    }

    public function getSchema() {
        return [
            'TITOLO_MISURA' => 'TitoloMisura',
            'SOGGETTO_CONCEDENTE' => 'SoggettoConcedente',
            'COR' => 'Cor',
            'TITOLO_PROGETTO' => 'TitoloProgetto',
            'DATA_CONCESSIONE' => 'DataConcessione',
            'CUP' => 'Cup',
            'ATTO_CONCESSIONE' => 'AttoConcessione',
            'DENOMINAZIONE_BENEFICIARIO' => 'DenominazioneBeneficiario',
            'CODICE_FISCALE_BENEFICIARIO' => 'CodiceFiscaleBeneficiario',
            'ID_COMPONENTE_AIUTO' => 'IdComponenteAiuto',
            'COD_PROCEDIMENTO' => 'CodProcedimento',
            'DES_PROCEDIMENTO' => 'DesProcedimento',
            'DES_REGOLAMENTO' => 'DesRegolamento',
            'DES_STRUMENTO' => 'DesStrumento',
            'ELEMENTO_DI_AIUTO' => 'ElementoDiAiuto',
            'IMPORTO_NOMINALE' => 'ImportoNominale',
        ];
    }

    public function save() {
        $fields  = implode( ', ', array_keys( $this->getSchema() ) );
        $binds = '';

        $values = [];
        foreach ($this->getSchema() as $arrayKey => $value) {
            $binds .= ':' . $arrayKey . ', ';

            $values[ $arrayKey ] = $this->{$value};
        }

        $binds = trim( $binds, ', ' );

        $queryInsert = sprintf( 'INSERT INTO `AIUTO` ( %s ) VALUES ( %s )', $fields, $binds );

        $result = '';


            $query = $this->Db->prepare( $queryInsert );

            $query->execute( $values );

    }

    public function alreadyIn(){
        $sql = 'SELECT * FROM AIUTO WHERE ID_COMPONENTE_AIUTO = ?';
        $stmt = (new Db())->getPDO()->prepare($sql);
        $stmt->bindParam(1, $this->IdComponenteAiuto, PDO::PARAM_INT);
        $stmt->execute();
        $count = $stmt->fetchColumn();

        if ($count == 0) {
            return false;
        } else {
            return true;
        }
    }
}

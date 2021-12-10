<?php

include_once 'Db.php';

class Aiuto {
    private $Id;
    private $Car;
    private $TitoloMisura;
    private $DesTipoMisura;
    private $CodCeMisura;
    private $BaseGiuridicaNazionale;
    private $IdentificativoUfficio;
    private $SoggettoConcedente;
    private $Cor;
    private $TitoloProgetto;
    private $DescrizioneProgetto;
    private $LinkTrasparenzaNazionale;
    private $DataConcessione;
    private $Cup;
    private $AttoConcessione;
    private $DenominazioneBeneficiario;
    private $CodiceFiscaleBeneficiario;
    private $DesTipoBeneficiario;
    private $RegioneBeneficiario;
    private $CodProcedimento;
    private $DesProcedimento;
    private $DesRegolamento;
    private $DesObiettivo;
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
    public function getCar() {
        return $this->Car;
    }

    /**
     * @param mixed $Car
     * @return Aiuto
     */
    public function setCar($Car) {
        $this->Car = $Car;
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
    public function getDesTipoMisura() {
        return $this->DesTipoMisura;
    }

    /**
     * @param mixed $DesTipoMisura
     * @return Aiuto
     */
    public function setDesTipoMisura($DesTipoMisura) {
        $this->DesTipoMisura = $DesTipoMisura;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodCeMisura() {
        return $this->CodCeMisura;
    }

    /**
     * @param mixed $CodCeMisura
     * @return Aiuto
     */
    public function setCodCeMisura($CodCeMisura) {
        $this->CodCeMisura = $CodCeMisura;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBaseGiuridicaNazionale() {
        return $this->BaseGiuridicaNazionale;
    }

    /**
     * @param mixed $BaseGiuridicaNazionale
     * @return Aiuto
     */
    public function setBaseGiuridicaNazionale($BaseGiuridicaNazionale) {
        $this->BaseGiuridicaNazionale = $BaseGiuridicaNazionale;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdentificativoUfficio() {
        return $this->IdentificativoUfficio;
    }

    /**
     * @param mixed $IdentificativoUfficio
     * @return Aiuto
     */
    public function setIdentificativoUfficio($IdentificativoUfficio) {
        $this->IdentificativoUfficio = $IdentificativoUfficio;
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
    public function getDescrizioneProgetto() {
        return $this->DescrizioneProgetto;
    }

    /**
     * @param mixed $DescrizioneProgetto
     * @return Aiuto
     */
    public function setDescrizioneProgetto($DescrizioneProgetto) {
        $this->DescrizioneProgetto = $DescrizioneProgetto;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLinkTrasparenzaNazionale() {
        return $this->LinkTrasparenzaNazionale;
    }

    /**
     * @param mixed $LinkTrasparenzaNazionale
     * @return Aiuto
     */
    public function setLinkTrasparenzaNazionale($LinkTrasparenzaNazionale) {
        $this->LinkTrasparenzaNazionale = $LinkTrasparenzaNazionale;
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
    public function getDesTipoBeneficiario() {
        return $this->DesTipoBeneficiario;
    }

    /**
     * @param mixed $DesTipoBeneficiario
     * @return Aiuto
     */
    public function setDesTipoBeneficiario($DesTipoBeneficiario) {
        $this->DesTipoBeneficiario = $DesTipoBeneficiario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRegioneBeneficiario() {
        return $this->RegioneBeneficiario;
    }

    /**
     * @param mixed $RegioneBeneficiario
     * @return Aiuto
     */
    public function setRegioneBeneficiario($RegioneBeneficiario) {
        $this->RegioneBeneficiario = $RegioneBeneficiario;
        return $this;
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
    public function getDesObiettivo() {
        return $this->DesObiettivo;
    }

    /**
     * @param mixed $DesObiettivo
     * @return Aiuto
     */
    public function setDesObiettivo($DesObiettivo) {
        $this->DesObiettivo = $DesObiettivo;
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
            'CAR' => 'Car',
            'TITOLO_MISURA' => 'TitoloMisura',
            'DES_TIPO_MISURA' => 'DesTipoMisura',
            'COD_CE_MISURA' => 'CodCeMisura',
            'BASE_GIURIDICA_NAZIONALE' => 'BaseGiuridicaNazionale',
            'IDENTIFICATIVO_UFFICIO' => 'IdentificativoUfficio',
            'SOGGETTO_CONCEDENTE' => 'SoggettoConcedente',
            'COR' => 'Cor',
            'TITOLO_PROGETTO' => 'TitoloProgetto',
            'DESCRIZIONE_PROGETTO' => 'DescrizioneProgetto',
            'LINK_TRASPARENZA_NAZIONALE' => 'LinkTrasparenzaNazionale',
            'DATA_CONCESSIONE' => 'DataConcessione',
            'CUP' => 'Cup',
            'ATTO_CONCESSIONE' => 'AttoConcessione',
            'DENOMINAZIONE_BENEFICIARIO' => 'DenominazioneBeneficiario',
            'CODICE_FISCALE_BENEFICIARIO' => 'CodiceFiscaleBeneficiario',
            'DES_TIPO_BENEFICIARIO' => 'DesTipoBeneficiario',
            'REGIONE_BENEFICIARIO' => 'RegioneBeneficiario',
            'COD_PROCEDIMENTO' => 'CodProcedimento',
            'DES_PROCEDIMENTO' => 'DesProcedimento',
            'DES_REGOLAMENTO' => 'DesRegolamento',
            'DES_STRUMENTO' => 'DesStrumento',
            'ELEMENTO_DI_AIUTO' => 'ElementoDiAiuto',
            'IMPORTO_NOMINALE' => 'ImportoNominale',
        ];
    }

    public function save() {
        $pdo = Db::getPDO();

        $fields  = implode( ', ', array_keys( $this->getSchema() ) );
        $binds = '';

        $values = [];
        foreach ($this->getSchema() as $arrayKey => $value) {
            $binds .= ':' . $arrayKey . ', ';

            $values[ $arrayKey ] = $this->{$value};
        }

        $binds = trim( $binds, ', ' );

        $queryInsert = sprintf( 'INSERT INTO `AIUTO` ( %s ) VALUES ( %s )', $fields, $binds );

        $query = $pdo->prepare( $queryInsert );
        $query->execute( $values );
    }
}

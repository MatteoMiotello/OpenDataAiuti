CREATE TABLE `AIUTO`
(
    `ID`                          INT NOT NULL AUTO_INCREMENT,
    `CAR`                         LONGTEXT,
    `TITOLO_MISURA`               LONGTEXT,
    `DES_TIPO_MISURA`             LONGTEXT,
    `COD_CE_MISURA`               LONGTEXT,
    `BASE_GIURIDICA_NAZIONALE`    LONGTEXT,
    `IDENTIFICATIVO_UFFICIO`      LONGTEXT,
    `SOGGETTO_CONCEDENTE`         LONGTEXT,
    `COR`                         LONGTEXT,
    `TITOLO_PROGETTO`             LONGTEXT,
    `DESCRIZIONE_PROGETTO`        LONGTEXT,
    `LINK_TRASPARENZA_NAZIONALE`  LONGTEXT,
    `DATA_CONCESSIONE`            LONGTEXT,
    `CUP`                         LONGTEXT,
    `ATTO_CONCESSIONE`            LONGTEXT,
    `DENOMINAZIONE_BENEFICIARIO`  LONGTEXT,
    `CODICE_FISCALE_BENEFICIARIO` LONGTEXT,
    `DES_TIPO_BENEFICIARIO`       LONGTEXT,
    `REGIONE_BENEFICIARIO`        LONGTEXT,
    `COD_PROCEDIMENTO`            LONGTEXT,
    `DES_PROCEDIMENTO`            LONGTEXT,
    `DES_REGOLAMENTO`             LONGTEXT,
    `DES_OBIETTIVO`               LONGTEXT,
    `DES_STRUMENTO`               LONGTEXT,
    `ELEMENTO_DI_AIUTO`           VARCHAR(255),
    `IMPORTO_NOMINALE`            VARCHAR(255),
    PRIMARY KEY (`ID`)
);
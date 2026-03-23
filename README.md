Di seguito la tabella (in formato CSV) con una riga per ogni campo con potenziali dati personali/identificativi nei @ORM\Column(...) delle entity in src/Entity.

Colonne: Patrimonio;Sigla servizio;Enviromento;Data Type;ip serve;DBMS;Istanza;nome db;table name;colum name;Format;Data Naskin;Categoria Danto

CSV - User e Confidi
Patrimonio;Sigla servizio;Enviromento;Data Type;ip serve;DBMS;Istanza;nome db;table name;colum name;Format;Data Naskin;Categoria Danto
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;User;email;string;NA;Email
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;User;firstName;string;NA;Nome
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;User;lastName;string;NA;Cognome
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;User;mobilePhone;string;NA;Telefono cellulare
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;User;fiscalId;string;NA;Codice fiscale
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;User;birth;date;NA;Data di nascita
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;User;birthCity;string;NA;Luogo di nascita - Città
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;User;birthProvince;string;NA;Luogo di nascita - Provincia
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;User;birthRegion;string;NA;Luogo di nascita - Regione
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;User;birthCountry;string;NA;Luogo di nascita - Paese
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Confidi;legalRepresentative;string;NA;Rappresentante legale (dati identificativi)
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Confidi;iban;string;NA;IBAN
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Confidi;fiscalCode;string;NA;Codice fiscale
CSV - Application (titolare e soci + contatti/finanza)
Patrimonio;Sigla servizio;Enviromento;Data Type;ip serve;DBMS;Istanza;nome db;table name;colum name;Format;Data Naskin;Categoria Danto
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeIbFiscalCode;string;NA;Codice fiscale (soggetto)
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeIbIban;string;NA;IBAN (soggetto)
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aePecAddress;string;NA;PEC
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeOfficeAddress;string;NA;Indirizzo (sede/ufficio)
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeOfficePostcode;string;NA;CAP (sede/ufficio)
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeOfficeCity;string;NA;Città (sede/ufficio)
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeWorkplaceAddress;string;NA;Indirizzo (luogo di lavoro)
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeWorkplacePostcode;string;NA;CAP (luogo di lavoro)
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeWorkplaceCity;string;NA;Città (luogo di lavoro)
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeOwnerFirstname;string;NA;Nome titolare
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeOwnerLastname;string;NA;Cognome titolare
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeOwnerBirthDate;date;NA;Data di nascita titolare
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeOwnerGender;string;NA;Sesso/Genere titolare
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeOwnerFiscalCode;string;NA;Codice fiscale titolare
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeOwnerBirthCity;string;NA;Luogo di nascita titolare - Città
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeOwnerBirthCountry;string;NA;Luogo di nascita titolare - Paese
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeOwnerJoinDate;date;NA;Data (titolare) - join
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeFirstMemberFirstname;string;NA;Nome socio 1
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeFirstMemberLastname;string;NA;Cognome socio 1
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeFirstMemberBirthDate;date;NA;Data di nascita socio 1
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeFirstMemberGender;string;NA;Sesso/Genere socio 1
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeFirstMemberFiscalCode;string;NA;Codice fiscale socio 1
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeFirstMemberBirthCity;string;NA;Luogo di nascita socio 1 - Città
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeFirstMemberBirthCountry;string;NA;Luogo di nascita socio 1 - Paese
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeFirstMemberJoinDate;date;NA;Data (socio 1) - join
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeSecondMemberFirstname;string;NA;Nome socio 2
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeSecondMemberLastname;string;NA;Cognome socio 2
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeSecondMemberBirthDate;date;NA;Data di nascita socio 2
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeSecondMemberGender;string;NA;Sesso/Genere socio 2
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeSecondMemberFiscalCode;string;NA;Codice fiscale socio 2
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeSecondMemberBirthCity;string;NA;Luogo di nascita socio 2 - Città
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeSecondMemberBirthCountry;string;NA;Luogo di nascita socio 2 - Paese
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeSecondMemberJoinDate;date;NA;Data (socio 2) - join
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeThirdMemberFirstname;string;NA;Nome socio 3
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeThirdMemberLastname;string;NA;Cognome socio 3
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeThirdMemberBirthDate;date;NA;Data di nascita socio 3
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeThirdMemberGender;string;NA;Sesso/Genere socio 3
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeThirdMemberFiscalCode;string;NA;Codice fiscale socio 3
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeThirdMemberBirthCity;string;NA;Luogo di nascita socio 3 - Città
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeThirdMemberBirthCountry;string;NA;Luogo di nascita socio 3 - Paese
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeThirdMemberJoinDate;date;NA;Data (socio 3) - join
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeFourthMemberFirstname;string;NA;Nome socio 4
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeFourthMemberLastname;string;NA;Cognome socio 4
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeFourthMemberBirthDate;date;NA;Data di nascita socio 4
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeFourthMemberGender;string;NA;Sesso/Genere socio 4
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeFourthMemberFiscalCode;string;NA;Codice fiscale socio 4
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeFourthMemberBirthCity;string;NA;Luogo di nascita socio 4 - Città
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeFourthMemberBirthCountry;string;NA;Luogo di nascita socio 4 - Paese
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;Application;aeFourthMemberJoinDate;date;NA;Data (socio 4) - join
CSV - AssuranceEnterpriseImport, ApplicationMessage e allegati/import

Patrimonio;Sigla servizio;Enviromento;Data Type;ip serve;DBMS;Istanza;nome db;table name;colum name;Format;Data Naskin;Categoria Danto
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;ibFiscalCode;string;NA;Codice fiscale (soggetto)
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;ibIban;string;NA;IBAN (soggetto)
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;pecAddress;string;NA;PEC
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;officeAddress;string;NA;Indirizzo (sede/ufficio)
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;workplaceAddress;string;NA;Indirizzo (luogo di lavoro)
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;ownerFirstname;string;NA;Nome titolare
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;ownerLastname;string;NA;Cognome titolare
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;ownerBirthDate;string;NA;Data di nascita titolare
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;ownerGender;string;NA;Sesso/Genere titolare
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;ownerFiscalCode;string;NA;Codice fiscale titolare
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;ownerBirthCity;string;NA;Luogo di nascita titolare - Città
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;ownerBirthCountry;string;NA;Luogo di nascita titolare - Paese
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;ownerJoinDate;string;NA;Data (titolare) - join
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;firstMemberFirstname;string;NA;Nome socio 1
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;firstMemberLastname;string;NA;Cognome socio 1
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;firstMemberBirthDate;string;NA;Data di nascita socio 1
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;firstMemberGender;string;NA;Sesso/Genere socio 1
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;firstMemberFiscalCode;string;NA;Codice fiscale socio 1
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;firstMemberBirthCity;string;NA;Luogo di nascita socio 1 - Città
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;firstMemberBirthCountry;string;NA;Luogo di nascita socio 1 - Paese
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;firstMemberJoinDate;string;NA;Data (socio 1) - join
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;secondMemberFirstname;string;NA;Nome socio 2
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;secondMemberLastname;string;NA;Cognome socio 2
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;secondMemberBirthDate;string;NA;Data di nascita socio 2
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;secondMemberGender;string;NA;Sesso/Genere socio 2
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;secondMemberFiscalCode;string;NA;Codice fiscale socio 2
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;secondMemberBirthCity;string;NA;Luogo di nascita socio 2 - Città
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;secondMemberBirthCountry;string;NA;Luogo di nascita socio 2 - Paese
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;secondMemberJoinDate;string;NA;Data (socio 2) - join
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;thirdMemberFirstname;string;NA;Nome socio 3
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;thirdMemberLastname;string;NA;Cognome socio 3
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;thirdMemberBirthDate;string;NA;Data di nascita socio 3
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;thirdMemberGender;string;NA;Sesso/Genere socio 3
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;thirdMemberFiscalCode;string;NA;Codice fiscale socio 3
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;thirdMemberBirthCity;string;NA;Luogo di nascita socio 3 - Città
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;thirdMemberBirthCountry;string;NA;Luogo di nascita socio 3 - Paese
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;thirdMemberJoinDate;string;NA;Data (socio 3) - join
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;fourthMemberFirstname;string;NA;Nome socio 4
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;fourthMemberLastname;string;NA;Cognome socio 4
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;fourthMemberBirthDate;string;NA;Data di nascita socio 4
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;fourthMemberGender;string;NA;Sesso/Genere socio 4
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;fourthMemberFiscalCode;string;NA;Codice fiscale socio 4
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;fourthMemberBirthCity;string;NA;Luogo di nascita socio 4 - Città
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;fourthMemberBirthCountry;string;NA;Luogo di nascita socio 4 - Paese
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;AssuranceEnterpriseImport;fourthMemberJoinDate;string;NA;Data (socio 4) - join
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;ApplicationMessage;text;text;NA;Testo messaggio (può contenere PII)
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;ApplicationAttachment;fileName;string;NA;Metadati file (nome file)
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;ApplicationAttachment;originalFileName;string;NA;Metadati file (originalFileName: potenziale PII)
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;ApplicationAttachment;description;string;NA;Descrizione allegato (potenziale PII)
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;ApplicationMessageAttachment;fileName;string;NA;Metadati file (nome file)
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;ApplicationMessageAttachment;originalFileName;string;NA;Metadati file (originalFileName: potenziale PII)
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;ApplicationGroup;filename;string;NA;Metadati file import/allegato
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;ApplicationGroup;originalFileName;string;NA;Metadati file (originalFileName: potenziale PII)
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;ApplicationImport;filename;string;NA;Metadati file import
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;ApplicationImportTemplate;filename;string;NA;Metadati template import
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;FinancingProvisioningCertification;filename;string;NA;Metadati file (certificazione)
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;FinancingProvisioningCertification;originalFileName;string;NA;Metadati file (originalFileName: potenziale PII)
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;ReportImport;year;string;NA;Metadati report
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;ReportImport;description;string;NA;Descrizione report (potenziale PII)
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;ReportImport;filename;string;NA;Metadati file report
PAT123;#Q;PROD;Tab Open;xxxx;postgres;XXXX;xxxx;RegistryFileAudit;fileName;string;NA;Metadati file (audit)

aaaa
Buongiorno,
in merito alle vulnerabilità segnalate sui componenti indicati, segnalo che al momento non è possibile procedere con l’aggiornamento delle librerie coinvolte.
Il prodotto è sviluppato in PHP utilizzando framework Symfony e, nel contesto BNL, non è possibile introdurre nuove librerie o aggiornare quelle esistenti in quanto:
i repository PHP risultano chiusi,
PHP non rientra tra i linguaggi attualmente supportati/compliant in BNL.
Ricordo inoltre che, in fase di porting delle applicazioni CCL e GAL su BNL, questa situazione era stata esplicitamente classificata come soluzione tattica. Era stato infatti previsto che, nel caso si fosse deciso di continuare a utilizzare tali applicativi, sarebbe stato necessario pianificare un refactoring verso linguaggi e framework conformi agli standard BNL.
Alla luce di quanto sopra, la risoluzione definitiva delle vulnerabilità segnalate richiede necessariamente un intervento evolutivo di refactoring tecnologico, non gestibile tramite semplici aggiornamenti delle dipendenze nell’attuale contesto.
Resto a disposizione per eventuali approfondimenti o per valutare insieme i possibili step evolutivi.
Grazie,
Flaviano

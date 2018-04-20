<?php
function lang($phrase){
    static $lang = array(
		'CHAIN_COIN' => 'Blockchain Alter Zerst. [Tage/Münzen]',
		'AVGCHAIN_DAYS' => '&#216; Blockchain Alter [<small><sup>Tage</sup>/<sub>Münzen</sub></small>]',
		'CHAIN_DAYS' => 'Blockchain Alter [Tage]',
		'COIN_EMC' => 'Münzen Verfügbar [EMC]',
		'DAYS_DAYS' => 'Tage',
		'DIFFICULTY_DIFFICULTY' => 'Schwierigkeit',
		'EMPTY_ADDRESSES' => 'Leere Adressen',
		'FLAG_FLAG' => 'Typ',
		'HOURS_HOURS' => 'Stunden',
		'ID_ID' => 'ID',
		'IN_ADDRESSES' => 'Genutzte Adressen',
		'MINUTES_MINUTES' => 'Minuten',
		'NEWER_NEWER' => 'Neuer',
		'OLDER_OLDER' => 'Älter',
		'POS_COIN' => 'PoS &#216; Alter Zerst. [<small><sup>Tage</sup>/<sub>Münzen</sub></small>]',
		'POS_DAYS' => 'PoS Alter Zerst. [Tage]',
		'POS_EMC' => 'PoS Stake [EMC]',
		'POS_POS' => 'PoS',
		'POW_POW' => 'PoW',
		'REWARD_EMC' => 'Belohnung [EMC]',
		'SEARCH_SEARCH' => 'Suche',
		'SECONDS_SECONDS' => 'Sekunden',
		'SELECT_RANGE' => 'Wähle einen Bereich',
		'SHOW_COLUMNS' => 'Zeige/Verberge Spalten',
		'TIME_AGO' => 'Zeit',
		'TX_COIN' => 'TX &#216; Alter Zerst. [<small><sup>Tage</sup>/<sub>Münzen</sub></small>]',
		'TX_COUNT' => 'TX Anzahl',
		'TX_DAYS' => 'TX Alter Zerst. [Tage]',
		'TX_VOLUME_EMC' => 'TX Volumen [EMC]',
		'TX_FEE_EMC' => 'TX Gebühr [EMC]',
		'AVERAGE_CHARTS' => 'Durchschnitts-Diagramme',
		'DAILY_SUMMARY' => 'täglich zusammengefasst',
		'AVG_AGE' => 'Durchschn. Münzalter',
		'COIN_DESTROYED' => 'Zerstörte Münztage',
		'COIN_SUPPLY' => 'Münzenverfügbarkeit',
		'POW_MINTED' => 'PoW/PoS EMC Erzeugt',
		'TOTAL_AGE' => 'Münzalter insgesamt',
		'UNUSED_ADDRESSES' => 'Ungenutzte Adressen',
		'USED_ADDRESSES' => 'Genutzte Adressen',
		'CHANNEL_ADS' => 'Kanal, z.B. ads',
		'SPECIFY_CHANNEL' => 'Wähle einen Kanal',
		'SUBJECT_PATTERN' => 'Betreff (Suchmuster)',
		'TYPE_BUY' => 'Typ, z.B. sell, buy',
		'DO_SERVICE' => 'Gefällt dir dieser Service?',
		'DONATION_DONATION' => 'Spende',
		'INFO_FEEDBACK' => 'Info / Feedback',
		'REFERRAL_REFERRAL' => 'Werbung',
		'COINS_AVAILABLE' => 'Emercoins im Umlauf',
		'CONFIRMED_TRANSACTIONS' => 'Bestätigte Transaktionen',
		'EXPLORE_EXPLORE' => 'Letzte Transaktionen',
		'LATEST_BLOCK' => 'Letzer Block',
		'POS_DIFFICULTY' => 'PoS Schwierigkeit',
		'POW_DIFFICULTY' => 'PoW Schwierigkeit',
		'THERE_TRANSACTIONS' => 'Es gibt derzeit keine unbestätigten Transaktionen.',
		'TRANSACTION_VOLUME' => 'Transaktionsvolumen',
		'TX_ID' => 'TX ID',
		'UNCONFIRMED_TRANSACTIONS' => 'Unbestätigte Transaktionen',
		'VALUE_EMC' => 'Wert [EMC]',
		'WELCOME_EXPLORER' => 'Willkommen zum Emercoin Blockchain Explorer',
		'ADDRESS_TX' => 'Adresse/Block/TX',
		'CHAIN_CHAIN' => 'Blöcke',
		'CHARTS_CHARTS' => 'Diagramme',
		'EMERBOARD_EMERBOARD' => 'EmerBoard',
		'NVS_NVS' => 'NVS',
		'SHOW_SHOW' => 'Anzeigen',
		'STATS_STATS' => 'Statistik',
		'TOP_TOP' => 'Top100',
		'WALLET_WALLET' => 'Konto',
		'N_HIDE' => 'Verberge Typ "leer"',
		'N_SHOW' => 'Zeige alle Typen',
		'NAME_NAME' => 'Name',
		'REGISTERED_AT' => 'Registriert',
		'RESULTS_PAGE' => 'Ergebnisse pro Seite:',
		'SEARCH_NVS' => 'Durchsuche das NVS',
		'TYPE_TYPE' => 'Typ',
		'VALID_DATED' => 'Gültig & Ungültig',
		'VALID_ONLY' => 'Gültig',
		'VALID_UNTIL' => 'Gültig bis',
		'VALUE_VALUE' => 'Wert',
		'VALUE_VALUENVS' => 'Wert',
		'24H_STATISTICS' => '24h Statistiken',
		'24H_STATISTICS' => '24h Transaktionsstatisitiken',
		'AVG_COIN' => 'Durchschn. Tage/Münze',
		'BASED_H' => 'basierend auf den letzten 24 Std.',
		'BASED_TRANSACTIONS' => 'basierend auf den letzten 24 Std. - ohne coinbase oder PoS Transaktionen',
		'BLOCKCHAIN_STATISTICS' => 'Blockchain-Statistiken',
		'BLOCKS_BLOCKS' => 'Blöcke',
		'BLOCKS_FOUND' => 'Gefundene Blöcke',
		'CHAIN_LENGTH' => 'Blockchain-Länge',
		'CHAIN_SIZE' => 'Blockchain-Größe',
		'COIN_DESTROYED' => 'Münztage zerstört',
		'EMC_MINTED' => 'EMC erzeugt',
		'GENERAL_DAYS' => 'Allgemeine Statistiken - Die Label zeigen die extrapolierte tägliche Änderung (basierend auf den letzten 14 Tagen)',
		'KNOWN_ADDRESSES' => 'Bekannte Adressen',
		'MINUTES_BLOCKS' => 'Minuten zwischen zwei Blöcken',
		'NAME_STATISITICS' => 'Name Value Storage Statistiken',
		'TOP_TYPES' => 'Top 5 Typen',
		'TOTAL_FEES' => 'Gebühren insgesamt',
		'TOTAL_OUTPUT' => 'Ausgehendes Transaktionsvolumen',
		'TOTAL_TOTAL' => 'Gesamt',
		'TOTAL_VALUES' => 'Einträge insgesamt',
		'TRANSACTIONS_TRANSACTIONS' => 'Transaktionen',
		'UNUSED_UNUSED' => 'Ungenutzt',
		'USED_USED' => 'Genutzt',
		'VALID_RECORDS' => 'Gültige DNS Einträge',
		'VALID_VALUES' => 'Gültige Einträge',
		'ACCOUNT_ACCOUNT' => 'Account',
		'ADDRESS_ADDRESS' => 'Adresse',
		'BALANCE_EMC' => 'Guthaben [EMC]',
		'HOLDINGS_EMC' => 'Besitz [EMC]',
		'LAST_RECEIVE' => 'Zuletzt empfangen',
		'LAST_SENT' => 'Zuletzt gesendet',
		'OTHERS_OTHERS' => 'Andere',
		'PERCENTAGE_COINS' => 'Anteil aller Münzen [%]',
		'PERCENTAGE_PERCENTAGE' => 'Anteil [%]',
		'RANK_RANK' => 'Rang',
		'TOP_ACCOUNTS' => 'Top Konten',
		'TOP_100ACCOUNTS' => 'Top 100 Konten',
		'TOP_ADDRESSES' => 'Top Adressen',
		'WEALTH_DISTRIBUTION' => 'Vermögensverteilung',
		'ADDITIONAL_APPLY' => 'Es fallen Gebühren an.',
		'ADDRESS_BOOK' => 'Adressbuch',
		'ALL_TRANSACTIONS' => 'Alle Transaktionen',
		'AMOUNT_EMC' => 'Menge [EMC]',
		'BALANCE_BALANCE' => 'Guthaben',
		'BETA_RISK' => 'Beta Phase - Nutzung auf eigene Gefahr!',
		'BUY_ADDRESS' => 'Kaufe eine neue Adresse',
		'CAPTCHA_CAPTCHA' => 'captcha',
		'CATEGORY_CATEGORY' => 'Kategorie',
		'FEE_FEE' => 'Gebühr',
		'FROM_TO' => 'Von/Zu',
		'GET_ADDRESS' => 'Erzeuge eine neue Adresse',
		'I_THE' => 'Ich stimme zu:',
		'TERMS_SERVICE' => 'terms of servce',
		'LABEL_LABEL' => 'Kennzeichnung',
		'LOGIN_LOGIN' => 'Anmelden',
		'NAME_DELETE' => 'NVS Löschung',
		'NAME_NAME' => 'Name',
		'NEW_NAME' => 'NVS Eintrag',
		'NAME_UPDATE' => 'NVS Update',
		'NEW_ADDRESS' => 'Neue Adresse',
		'NEW_ENTRY' => 'Neuer Eintrag',
		'NVS_NVS' => 'NVS',
		'OR_OR' => 'ODER',
		'OVERVIEW_OVERVIEW' => 'Übersicht',
		'SETTINGS_SETTINGS' => 'Einstellungen',
		'LOGOUT_LOGOUT' => 'Abmelden',
		'PASSWORD_PASSWORD' => 'Passwort',
		'RECEIVE_RECEIVE' => 'Empfangen',
		'RECENT_TRANSACTIONS' => 'Letzte Transaktionen',
		'REGISTER_REGISTER' => 'Registrieren',
		'REPEAT_PASSWORD' => 'Wiederhole Passwort',
		'SAVE_SAVE' => 'Speichern',
		'SEND_SEND' => 'Senden',
		'STAKE_STAKE' => 'Stake',
		'STATUS_STATUS' => 'Status',
		'THIS_BALANCE1' => 'This transaction will subtract',
		'THIS_BALANCE2' => 'EMC from your balance.',
		'TRANSACTION_EMC' => 'Transaktionsgebühr:',
		'USERNAME_USERNAME' => 'Benutzername',
		'VALID_EXTERNAL' => 'gültig (extern)',
		'VALID_INTERNAL' => 'gültig (intern)',
		'VOLUME_VOLUME' => 'Volumen',
		'EMCSSL_VERYHIGH' => 'EMCSSL mit deinem Passwort [Sehr hohe Sicherheit]',
		'EMCSSL_HIGH' => 'EMCSSL ohne Passwort [Hohe Sicherheit]',
		'EMCSSL_LOW' => 'EMCSSL ODER Passwort [Geringe Sicherheit]',
		'EMCSSL_DEACTIVATE' => 'Deaktiviere EMCSSL',
		'YOUR_CERTIFICATE' => 'Dein EMCSSL Zertifikat',
		'YOU_LOGIN' => 'Du kannst EMCSSL nutzen um deinen Login abzusichern.',
		'WHAT_EMCSSL' => 'Was ist EMCSSL?',
		'UPDATE_SETTINGS' => 'Übernehmen',
		'CURRENT_PASSWORD' => 'Aktuelles Passwort',
		'NEW_PASSWORD' => 'Neues Passwort',
		'REPEATNEW_PASSWORD' => 'Erneut eingeben',
		'DAYS_COIN' => '<sup>Tage</sup>/<sub>Münze</sub>',
		'ANNUAL_GROWTH' => 'Jährliches Wachstum',
		'PER_CHARTS' => 'Pro Block Diagramme',
		'POS_DIFF' => 'PoS Schwierigkeit',
		'POW_DIFF' => 'PoW Schwierigkeit',
		'COIN_AGE' => 'Münzalter',
		'TX_ONLY' => 'tx mit Gebühren > 0',
		'POW_BLOCKS' => 'PoW/PoS Blöcke',
		'TOP_100ADDRESSES' => 'Top 100 Adressen',
		'NEVER_NEVER' => 'niemals',
		'ALL_ALL' => 'Alle',
		'COIN_DISTRIBUTION' => 'Münzenverteilung',
		'LOGIN_SUCCESSFULL' => 'Anmeldung erfolgreich',
		'LOGIN_NOTSUCCESSFULL' => 'Anmeldung fehlgeschlagen',
		'AT_NECESSARY' => 'Mindestens 4 Buchstaben sind notwendig',
		'PLEASE_CHARACTERS' => 'Bitte nutze max. 50 Buchstaben',
		'A_REQUEST' => 'Es gab ein Problem. Bitte prüfe deine Anfrage.',
		'PLEASE_SERVICE' => 'Bitte stimme den Nutzungsbedingungen zu.',
		'PASSWORDS_MATCH' => 'Passwörter stimmen überein',
		'PASSWORDS_NOMATCH' => 'Passwörter stimmen nicht überein',
		'THIS_TAKEN' => 'Dieser Name ist bereits vergeben',
		'THIS_FREE' => 'Dieser Name ist frei',
		'INVALID_CAPTCHA' => 'Ungültiges captcha',
		'REQUEST_INCOMPLETE' => 'Die Anfrage war unvollständig',
		'USER_CREATED' => 'Der Benutzer wurde angelegt',
		'UNCONFIRMED_UNCONFIRMED' => 'Unbestätigt',
		'RESERVED_RESERVED' => 'Reserviert',
		'STOCK_BTC' => 'Börse - EMC/BTC',
		'STOCK_USD' => 'Börse - EMC/USD',
		'STAKE_PERIOD' => 'Stake in dieser Periode',
		'EARNED_STAKE' => 'Verdienter Stake',
		'AVERAGE_AT' => 'Durchschn. Preis bei ',
		'VWAP_VWAP' => 'VWAP',
		'LAST_LAST' => 'Zuletzt',
		'LOW_LOW' => 'Tief',
		'HIGH_HIGH' => 'Hoch',
		'SENT_SENT' => 'Gesendet',
		'INVALID_INVALID' => 'ungültig',
		'THIS_EXTERNALADDRESS' => 'Diese Adresse ist extern',
		'THIS_INVALIDADDRESS' => 'Diese Adresse ist ungültig',
		'THIS_TO' => 'Diese Adresse gehört zu',
		'YOU_YOU' => 'dir',
		'NEW_CREATED' => 'Ein neuer Adressbucheintrag wurde angelegt.',
		'SOMETHING_WRONG' => 'Etwas ging schief.',
		'SYSTEM_SYSTEM' => 'System',
		'ADDRESS_REMOVED' => 'Der Adressbucheintrag wurde entfernt.',
		'NAME_CHANGED' => 'Der Name wurde geändert.',
		'ADDRESS_CHANGED' => 'Die Adresse wurde geändert.',
		'SEND_COINS' => 'Sende Coins',
		'THIS_SUBSTRACTBALANCE' => 'Diese Transaktion wird "+(parseFloat(amount)+parseFloat(fee))+" EMC von deinem Guthaben abbuchen.',
		'THIS_SUBSTRACTBALANCE2' => 'Diese Transaktion wird "+amount+" EMC von deinem Guthaben abbuchen.',
		'TRANSACTION_QUEUE' => 'Die Transaktion wurde der Warteschlange hinzugefügt.',
		'EMC_TO' => 'EMC wurden übertragen an',
		'ADDRESSES_ADDRESSES' => 'Adressen',
		'RECEIVED_RECEIVED' => 'Empfangen',
		'LABEL_CHANGED' => 'Kennzeichnung wurde geändert.',
		'NEW_ADDRESSCREATED' => 'Neue Adresse wurde erzeugt.',
		'REGISTER_PAIR' => 'Registriere Namen->Wert Paar',
		'UPDATE_PAIR' => 'Aktualisiere Namen->Wert Paar',
		'DELETE_PAIR' => 'Lösche Namen->Wert Paar',
		'REGISTER_NAME' => 'Registriere Namen',
		'THE_LATER' => 'Der Wallet-Client hat die Möglichkeit Coins an einen Namen zu senden.
Dieser Name wird mit einer neuen Adresse verknüpft.
Coins, welche an diese Adresse/Namen gesendet werden, werden dir nicht gutgeschrieben.
Du kannst später dem Namen eine deiner Adresse zuweisen.',
		'ADDITIONAL_DAYS' => 'Zusätzliche Tage',
		'UPDATE_NAME' => 'Aktualisiere Namen',
		'MOVE_ADDRESS' => 'Verknüpfe mit Adresse',
		'DELETE_NAME' => 'Lösche Namen',
		'NAME_REGFEES' => 'Namen Registrierungsgebüren',
		'NAME_UPFEES' => 'Namen Aktualisierungsgebühren',
		'NAME_CONFIRMED' => 'Name wurde erfolgreich registriert - bitte warte, bis es bestätigt wurde',
		'NAME_DELETED' => 'Name wurde gelöscht',
		'NAME_UPSUCCESS' => 'Namensaktualisierung war erfolgreich',
		'THIS_NAMETAKEN' => 'Dieser Name wird bereits verwendet',
		'BLOCK_DETAILS' => 'Block Details',
		'HASH_HASH' => 'Hash',
		'TIME_TIME' => 'Zeit',
		'NONCE_NONCE' => 'Nonce',
		'MERKLE_ROOT' => 'Merkle Root',
		'INPUTS_INPUTS' => 'Eingänge',
		'OUTPUTS_OUTPUTS' => 'Ausgänge',
		'MINT_MINT' => 'Neu erzeugt',
		'SIZE_SIZE' => 'Größe',
		'COIN_COIN' => 'Münze',
		'UNKNOWN_BLOCK' => 'Unbekannter Block',
		'PLEASE_HASH' => 'Bitte gib eine gültige Adresse, Block-Hash, Block ID oder Transaktionshash ein.',
		'TRANSACTION_OVERVIEW' => 'Transaktionsübersicht',
		'DATE_DATE' => 'Datum',
		'UNKNOWN_ADDRESS' => 'Unbekannte Adresse',
		'NO_PROVIDED' => 'Keine Adresse eingegeben',
		'COINS_COINS' => 'Münzen',
		'RECEIVED_TX' => 'Empfangen in TX',
		'SPEND_TX' => 'Gesendet in TX',
		'AGE_AGE' => 'Alter',
		'MINTING_CHANCE' => 'Chance auf PoS-Block',
		'WITHIN_H' => 'innerhalb 24h',
		'ESTIMATED_REWARD' => 'Geschätzte Belohnung',
		'ESTIMATED_ACCVALUE' => 'Geschätzter Kontowert',
		'SHOW_ADDRESSES' => 'Zeige leere Adressen',
		'TRANSACTION_DETAILS' => 'Transaktionsdetails',
		'CONFIRMED_BLOCK' => 'Bestätigt in Block',
		'TRACE_TRACE' => 'Spur',
		'COIN_DAYS' => 'Münztage',
		'UNSPEND_UNSPEND' => 'nicht ausgegeben',
		'EMCSSL_SET' => 'EMCSSL wurde gesetzt"',
		'MAINTENANCE_MAINTENANCE' => 'Der Emercoin Blockchain Explorer ist aktuell im Maintenancemodus!',
		'UNKNOWN_TRANSACTIONS' => 'Unbekannte Transaktion',
		'NO_TXPROVIDED' => 'Keine Transaktion eingegeben',
		'TRACE_OF' => 'Spur von',
		'CLAIM_NAME' => 'Beanspruche Namen',
		'CLAIM_INFO' => 'Wenn du einen Namen zu einer deiner Onlineadressen übertragen hast (mit name_update), kannst du den Besitz hier beanspruchen.',
		'NAME_CLAIMED' => 'Du hast den Namen übernommen.',
		'NAME_BELONG' => 'Dieser Name lässt sich nicht deinen Adressen zuordnen.',
		'NAME_NOTREGISTERED' => 'Dieser Name wurde nicht registriert.',
		'INTEREST_INTEREST' => 'Zinsen',
		'EXPECTED_INTEREST' => 'Erwartete Zinsen p.a.',
		'AVERAGE_INTEREST' => 'Durchschn. tägliche Zinsen',
		'BASED_M' => 'basierend auf dem letzten Monat',
		'WALLET_BLOCKS' => 'Gefundene Blöcke',
		'POOL_STATISTICS' => 'Pool Statistiken'
		);
    return $lang[$phrase];
}
?>
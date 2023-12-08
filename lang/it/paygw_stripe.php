<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'paygw_stripe', language 'it'
 *
 * @package    paygw_stripe
 * @copyright  2021 Alex Morris <alex@navra.nz>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 $string['pluginname'] = 'Stripe';
 $string['pluginname_desc'] = 'Il plugin Stripe consente di ricevere pagamenti tramite Stripe.';
 $string['gatewayname'] = 'Stripe';
 $string['apikey'] = 'Chiave API';
 $string['apikey_help'] = 'La chiave API che utilizziamo per identificarci con Stripe.';
 $string['secretkey'] = 'Chiave Segreta';
 $string['secretkey_help'] = 'Chiave segreta per l\'autenticazione con Stripe.';
 $string['paymentmethods'] = 'Metodi di pagamento';
 $string['allowpromotioncodes'] = 'Consenti codici promozionali';
 $string['gatewaydescription'] = 'Stripe è un provider di gateway di pagamento autorizzato per l\'elaborazione delle transazioni con carte di credito.';
 $string['stripeaccount'] = 'ID account Stripe';
 $string['stripeaccount_help'] = 'Per la creazione della pagina di branding per la carica diretta.';
 $string['paymentsuccessful'] = 'Pagamento effettuato con successo';
 $string['paymentcancelled'] = 'Pagamento annullato';
 $string['paymentpending'] = 'Il pagamento è in sospeso, sarai iscritto una volta che il pagamento sarà autorizzato.';
 $string['customerdescription'] = 'ID utente Moodle: {$a}';
 $string['enableautomatictax'] = 'Abilita tassazione automatica';
 $string['enableautomatictax_desc'] = 'La tassazione automatica deve essere abilitata e configurata nel pannello di controllo di Stripe.';
 $string['defaulttaxbehavior'] = 'Comportamento fiscale predefinito';
 $string['defaulttaxbehavior_help'] = 'Comportamento fiscale predefinito (inclusivo, esclusivo). Cambiabile nel pannello di controllo di Stripe.';
 $string['profilecat'] = 'Abbonamenti pagamento Stripe';
 $string['cancelsubscriptions'] = 'Modifica abbonamenti';
 $string['subscriptions'] = 'Abbonamenti';
 $string['subscriptionsuccessful'] = 'Sottoscritto con successo';
 $string['paymenttype'] = 'Tipo di pagamento';
 $string['paymenttype:onetime'] = 'Una tantum';
 $string['paymenttype:subscription'] = 'Abbonamento';
 $string['subscriptioninterval'] = 'Periodo di abbonamento';
 $string['customsubscriptioninterval'] = 'Periodo di abbonamento personalizzato';
 $string['customsubscriptionintervalcount'] = 'Intervallo periodo di abbonamento personalizzato';
 $string['customsubscriptionintervalcount_help'] = '';
 $string['anchoredbilling'] = 'Usa l\'inizio dell\'intervallo attuale come data di fatturazione fissa';
 $string['anchoredbilling_help'] =
     'Esempio: ti iscrivi a metà mese, verrai fatturato immediatamente per il mese corrente.';
 $string['trialperiod'] = 'Periodo di prova';
 $string['trialperiod_help'] = 'Esempio: ti registri il 25 Aprile, aprile è gratuito e la fatturazione inizia il 1 Maggio.';
 $string['failedtosetdefaultpaymentmethod'] = 'Impossibile impostare un metodo di pagamento predefinito per l\'abbonamento, riprova.';
 $string['subscriptionerror'] = 'Si è verificato un errore durante la creazione dell\'abbonamento, contatta l\'amministratore del sito per assistenza.';
 $string['cancelsubscription'] = 'Annulla abbonamento';
 $string['cancelsubscriptionconfirm'] = 'Sei sicuro di voler annullare questo abbonamento?';
 $string['product'] = 'Prodotto';
 $string['fee'] = 'Commissione';
 $string['scheduledrenewal'] = 'Rinnovo programmato';
 $string['status'] = 'Stato';
 $string['updatepaymentmethod'] = 'Aggiorna metodo di pagamento';
 $string['cancel'] = 'Annulla';
 $string['subscriptionssubheading'] =
     'Questa pagina elenca gli abbonamenti che hai acquistato. Puoi annullarli qui,verranno processate immediatamente e non sarai in grado di accedere nuovamente al corso.';
 
 $string['customsubscriptioninterval:day'] = 'Giorno';
 $string['customsubscriptioninterval:week'] = 'Settimana';
 $string['customsubscriptioninterval:month'] = 'Mese';
 $string['customsubscriptioninterval:year'] = 'Anno';
 
 $string['subscriptionperiod:daily'] = 'Giornaliero';
 $string['subscriptionperiod:weekly'] = 'Settimanale';
 $string['subscriptionperiod:monthly'] = 'Mensile';
 $string['subscriptionperiod:every3months'] = 'Ogni 3 mesi';
 $string['subscriptionperiod:every6months'] = 'Ogni 6 mesi';
 $string['subscriptionperiod:yearly'] = 'Annuale';
 $string['subscriptionperiod:custom'] = 'Personalizzato';
 
 $string['subscriptionstatus:active'] = 'Attivo';
 $string['subscriptionstatus:past_due'] = 'Pagamento in ritardo';
 $string['subscriptionstatus:unpaid'] = 'Non pagato';
 $string['subscriptionstatus:canceled'] = 'Annullato';
 $string['subscriptionstatus:incomplete'] = 'Incomplete';
 $string['subscriptionstatus:incomplete_expired'] = 'Scaduto';
 $string['subscriptionstatus:trialing'] = 'In prova';
 $string['subscriptionstatus:paused'] = 'In pausa';
 
 $string['payment:successful:subject'] = 'Pagamento riuscito';
 $string['payment:successful:message'] = 'Il tuo pagamento è stato effettuato con successo, ora puoi visitare {$a->url}';
 $string['payment:failed:subject'] = 'Pagamento non riuscito';
 $string['payment:failed:message'] = 'Il tuo pagamento non è riuscito a essere elaborato, controlla i dettagli del pagamento e riprova.';
 
 $string['messageprovider:payment_successful'] = 'Notifica di conferma di pagamento ritardato riuscito';
 $string['messageprovider:payment_failed'] = 'Notifica di pagamento ritardato fallito';
 
 $string['taxbehavior:exclusive'] = 'Esclusivo';
 $string['taxbehavior:inclusive'] = 'Inclusivo';
 
 $string['paymentmethod:card'] = 'Carta';
 $string['paymentmethod:alipay'] = 'Alipay';
 $string['paymentmethod:bancontact'] = 'Bancontact';
 $string['paymentmethod:eps'] = 'EPS';
 $string['paymentmethod:giropay'] = 'Giropay';
 $string['paymentmethod:ideal'] = 'iDEAL';
 $string['paymentmethod:p24'] = 'P24';
 $string['paymentmethod:sepa_debit'] = 'Addebito diretto SEPA';
 $string['paymentmethod:sofort'] = 'Sofort';
 $string['paymentmethod:upi'] = 'UPI';
 $string['paymentmethod:netbanking'] = 'NetBanking';
 $string['paymentmethod:wechat_pay'] = 'WeChat Pay';
 $string['paymentmethod:klarna'] = 'Klarna';
 
 $string['privacy:metadata:stripe_customers'] = 'Memorizza la relazione dagli utenti Moodle agli oggetti cliente di Stripe';
 $string['privacy:metadata:stripe_customers:userid'] = 'ID utente Moodle';
 $string['privacy:metadata:stripe_customers:customerid'] = 'ID cliente restituito da Stripe';
 
 $string['privacy:metadata:stripe_intents'] = 'Memorizza i dati di intento di pagamento per tracciare la cronologia dei pagamenti';
 $string['privacy:metadata:stripe_intents:userid'] = 'ID utente Moodle';
 
 $string['privacy:metadata:stripe_subscriptions'] = 'Memorizza la relazione dagli abbonamenti in Moodle agli abbonamenti di Stripe';
 $string['privacy:metadata:stripe_subscriptions:userid'] = 'ID utente Moodle';
 
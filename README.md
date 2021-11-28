# jeve-passwordmanager-wordpress
Un *[password manager per JEVE](http://jevemanagerpsw.altervista.org)* che grazie all'ausilio dell'accesso a multilivelli stabilisce, per ogni utente, quali sono le aree accessibili e non. 
## Funzionamento
I privilegi vengono gestiti grazie alla stringa binaria 'accessi' (i.e 001) contenuta nel DB. Il numero dei "bit" dedicati corrisponde alle varie aree riservate dell'applicazione web. Se la cifra in quella posizione è '1' allora l'utente avrà il completo accesso a quell'ara e viceversa. 
**Caso JEVE:**
Abbiamo due aree e quindi due cifre nella nostra stringa accessi. 
La prima cifra reppresenta la possibilità di visualizzare e modificare gli utenti mentre la seconda si riferisce all'utente amministratore.
* -> Esempio1: * 
- username: mariorossi@example.com
- accessi: 10
L'utente mariorossi@example.com accederà solo alla prima pagina.
* -> Esempio2: * 
- username: tiziocaio@example.com
- accessi: 11
L'utente tiziocaio@example.com accederà a tutte le pagine.

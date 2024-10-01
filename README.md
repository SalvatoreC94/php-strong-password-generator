# PHP Strong Password Generator

## Descrizione
Questo progetto è un generatore di password sicure, che consente agli utenti di generare password casuali basate su diverse configurazioni. Le password generate possono includere lettere minuscole, lettere maiuscole, numeri e simboli speciali. 

## Milestone

### Milestone 1
- Creare un form che invii in GET la lunghezza della password.
- Implementare una funzione che utilizza questo dato per generare una password casuale composta da:
  - Lettere minuscole
  - Lettere maiuscole
  - Numeri
  - Simboli
- Tutta la logica e il layout devono essere scritti in un unico file `index.php`.

### Milestone 2
- Dopo aver verificato il corretto funzionamento del codice, spostare la logica di generazione della password in un file `functions.php`.
- Includere il file `functions.php` nella pagina principale `index.php`.

### Milestone 3 (BONUS)
- Invece di visualizzare la password nella pagina `index.php`, effettuare un redirect a una pagina dedicata.
- Utilizzare `$_SESSION` per recuperare la password da mostrare all'utente nella nuova pagina.

### Milestone 4 (BONUS)
- Gestire ulteriori parametri per la password, consentendo agli utenti di scegliere quali caratteri includere nella password:
  - Solo numeri
  - Solo lettere
  - Solo simboli
  - Combinazioni di numeri, lettere e simboli
- Dare all'utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.




# web-development-course

`Jakub Piskorowski on 02/10/2022 wersja: 1.0`

## Temat: Okna dialogowe

Przedstawienie działania okien dialogowych.

Pliki źródłowe: 
- [alert.html](alert.html)
- [confirm.html](confirm.html)
- [prompt.html](prompt.html)

---

## Objaśnienie

Okna dialogowe (ang. popup = „wyskakujące okno”) namiętnie wykorzystywane są w wielu “szkolnych” skryptach, dlatego koniecznie poznamy teraz ich rodzaje. Oczywiście w codziennej praktyce surfowania w internecie, witryna nie powinna używać zbyt wielu okien tego typu, by nie irytować niepotrzebnie użytkownika. Oto podstawowe okna dialogowe:

### Alert

informacja dla użytkownika, wyposażona jedynie w przycisk “OK”, służy do wyprowadzania danych (instrukcja wyjścia).
``` JavaScript
alert("Wyskakujące okienko!");
```
Kod źródłowy: [alert.html](alert.html)

### Confirm

(ang. "potwierdzenie") – to okno dialogowe wyposażone jest w dwa przyciski: (“OK” oraz “Anuluj”), co w kombinacji z instrukcją warunkową if może pozwolić nam poprosić użytkownika o podjęcie decyzji.
``` JavaScript
 if (confirm("Podejmij decyzję!")) {
   alert("Wybrano opcję: OK");
   } else {
   alert("Wybrano opcję: Anuluj");
 } 
```
Kod źródłowy: [confirm.html](confirm.html)

### Prompt

Okno, które może posłużyć do wprowadzania danych (instrukcja wejścia) – oczywiście w praktyce lepiej jest użyć pól edycyjnych, ale istnieje możliwość pobrania wartości także w oknie dialogowym. Drugi argument funkcji prompt() (w przykładzie poniżej słowo “Adam”) to tzw. placeholder, czyli wartość domyślna (od razu będzie ona zaznaczona, tak aby rozpoczęcie pisania usunęło ją z okna dialogowego).
``` JavaScript
 var imie = prompt("Podaj imię", "Adam");
 document.write("Twoje imię: "+imie);
 ```
 Kod źródłowy: [prompt.html](prompt.html)

 Źródło: [pasja-informatyki.pl](https://pasja-informatyki.pl/programowanie-webowe/alert-prompt-confirm/)




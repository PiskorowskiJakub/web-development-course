# web-development-course

`Jakub Piskorowski on 03/10/2022 wersja: 1.0`

## Temat: Funkcje

Przedstawienie działania funkcji w JavaScript.

Pliki źródłowe: 
- [funkcja.html](funkcja.html)

---

## Objaśnienie

Funkcja to wydzielony, autonomiczny fragment kodu, który nie wykona się automatycznie sam, tylko zostanie zawołany do pracy w konkretnym miejscu kodu, który nazywamy "wywołaniem" funkcji.

Wywołania dokonujemy po nazwie funkcji, koniecznie używając także nawiasów okrągłych (aby było jasne, że chodzi o nazwę funkcji, a nie zmiennej). 

``` JavaScript
 function suma()
 {
   // instrukcje realizujące dodawanie
 } 
```

 ### Parametry funkcji

 Do własnej funkcji możemy wysłać jakieś wartości jako tzw. parametry – umieszczamy je w nawiasach okrągłych i dowolnie nazywamy (klauzula var nie jest tym razem wymagana), a jeśli parametrów jest więcej niż jeden, to oddzielamy je przecinkiem:
``` JavaScript
 var a = 3;
 var b = 4;

 alert(suma(a,b)); // wywołanie funkcji suma w alercie

 function suma(x, y)
 {
   return x + y;
 } 
 ``` 
 Kod źródłowy: [funkcja.html](funkcja.html)

Co ważne – te same wartości 3 i 4 (umieszczone w zmiennych: "a", "b") funkcja na własne potrzeby nazywa: "x", "y", a zatem jak widać przechowuje te liczby w innych szufladkach.

Oznacza to, iż funkcja `suma()` tak naprawdę działa na kopiach zmiennych `a`, `b`. Dzięki temu oryginalne wartości nie ulegną przypadkowej podmianie wartości! Dlatego też domyślnie, parametr funkcji jest jedynie kopią przekazanej do funkcji, oryginalnej wartości (zwiększamy bezpieczeństwo danych, oszczędzamy także wiele czasu przy szukaniu ewentualnych przypadkowych podmian, możemy łatwiej przenosić funkcje do innych źródeł, gdyż jest całkowicie niezależna od nazw zmiennych spoza jej zasięgu).

 Źródło: [pasja-informatyki.pl](https://pasja-informatyki.pl/programowanie-webowe/funkcje-parametry-funkcji/)


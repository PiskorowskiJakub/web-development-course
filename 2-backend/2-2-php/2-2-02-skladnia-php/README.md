# web-development-course

`Jakub Piskorowski on 07/09/2022 wersja: 1.0`

## Temat: Składnia PHP

Wprowadzenie do języka PHP i składnia.

---

## Objaśnienie

PHP jest językiem programowania umozliwiającym generowanie dynamicznych rezultatów po stronie serwera. Domyślnie dokumenty zawierające kod PHP mają rozszerzenie `.php`. 

Aby umośliwić wykonanie instrukcji PHP należy otworzyć znacznik:
``` php
<?php
```

Wewnątrz niego umieszcza się cały kod PHP. natomiast zamykamy go następującym znacznikiem:
``` php
?>
```

Prosty program w PHP, wyświetlający napis "Hello World":
``` php
<?php
    echo "Hello world";
?>
```

W niektórych przykładach kodu może wystąpić inna forma jego otwarcia:
```php
<?
    echo "Hello world";
?>
```

Jest to technicznie porprawna alternatywa jednak nie jest zgodna z standardem XML i traktowana jako przestarzała przez co w niektórych przypadkach może nie zadziałać. 

## Zastosowanie komentarzy

Komentarze można umieszczać na dwa sposoby. Komentarz obejmujący jedną linie poprzedzamy dwoma ukośnikami:
``` php
// To jest komentarz
```

Komentarz obejmujący kilka wierszy zaczynamy `/*` natomiast kończymy `*/`.
``` php
/* To jest komentarz
na kilka linii
kodu */
```

## Podstawowa składnia

**Średniki** \
Instrukcje w PHP kończą się średnikiem. Zapomnienie o średniku kończy się wyświetleniem błędu `Parse error`.

**Symbol \$**  
W języku PHP znak `$` należy umieszczać przed nazwą `wszystkich zmiennych`. Niezaleznie od tego, czy tworzysz zmienną liczbową, tekstową, czy tablicę, powinna ona być zadeklarowana w sposób przedstawiony poniżej.
``` php
$mycounter = 1;
$mystring = "Hej";
$myarray = array("Jeden", "Dwa", "Trzy");
```

W momencie wyświetlenia tektu w funkcji `echo` oraz zmiennej lokalnej. Należy użyc znaku `kropki`, oddzielającego.
``` php
<?php
    echo "Test ". $zmienna;
?>
```


Źródło: [Książka "PHP, MySQL i JavaScript", Wydawnictwo: Helion](https://helion.pl/ksiazki/php-mysql-i-javascript-wprowadzenie-wydanie-v-robin-nixon,phmyj5.htm#format/e)

---

## Ćwiczenie 

Stwórz prosty dokument wyświetlający napis "Hello World" wykorzystując funkcję `echo`. Za pomocą edytora tekstu `Notepad++` lub `Visual Studio Code`. Zachowując podstawową strukturę pliku HTML oraz poprawną składnię języka PHP. 

Kolejnym krokiem jest dodanie znaczników HTML do PHP. Należy wyświetlić conajmniej trzy linie tekstu, jedna pod drugą. 

Wynik działania programu:

```text
Hello World
My counter 1
Hello friend
```

Kod źrodłowy: [index.php](index.php)
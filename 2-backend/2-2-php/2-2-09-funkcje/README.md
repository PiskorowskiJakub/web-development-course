# web-development-course

`Jakub Piskorowski on 09/10/2022 wersja: 1.0`

## Temat: Funkcje

Przedstawienie działania funkcji w języku PHP.

Pliki źródłowe:
- [funkcja-1.php](funkcja-1.php)
- [funkcja-2.php](funkcja-2.php)
- [funkcja-3.php](funkcja-3.php)
- [funkcja-4.php](funkcja-4.php)
- [funkcje-5.php](funkcja-5.php)

---

## Objaśnienie

Funkcje, to w PHP, a także innych językach programowania, bardzo wygodny sposób na wielokrotne wykorzystanie tego samego kodu i to w sposób sparametryzowany. Poniższy film ilustruje klasyczne pojęcie funkcji w dowolnym języku programowania.

[youtube.com](https://www.youtube.com/watch?v=1iKAaD5yMHc&t=85s)

Deklaracja funkcji jest prosta. Ma następującą postać (parametry są opcjonalne):
``` PHP
function nazwa_funkcji(parametr1, parametr2, ...) {
... kod funkcji ...
}

nazwa_funkcji(argument1, argument2, ...) // tutaj następuje wywołanie funkcji
```

W przypadku, gdy chcemy zwrócić jakąś wartość funkcji, stosujemy słowo kluczowe return i nazwę zmiennej, która zawiera tę wartość. Konstrukcja takiej funkcji jest następująca:
``` PHP
function nazwa_funkcji(parametr1, parametr2, ...) {
... kod funkcji ...
return zmienna;
}

var zmienna_1 = nazwa_funkcji(argument1, argument2, ...) // tutaj następuje wywołanie funkcji i przypisanie wartości funkcji do zmiennej
```

### Przykłady stosowania funkcji

Oto kilka przykładów stosowania funkcji w PHP.

### Przykład 1 - funkcja bez parametrów i słowa kluczowego return.

Przykład ten ilustruje najprostsze wykorzystanie funkcji. Funkcja ma za zadanie wyświetlić napis.
``` PHP
<?php
function wyswietl() {
   echo 'Cześć Ola';
}
wyswietl();
?>
```
Kod źródłowy: [funkcja-1.php](funkcja-1.php)

### Przykład 2 - wykorzystanie parametru przekazywanego do funkcji.

Przykład ten ilustruje sposób przekazywania parametrów do funkcji. Funkcja ma za zadanie wyświetlić wartość zmiennej, którą programista wpisze jako parametr wywołania funkcji.
``` PHP
<?php
function wyswietl($komunikat) {
   echo $komunikat;
}

wyswietl("Cześć Ola!");
wyswietl("cześć Jola!");
?>
```
Kod źródłowy: [funkcja-2.php](funkcja-2.php)

### Przykład 3 - Prosty kalkulator podatku VAT.

Przykład ten ilustruje sposób przekazywania parametru liczbowego do funkcji. Funkcja oblicza wartość podatku VAT od ceny netto, przekazywanej jako argument funkcji i wyświetla go w okienku alarmu.
``` PHP
<?php
function VAT($cena_netto) {
   echo "Podatek VAT (stawka 23%) od ceny netto ".$cena_netto." zł wynosi ".$cena_netto *0.23." zł.<br>";}

VAT(200);
VAT(100);
?>
```
Kod źródłowy: [funkcja-3.php](funkcja-3.php)

### Przykład 4 - Przykład funkcji zwracającej wartość logiczną.

Funkcja ma za zadanie sprawdzenie, czy dana liczba (przekazany parametr) jest parzysta, czy nieparzysta. Jeżeli jest parzysta, to funkcja zwraca wartość true, w przeciwnym przypadku zwraca wartość false; Program główny, w zależności od tego, jaki uzyska wynik zwrotny od funkcji, wyświetla odpowiedni komunikat. Dodam tylko, że skorzystamy tutaj z własności liczb parzystych, dla których reszta z dzielenia jest równa zero (dla każdej liczby parzystej).
``` PHP
<?php
function czyParzysta($liczba) {
 if ($liczba % 2 == 0) {
   return true;
 } else {
   return false;
 } 
}
$n = 23543256;
if (czyParzysta($n) == true) {
   echo "Liczba " . $n . " jest parzysta";
} else {
   echo "Liczba " . $n . " jest nieparzysta";
}
?>
```
Kod źródłowy: [funkcja-4.php](funkcja-4.php)

### Domyślne argumenty funkcji

W PHP możemy parametrom (argumentom) funkcji przypisać określone wartości domyślne, wówczas,nie musimy ich podawać podczas wywoływania naszej funkcji.
``` PHP
function nazwa_funkcji(parametr1=wartość1, parametr2=wartość2, ...) {
... kod funkcji ...
}

nazwa_funkcji() // tutaj następuje wywołanie funkcji
```

Źródło: [www.medianauka.pl](https://www.medianauka.pl/funkcje-php)

### Przykład 5 - Przykład funkcji wyświetlającej tekst

W zależności od tego czy zostanie przekazana jedna zmienna czy dwie, to zostanie wyświetlony napis z tekstu domyślnego lub tekstu przekazanego w parametrach funkcji.
``` PHP
<?php
function wyswietl($tekst1 = "...", $tekst2 = "---") {
    echo $tekst1 . " ". $tekst2;
    }

    $napis1 = "Cześć";
    $napis2 = "Kasia";
    wyswietl($napis1);
?>
```
Kod źródłowy: [funkcje-5.php](funkcja-5.php)


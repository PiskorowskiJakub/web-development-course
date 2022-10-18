# web-development-course

`Jakub Piskorowski on 10/10/2022 wersja: 1.0`

## Temat: Zastosowanie funkcji do obsługi tablic

Przedstawienie działania funkcji do obsługi tablic w języku PHP.

Pliki źródłowe:
- [funkcje-is-array.php](funkcje-is-array.php)
- [funkcje-count.php](funkcje-count.php)
- [funkcje-sort-rsort.php](funkcje-sort-rsort.php)
- [funkcja-shuffle.php](funkcje-shuffle.php)
- [funkcje-explode.php](funkcje-explode.php)
- [funkcje-current.php](funkcje-current.php)
- [funkcje-next.php](funkcje-next.php)
- [funkcje-reset.php](funkcja-reset.php)
- [funkcje-push.php](funkcje-push.php)
- [funkcje-pop.php](funkcje-pop.php)

---

## Objaśnienie

### is_array

tablice i zmienne współdzielą tę samą przestrzeń nazw. To oznacza, że nie da się zadeklarować zmiennej tekstowej o nazwie `$fred` oraz tablicy o nazwie `$fred`. W razie wątpliwości, jeśli chciałbyś się przekonać, czy jakaś zmienna jest zmienną tablicową, możesz użyć funkcji `is_array` w następujący sposób:
``` PHP
echo (is_array($fred)) ? "Jest tablicą" : "Nie jest tablicą";
```
Kod źródłowy: [funkcje-is-array.php](funkcje-is-array.php)

Jeśli zmiennej `$fred` nie została jeszcze przypisana wartość, powyższa instrukcja zwróci komunikat `Undefined variable`.

### count

Choć funkcja `each` oraz pętla `foreach ... as` świetnie nadają się do przeglądania zawartości tablic, czasem warto sprawdzić, ile elementów zawiera dana tablica; zwłaszcza jeśli zamierzasz się do nich odwoływać bezpośrednio. Aby zliczyć wszystkie elementy w tablicy najwyższego poziomu, możesz użyć następującej instrukcji:
``` PHP
echo count($fred);
```

Gdybyś chciał policzyć wszystkie elementy w tablicy wielowymiarowej, użyj tej samej instrukcji w następującej formie:
``` PHP
echo count($fred, 1);
```
Kod źródłowy: [funkcje-count.php](funkcje-count.php)

Drugi parametr jest opcjonalny i służy do zmiany trybu liczenia: przy wartości 0 sprawdzana jest tylko liczba elementów tablicy najwyższego poziomu, zaś wartość 1 włącza rekurencyjne zliczenie elementów wszystkich zagnieżdżonych tablic.

### sort

Sortowanie należy do tak często wykonywanych operacji, że PHP wyposażono w funkcję służącą specjalnie do tego celu. W najprostszej formie używa się jej następująco:
``` PHP
sort($fred);
```

W odróżnieniu od niektórych innych funkcji `sort` operuje bezpośrednio na tablicy źródłowej. To oznacza, że nie zwraca ona jej kopii z posortowanymi elementami, lecz wartość `TRUE` w przypadku udanego sortowania oraz `FALSE` w przypadku błędu. Obsługuje ona ponadto kilka dodatkowych opcji (tzw. flag). Dwie, o których warto wiedzieć, to wymuszenie sortowania pod względem numerycznym albo znakowym:
``` PHP
sort($fred, SORT_NUMERIC);
sort($fred, SORT_STRING);
```

Tablicę można też posortować w odwrotnej kolejności przy użyciu funkcji `rsort`, jak w tym przykładzie:
``` PHP
rsort($fred, SORT_NUMERIC);
rsort($fred, SORT_STRING);
```
Kod źródłowy: [funkcje-sort-rsort.php](funkcje-sort-rsort.php)

### shuffle

W pewnych sytuacjach, na przykład w przypadku tasowania kart przed grą, przydaje się możliwość ułożenia elementów tablicy w sposób losowy:
``` PHP
shuffle($cards);
```
Kod źródłowy: [funkcja-shuffle.php](funkcje-shuffle.php)

Podobnie jak `sort` funkcja `shuffle` działa bezpośrednio na źródłowej tablicy i zwraca wartość `TRUE` po udanym "tasowaniu", a wartość `FALSE` w przypadku błędu.

### explode

Jest to bardzo użyteczna funkcja, która przyjmuje / pobiera argument w postaci łańcucha znaków składającego się z kilku elementów rozdzielanych określonymi znakami (bądź ciągami znaków), rozdziela te elementy i umieszcza je w tablicy. Praktycznym przykładem zastosowania tej funkcji jest umieszczenie poszczególnych wyrazów zdania w kolejnych elementach tablicy, jak w przykładzie poniżej.
```PHP
<?php
    $temp = explode(' ', "To zdanie składa się z siedmiu słów");
    print_r($temp);
?>
```

Powyższy przykład powoduje wyświetlenie następującego rezultatu:
``` text
Array
(
    [0] => To
    [1] => zdanie
    [2] => składa
    [3] => się
    [4] => z
    [5] => siedmiu
    [6] => słów
)
```

Pierwszy parametr omawianej funkcji - tzw. ogranicznik (delimiter) - nie musi być spacją ani też nie musi być pojedynczym znakiem.
``` PHP
<?php
    $temp = explode('***', "To***zdanie***zawiera***gwiazdki");
    print_r($temp);
?>
```

Rezultat działania kodu:
``` text
Array
(
    [0] => To
    [1] => zdanie
    [2] => zawiera
    [3] => gwiazdki
)
```
Kod źródłowy: [funkcje-explode.php](funkcje-explode.php)

### current

Funkcja `current()` zwraca wartość bieżącego elementu w tablicy. Każda tablica ma wewnętrzny wskaźnik do swojego "bieżącego" elementu, który jest inicjowany do pierwszego elementu wstawionego do tablicy.

Ważne! Ta Funkcja nie przesuwa wewnętrznego wskaźnika tablic. 
Przykład:
```php
$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>";
```
Kod źródłowy: [funkcje-current.php](funkcje-current.php)

### next

Funkcja `next()` przenosi wewnętrzny wskaźnik do następnego elementu tablicy i wyświetla jego zawartość.  
Przykład: 
``` php
<?php
$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>";
echo next($people);
?>
```
Kod źródłowy: [funkcje-next.php](funkcje-next.php)

Źródło: [w3schools.com](https://www.w3schools.com/php/func_array_count.asp)

### reset

Podczas przeglądania zawartości tablicy przy użyciu konstrukcji `foreach ... as` wewnętrzny wskaźnik PHP jest automatycznie ustawiany na kolejnym elemencie tablicy do zwrócenia. Jeśli w jakiejś sytuacji będziesz chciał wrócić na początek tablicy, możesz użyć funkcji `reset`, która zarazem zwraca wartość jej pierwszego elementu. Oto przykład użycia tej funkcji:  
``` php
<?php
$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>";
echo next($people) . "<br>";

echo reset($people);
?>
```
Kod źródłowy: [funkcje-reset.php](funkcja-reset.php)

Źródło: [Książka "PHP, MySQL i JavaScript", Wydawnictwo: Helion](https://helion.pl/ksiazki/php-mysql-i-javascript-wprowadzenie-wydanie-v-robin-nixon,phmyj5.htm#format/e)

### array_push

`array_push()` traktuje tablicę jako stos i odkłada przekazane zmienne na koniec tablicy. Długość tablicy zwiększa się o liczbę wypchniętych zmiennych.
``` php
<?php
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
?>
```
Kod źródłowy: [funkcje-push.php](funkcje-push.php)

Wynik działania programu:
``` text
Array
(
    [0] => orange
    [1] => banana
    [2] => apple
    [3] => raspberry
)
```

Źródło: [php.net](https://www.php.net/manual/en/function.array-push.php)

### array_pop

`array_pop()` wyrzuca i zwraca wartość ostatniego elementu tablicy, skracając tablicę o jeden element.
```php
<?php
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($stack);
?>
```
Kod źródłowy: [funkcje-pop.php](funkcje-pop.php)

Wynik działania programu:
``` text
Array
(
    [0] => orange
    [1] => banana
    [2] => apple
)
```

Źródło: [php.net](https://www.php.net/manual/en/function.array-pop.php)

---

## Zadania 
1. Rozgrzewka
-  Stworzyć tablicę składającą się z 10 liczb z przedziału od 0 do 99 oraz zmienną przechowującą zdanie składające się z minimum 5 wyrazów. Następnie wyświetlić stworzoną tablice oraz utworzone zdanie.
-  Zmienną typu `string` zapisać w `tablicy` zapisując wyrazy w kolejnych elementach tablicy.
- Wyświetlić ilość elementów w oby dwóch tablic. 
- Posortować tablice. Tablice zawierająca liczby, rosnąco a tablicę zawierającą wyrazy, alfabetycznie. Wyświetlić oby dwie tablice. Następnie posortować oby dwie tablice w odwrotnej kolejności, tablicę z liczbami od największej liczby do najmniejszej a tablicę z wyrazami od alfabetycznie od końca oraz wyświetlić oby dwie tablice. 
- Przetasować elementy dwóch tablic oraz wyświetlić rezultat.
- Wykorzystując funkcję `current()` wyświetlić zerowy element tablicy, następnie z wykorzystaniem funkcji przejść dwa elementy do przodu oraz wykorzystując funkcję `current()` wyświetlić element w której się znajduje wskaźnik. Na koniec wrócić do początku tablicy i wyświetlić dany element.
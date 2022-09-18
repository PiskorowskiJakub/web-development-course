# web-development-course

`Jakub Piskorowski on 18/09/2022 wersja: 1.0`

## Temat: Korzystanie z bazy MySQL za pośrednictwem PHP

Przedstawienie procesu nawiązywania połączenia oraz tworzenia zapytań do bazy MySQL za pośrednictwem PHP.

Pliki źródłowe:
- [login.php](login.php)
- [connmysql.php](connmysql.php)

---

## Objaśnienie

Zasadniczym powodem stosowania PHP jako interfejsu dla MySQL jest możliwość sformatowania wyników zwróconych przez zapytania SQL w sposób pozwalający na wyświetlenie ich na stronie internetowej. 

### Proces

Proces komunikacji z MySQL za pomocą PHP wygląda tak:
1. Nawiązywanie połączenia z MySQL i wybór bazy danych.
2. Utworzenie zapytania.
3. Wykonanie zapytania.
4. Pozyskanie rezultatów i wyświetlenie ich na stronie internetowej.
5. Powtórzenie kroków od 2 do 4 aż do uzyskania wszystkich potrzebnych danych.
6. Rozłączenie z MySQL 

### Nawiązywanie połączenia z MySQL

Większość stron internetowych napisanych w PHP składa się z wielu skryptów wymagających dostępu do MySQL, a tym samym loginu oraz hasła. Mając to na uwadze, dobrze jest utworzyć osobny plik zawierający te informacje i dołączyć go do plików strony za każdym razem, gdy będzie to konieczne. Przykład takiego pliku nazwany `login.php`. 

``` php
<?php
    $hn = 'localhost'; // Nazwa hosta
    $db = 'publications'; // Nazwa bazy danych
    $un = 'root'; // Nazwa użytkownika
    $pw = ''; // Hasło 
?>
```

Plik źródłowy: [login.php](login.php)

Znaczniki `<?php` oraz `?>` są bardzo ważne zwłaszcza w przypadku pliku `login.php` przedstawionego powyżej, bo wiersze pomiędzy nimi mogą być zinterpretowane wyłącznie jako kod PHP. Jeśli byś je pominął, a ktoś odwołał by się do tego pliku bezpośrednio na twojej stronie internetowej, to zostałby on po po prostu wyświetlony w przeglądarce i zdradził twoje dane. Dzięki zastosowaniu znaczników, intruz zobaczy tylko pusta stronę.  

Po zapisaniu pliku `login.php` można go dołączyć za pomocą dyrektywy `require_once` do dowolnego pliku z kodem PHP, który będzie wymagał dostępu do bazy danych. Takie rozwiązanie jest o tyle lepsze od użycia instrukcji `include`, że nieodnalezienie pliku z danymi logowania spowoduje wyświetlenie komunikatu o krytycznym błędzie. 

Ponadto zastosowanie dyrektywy `require_once`zamiast `require` oznacza, że plik zostanie wczytany tylko wtedy, jeśli nie został on dołączony już wcześniej, co pozwala zapobiec marnowaniu zasobów na niepotrzebne odwołania do dysku twardego. 

``` php
<?php
    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if($conn ->connect_error) die($conn->connect_error);
?>
```

W tym przykładzie został utworzony nowy obiekt o nazwie `$conn` poprzez wywołanie metody `mysqli`, do której zostały przekazane argumenty zaczerpnięte z pliku `login.php`. Za obsługę błędów odpowiada odwołanie do właściwości `$conn->connect_error`.

Operator `->` oznacza, że element po jego prawej stronie jest właściwością albo metodą obiektu znajdującego się po stronie lewej. Gdyby w tym przypadku właściwość `connect_error` miała jakąś wartość, oznaczałoby to wystąpienie błędów. Wywołujemy więc funkcję `die`, która wyświetli tę wartość, zawiera ona informacje o napotkanym błędzie.

### Konstruowanie i wykonywanie zapytania

Aby wysłać zapytanie do MySQL przy użyciu PHP, wystarczy użyć metody `query` obiektu połączenia.

```php
<?php
    $query = "SELECT * FROM classics";
    $result = $conn->query($query);
    if(!$result) die($conn->error);
?>
```

W tym przypadku zmiennej `$query` został przypisany łańcuch tekstowy zawierający zapytanie do wykonania. Zmienna ta została następnie przekazana do metody `query` obiektu `$conn`. Z kolei metoda ta zwraca rezultat, który trafia do obiektu `$result`. Jeśli wartość `$result` wynosi `FALSE`, to znaczy, że wystąpił jakiś błąd, którego opis został zapisany we właściwości `error` obiektu połączenia. W takim przypadku wywołana zostaje funkcja `die`, która ten błąd wyświetli.

Wszystkie dane zwrócone przez MySQL trafią do obiektu `$result` w postaci, w której można je łatwo przetwarzać. 

### Pobieranie rezultatu

Po zwróceniu rezultatu do obiektu `$result` możesz pobrać z niego potrzebne dane po kolei przy użyciu metody `fetch_assoc` tego obiektu. Przykład poniżej stanowi połączenie i rozszerzenie dotychczasowych przykładów. Jest to już kompletny program, który można przepisać i uruchomić, aby pozyskać z bazy potrzebne dane.

``` php
<?php
     require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if($conn ->connect_error) die($conn->connect_error);

     $query = "SELECT * FROM classics";
    $result = $conn->query($query);
    if(!$result) die($conn->error);

    $rows = $result->num_rows;
    for($j =0; $j < $rows; ++$j)
    {
        $result->data_seek($j);
        echo 'Autor: ' .$result->fetch_assoc()['Autor'] .'<br>';
        $result->data_seek($j);
        echo 'Tytuł: ' .$result->fetch_assoc()['Tytul'] .'<br>';
        $result->data_seek($j);
        echo 'Rok: ' .$result->fetch_assoc()['Rok'] .'<br>';
    }

    $result -> close();
    $conn -> close();
?>
```

W opisanym przykładzie w celu odwołania się do odpowiedniego wiersza danych przy każdej iteracji pętli użyliśmy metody `data_seek` obiektu `$result`. Następnie wykorzystaliśmy metodę `fetch_assoc` do pobrania wartości przechowywanych w poszczególnych komórkach i wreszcie wartości te wyświetliliśmy przy użyciu instrukcji `echo`. 

Istnieje jednak bardziej skuteczniejsza metoda na osiągnięcie podobnego efektu. Polega on na pobieraniu całych wierszy danych naraz. 

### Pobieranie wiersza danych

Aby pobrać cały wiersza na raz należy zastąpić pętlę `for` z przykładu powyżej na taką, która została przedstawiona poniżej. Po wykonaniu tej zmiany powinieneś uzyskać ten sam efekt. 

``` php
<?php
     require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if($conn ->connect_error) die($conn->connect_error);

     $query = "SELECT * FROM classics";
    $result = $conn->query($query);
    if(!$result) die($conn->error);

    $rows = $result->num_rows;
    for($j =0; $j < $rows; ++$j)
    {
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        echo 'Autor: ' .$row['Autor'] .'<br>';
        echo 'Tytuł: ' .$row['Tytul'] .'<br>';
        echo 'Rok: ' .$row['Rok'] .'<br><br>';
    }
    $result -> close();
    $conn -> close();
?>
```

Plik źródłowy: [connmysql.php](connmysql.php)

W tak zmodyfikowanym przykładzie mamy do czynienia z trzykrotnie mniejszą liczbą odwołań do obiektu `$result` (w porównaniu z poprzednim kodem), a w ramach każdej iteracji pętli  następuje tylko jedno odwołanie, ponieważ przy użyciu metody `fetch_array` są pobierane całe wiersze kodu. metoda ta zwraca cały wiersz danych w postaci tablicy, która w naszym programie jest następnie przypisywana do zmiennej `$row`. 

Zależnie od przekazanych do niej wartości metoda `fetch_array` może zwrócić trzy rodzaje tablic:

- **MYSQLI_NUM** - Tablica numeryczna. Poszczególne kolumny pojawiają się w tablicy zgodnie z kolejnością, w jakiej zostały utworzone w tabeli. 
- **MYSQLI_ASSOC** - Tablica asocjacyjna. Każdy klucz stanowi nazwę kolumny. Ponieważ w tym przypadku do danych trzeba się odwołać za pośrednictwem nazwy kolumny (a nie numeru indeksu), warto skorzystać z tego wariantu zawsze gdy to możliwe, aby ułatwić sobie debugowanie programu, a innym programistom interpretację kodu.

Tablice asocjacyjne są zwykle bardziej praktyczne od numerycznych, gdyż umożliwiają odwoływanie się  do kolumn za pomocą nazw, na przykład `$row['Autor']`, dzięki czemu nie trzeba zapamiętywać, na którym miejscu w tabeli znajduje sie potrzebna kolumna. 

### Zamykanie połączenia

Po zakończeniu wykonywania skryptu PHP zwolni pamięć zaalokowaną na potrzeby obiektów, więc w przypadku niewielkich programów na ogół nie trzeba sie troszczyć o samodzielne zarządzanie pamięcią. Jednak w przypadku większej liczby rezultatów, albo dużych porcji danych dobrze jest zwolnić pamięć, której program już nie potrzebuje, aby uniknąć problemów z dalszym działaniem. 

Jest to szczególnie istotne na często odwiedzanych stronach, gdyż ilość pamięci zajmowanej w trakcie sesji może raptownie rosnąć. Zwróć uwagę na metody `close` dla obiektów `$result` oraz `$conn`, które w poprzednich skryptach były wywoływane w sytuacji, gdy dany obiekt przestał już byc potrzebny. 

```php
    $result->close();
    $conn->close();
```

Źródło: [Książka "PHP, MySQL i JavaScript", Wydawnictwo: Helion](https://helion.pl/ksiazki/php-mysql-i-javascript-wprowadzenie-wydanie-v-robin-nixon,phmyj5.htm#format/e)


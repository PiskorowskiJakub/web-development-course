# web-development-course

`Jakub Piskorowski on 19/10/2022 wersja: 1.0`

## Temat: Sesje i ciasteczka

Przedstawienie działania sesji i ciasteczek w języku PHP
---

## Objaśnienie

### Sesja w PHP

Sesja to sposób przechowywania informacji (w zmiennych), które mają być używane na wielu stronach.

W przeciwieństwie do plików cookie informacje nie są przechowywane na komputerze użytkownika.

### Co to jest sesja?

Kiedy pracujesz z aplikacją, otwierasz ją, wprowadzasz zmiany, a następnie ją zamykasz. To jest sesja. Komputer wie, kim jesteś. Wie, kiedy uruchamiasz aplikację, oraz kiedy kończysz. Ale w internecie jest jeden problem: serwer WWW nie wie kim jesteś ani czym się zajmujesz, ponieważ adres HTTP nie utrzymuje stanu.

Zmienne sesji rozwiązują ten problem, przechowując informacje o użytkowniku, które mają być używane na wielu stronach (np. nazwa użytkownika, ulubiony kolor itp.). **Domyślnie zmienne sesji trwają do momentu zamknięcia przeglądarki przez użytkownika.**

Więc, zmienne sesji przechowują informacje o jednym pojedynczym użytkowniku, i są dostępne dla wszystkich stron w jednej aplikacji.

### Rozpoczęcie sesji
Sesja jest uruchamiana funkcją `session_start()`.

Zmienne sesji są ustawiane za pomocą globalnej zmiennej PHP: `$_SESSION`.

Teraz utwórzmy nową stronę o nazwie "start-sesji.php". Na tej stronie rozpoczynamy nową sesję PHP i ustawiamy kilka zmiennych sesji. 
Przykład:
``` php
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>
</html>
```
Kod źródłowy: [start-sesji.php](start-sesji.php)

Uwaga: Funkcja `session_start()` musi być pierwszą rzeczą w twoim dokumencie. Przed wszelkimi tagami HTML.

### Pobranie wartości zmiennych z sesji

Następnie tworzymy kolejną stronę o nazwie "`zmienna-sesji.php`". Z tej strony uzyskamy dostęp do informacji o sesji, które ustawiliśmy na pierwszej stronie ("`start-sesji.php`").

Zauważ, że zmienne sesji nie są przekazywane indywidualnie do każdej nowej strony, zamiast tego są pobierane z sesji, którą otwieramy na początku każdej strony (`session_start()`).
Zauważ również, że wszystkie wartości zmiennych sesji są przechowywane w globalnej zmiennej `$_SESSION`.

Przykład:
``` php 
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

</body>
</html>
```
Kod źródłowy: [zmienna-sesji.php](zmienna-sesji.php)

#### Jak to działa? Skąd wie, że to ja?

Większość sesji ustawia klucz użytkownika na komputerze użytkownika, który wygląda mniej więcej tak: **765487cf34ert8dede5a562e4f3a7e12**. Następnie, gdy sesja jest otwierana na innej stronie, skanuje komputer w poszukiwaniu klucza użytkownika. Jeśli jest dopasowanie, uzyskuje dostęp do tej sesji, jeśli nie, rozpoczyna nową sesję.

### Modyfikacja zmiennej sesji

Aby zmienić zmienną sesji, po prostu ją nadpisz:
``` php
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>

</body>
</html>
```

### Zniszczenie sesji

Aby usunąć wszystkie globalne zmienne sesji i zniszczyć sesję, użyj `session_unset()` i `session_destroy()`.
``` php
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

</body>
</html>
```
Kod źródłowy: [zniszczenie-sesji.php](zniszczenie-sesji.php)

Źródło: [w3schools.com](https://www.w3schools.com/php/php_sessions.asp)

---

### Co to jest plik cookie?

Plik cookie jest często używany do identyfikacji użytkownika. Cookie to mały plik, który serwer osadza na komputerze użytkownika. Za każdym razem, gdy ten sam komputer zażąda strony z przeglądarką, wyśle ​​również plik cookie. Dzięki PHP możesz zarówno tworzyć, jak i pobierać wartości plików cookie.

### Tworzenie plików cookie

Plik cookie jest tworzony za pomocą funkcji `setcookie()`.

Składnia:
``` text
setcookie(nazwa ciasteczka, wartość, wygaśnięcie, ścieżka, domena, zabezpieczenie, tylko http);
```

Wymagany jest tylko parametr `name`. **Wszystkie inne parametry są opcjonalne**.

### Utwórz/pobierz plik cookie

Poniższy przykład tworzy plik cookie o nazwie "`user`" o wartości "`John Doe`". Plik cookie wygaśnie `po 30 dniach` (86400 * 30). "`/`" oznacza, że ​​plik cookie jest dostępny w całej witrynie (w przeciwnym razie wybierz preferowany katalog).

Następnie pobieramy wartość cookie "`user`" (używając zmiennej globalnej `$_COOKIE`). Używamy również funkcji `isset()`, aby dowiedzieć się, czy plik cookie jest ustawiony:
``` php
<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>
```
Kod źródłowy: [start-cookie.php](start-cookie.php)

**Uwaga:** Funkcja `setcookie()` musi pojawić się **PRZED** znacznikiem `<html>`.

**Uwaga:** wartość cookie jest automatycznie kodowana przez URL podczas wysyłania cookie i automatycznie dekodowana po odebraniu (aby zapobiec kodowaniu URL, użyj zamiast tego metody `setrawcookie()`).

### Modyfikacja zawartości pliku cookie

Aby zmodyfikować plik cookie, po prostu ustaw (ponownie) plik cookie za pomocą funkcji `setcookie()`:
``` php
<?php
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>
```
Kod źródłowy: [zmiana-cookie.php](zmiana-cookie.php)

### Usunięcie pliku cookie

Aby usunąć plik cookie, użyj funkcji `setcookie()` z datą wygaśnięcia w **przeszłości**:
``` php
<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>

</body>
</html>
```
Kod źródłowy: [zniszczenie-cookie.php](zniszczenie-cookie.php)

### Sprawdzenie, czy pliki cookie są włączone

Poniższy przykład tworzy mały skrypt, który sprawdza, czy włączone są pliki cookie. Najpierw spróbuj utworzyć testowe ciasteczko za pomocą funkcji `setcookie()`, a następnie policz zmienną tablicową `$_COOKIE`:
``` php
<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

<?php
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
?>

</body>
</html>
```
Kod źródłowy: [sprawdzenie-cookie.php](sprawdzenie-cookie.php)

Źródło: [w3schools.com](https://www.w3schools.com/php/php_cookies.asp)

---

## Zadania

1. Stwórz dwa pliki źródłowe. W jednym stworzysz dwie zmienne, jedna z wartością liczbową a druga z wyrazem. Następnie zapiszesz te wartości w `sesji`. Kolejnym krokiem jest stworzenie drugiego pliku, który wyświetli nam zawartość tych zmiennych pobranej z sesji oraz przycisk do usuwania sesji.
2. Zrobić to samo co w zad 1 z tą różnicą że wykorzystać tym razem ciasteczka(`cookie`).

3. Stworzyć formularz logowania na stronę z polami do wprowadzenia loginu oraz hasła. Hasło zaszyfrować metodą `sha1()`oraz zapisać dwie wartości w `sesji`. Następnie utworzyć drugi plik z panelem użytkownika i wyświetlić jego login oraz zaszyfrowane hasło.
4. Zrealizować to samo co w zadaniu 3 z tą różnicą aby użyć ciasteczka(`cookie`).
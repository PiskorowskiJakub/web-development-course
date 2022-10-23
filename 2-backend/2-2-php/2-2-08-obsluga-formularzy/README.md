# web-development-course

`Jakub Piskorowski on 29/09/2022 wersja: 1.0`

## Temat: Obsługa formularzy

Przedstawienie obsługi formularzy w języku PHP.

Pliki źródłowe:
- [formularz-text.php](formularz-text.php)
- [formularz-number.php](formularz-number.php)
- [formularz-radio.php](formularz-radio.php)
- [formularz-select.php](formularz-select.php)
- [formularz-checkbox.php](formularz-checkbox.php)
- [formularz-textarea.php](formularz-textarea.php)

---

## Objaśnienie

### Co to jest HTTP?

Protokół Hypertext Transfer Protocol (HTTP) został zaprojektowany w celu umożliwienia komunikacji między klientami a serwerami.

HTTP działa jako protokół żądanie-odpowiedź między klientem a serwerem.

Przykład: Klient (przeglądarka) wysyła żądanie HTTP do serwera; następnie serwer zwraca odpowiedź do klienta.
Odpowiedź zawiera informacje o stanie żądania i może również zawierać żądaną treść.

Metody HTTP
- GET
- POST
- PUT
- HEAD
- DELETE
- PATCH
- OPTIONS
- CONNECT
- TRACE

Dwie najpopularniejsze metody HTTP to: GET i POST.

### Metoda GET

`GET` służy do żądania danych z określonego zasobu.

Zwróć uwagę, że ciąg zapytania (pary `nazwa/wartość`) jest wysyłany w adresie `URL` żądania GET:
``` text
/test/demo_form.php?name1=value1&name2=value2
```

Kilka uwag na temat żądań `GET`:

- Żądania GET mogą być buforowane
- Żądania GET pozostają w historii przeglądarki
- Żądania GET można dodać do zakładek
- Żądania GET nigdy nie powinny być używane w przypadku wrażliwych danych
- Żądania GET mają ograniczenia długości
- Żądania GET służą tylko do żądania danych (nie do modyfikacji)

### Metoda POST

`POST` służy do wysyłania danych do serwera w celu utworzenia/aktualizacji zasobu.

Dane wysyłane do serwera za pomocą `POST` zapisywane są w treści żądania HTTP:
``` text
POST /test/demo_form.php HTTP/1.1
Host: w3schools.com

name1=value1&name2=value2
```

Kilka uwag na temat żądań `POST`:

- Żądania POST nigdy nie są buforowane
- Żądania POST nie pozostają w historii przeglądarki
- Żądań POST nie można dodać do zakładek
- Żądania POST nie mają ograniczeń co do długości danych

Źródło: [w3schools.com](https://www.w3schools.com/tags/ref_httpmethods.asp)

--- 

### Rodzaje pól

Wszystkie przedstawione poniżej formularze są przesyłane metodą `POST`. Jeżeli chcemy to samo zrobić metodą `GET`, jedyne co musimy zrobić to zamienić `POST` na `GET`.

Dane przesłane metodą POST przechowywane są w tablicy `$_POST`. Zapisane tam w komórkach, których indeksem jest wartość atrybutu name pola przesyłanego przez formularz. I tak, jeśli przesyłamy pole formularza o atrybucie `name="reksio"`, dostępne to będzie w tablicy POST pod adresem: `$_POST["reksio"]`. Analogicznie, jeśli przesyłamy to samo pole metodą GET, wartość dostępna będzie w tablicy `$_GET` pod adresem `$_GET["reksio"]`.

### Pole tekstowe (input type="text")

Dla przykładu, pole tekstowe ma postać: 
``` HTML
<input type="text" name="imie" />
```

Formularz przesyłany jest metodą POST, więc wartość – to co wpisał w to pole użytkownik, będzie dostępne w:

``` PHP
$_POST['imie']
```

Aby wyświetlić wartość przesłanej informacji użyjemy kodu:

``` PHP
echo $_POST['imie'];
```
Celem choćby podstawowego zabezpieczenia danych przesyłanych przez użytkownika wykorzystać możemy jedną z funkcji PHP do filtrowania znaków: `htmlspecialchars()` bądź `strip_tags()`. Pierwsza z nich koduje znaki specjalne, druga natomiast usuwa z kodu znaczniki HTML.
``` PHP
echo "Cześć " . htmlspecialchars($_POST['imie']) . ". ";
```

To, że formularz został przesłany, nie oznacza, że został w pełni wypełniony. W przypadku, jeśli użytkownik nie podał imienia, w momencie użycia `$_POST['imie']` zostanie wypisany błąd, że **taka zmienna nie istnieje**.

Aby temu zapobiec wykorzystamy funkcję `isset()`, sprawdzającą, czy wartość danej zmiennej została ustawiona:
``` PHP
if(isset($_POST['imie'])){
    echo "Cześć " . htmlspecialchars($_POST['imie']) . ". ";
}else{
    echo "Cześć nieznajomy.";
}
```
Kod źródłowy: [formularz-text.php](formularz-text.php)


### Pole number

Pole number jest to również pole tekstowe o wartościach ograniczonych do liczb całkowitych, z dwoma przyciskami strzałek, do klikalnego zwiększania bądź zmniejszania zawartej w nim wartości. Jego obsługa od strony PHP jest identyczna jak w przypadku zwykłego pola tekstowego.
``` HTML
<input type="number" name="wiek" />
```

Wykorzystajmy natomiast operator rzutowania typu, aby zapewnić, że to co przyszło poprzez pole formularza, to rzeczywiście liczba całkowita:
``` PHP
(int)$_POST['wiek'];
```

Żeby na tym nie zakończyć, wypiszmy podany przez użytkownika wiek w postaci zdania: Masz X lata.
``` PHP
if(isset($_POST['wiek'])){
    echo "Masz " . (int)$_POST['wiek'] . " lata.";
}
```
Kod Źródłowy: [formularz-number.php](formularz-number.php)

### Radio (input type="radio")

Kolejnym elementem formularza są radio buttony. Grupa elementów, z której możliwy do zaznaczenia jest tylko jeden.
``` HTML
<p>Płeć:</p>
<p><input type="radio" name="plec" value="m" />Mężczyzna</p>
<p><input type="radio" name="plec" value="k" />Kobieta</p>
```

Wykorzystamy opisywaną już wcześniej funkcję `isset()` oraz za pomocą instrukcji warunkowej `if` sprawdzimy, którą z możliwych ma przesłana wartość płci: m czy k.
``` PHP
if(isset($_POST['plec'])){
    if($_POST['plec'] == 'm') echo "Wybrana płeć: Mężczyzna";
    else echo "Wybrana płeć: Kobieta";
}
```
Kod źródłowy: [formularz-radio.php](formularz-radio.php)

### Lista rozwijana (select)

Kolejnym elementem naszego formularza jest lista rozwijana. Ma ona przypisaną, w znaczniku `select` ogólną nazwę (`name`) przesyłanej zmiennej, natomiast jej wartości zawarte są w atrybutach `value` znaczników `option`.
``` HTML
<select name="kolor">
    <option value="czerwony">Czerwony</option>
    <option value="zielony">Zielony</option>
    <option value="niebieski">Niebieski</option>
</select>
```

Odebranie wartości odbywa się w sposób analogiczny do przedstawionych powyżej – poprzez pobranie przesłanej wartości z odpowiedniej komórki tablicy `$_POST`:
``` PHP
if(isset($_POST['kolor'])){
    echo "Wybrany kolor: " . $_POST['kolor'];
}
```
Kod źródłowy: [formularz-select.php](formularz-select.php)

### Pole wyboru (checkbox)

Kolejny na tej liście checkbox umożliwia wybranie większej ilości opcji. W naszym przypadku do wyboru są serie gier:
``` HTML
<p>Ulubiona seria gier:</p>
<p><input type="checkbox" name="gry1" value=1 />GTA</p>
<p><input type="checkbox" name="gry2" value=1 />FIFA</p>
<p><input type="checkbox" name="gry3" value=1 />Battlefield</p>
<p><input type="checkbox" name="gry4" value=1 />Settlers</p>
<p><input type="checkbox" name="gry5" value=1 />Call of duty</p>
<p><input type="checkbox" name="gry6" value=1 />Need For Speed</p>
<p><input type="checkbox" name="gry7" value=1 />Tony Hawk`s</p>
```
W powyższym przykładzie każde pole checkbox ma własną indywidualną nazwę. Aby sprawdzić, czy dane pole jest zaznaczone, sprawdzamy każdą przesłaną wartość po kolei:
``` PHP
if(isset($_POST['gry1']) && $_POST['gry1'] == 1) echo "Wybrano GTA";
if(isset($_POST['gry2']) && $_POST['gry2'] == 1) echo "Wybrano FIFA";
```
… i tak dalej. 

Możemy również stworzyć grupę checkboxów. Musimy wówczas nieco zmodyfikować nasz kod HTML, przypisując jako nazwę poszczególnych checkboxów tablicę oraz przypisując każdej opcji indywidualną wartość atrybutu value:
``` HTML
<p>Ulubiona seria gier:</p>
<p><input type="checkbox" name="gry[]" value="GTA" />GTA</p>
<p><input type="checkbox" name="gry[]" value="FIFA" />FIFA</p>
<p><input type="checkbox" name="gry[]" value="Battlefield" />Battlefield</p>
<p><input type="checkbox" name="gry[]" value="Settlers" />Settlers</p>
<p><input type="checkbox" name="gry[]" value="Call of duty" />Call of duty</p>
<p><input type="checkbox" name="gry[]" value="Need For Speed" />Need For Speed</p>
<p><input type="checkbox" name="gry[]" value="Tony Hawk`s" />Tony Hawk`s</p>
```
W ten sposób w komórce tablicy `$_POST['gry']` zapisaną będziemy mieli tablicę ze wszystkimi zaznaczonymi wartościami (value). Wykorzystajmy pętlę for i wypiszmy je na ekran jedną pod drugą:
``` PHP
if(isset($_POST['gry'])){
    for($i=0; $i<count($_POST['gry']); $i++){
        echo $_POST['gry'][$i] . "<br />";
    }
}else{
    echo "Nie wybrano ani jednej serii gier :(";
}
```
Kod źródłowy: [formularz-checkbox.php](formularz-checkbox.php)

### Textarea

Na koniec proste odebranie informacji zapisanej w polu textarea. Dla przykładu w treści wykorzystane znaczniki HTML:
``` HTML
<textarea name='opis'>Treść <b>pogrubiona</b> i zwykła.</textarea>
```
``` PHP
if(isset($_POST['opis'])){
    echo $_POST['opis'];
}
```
Kod Źródłowy: [formularz-textarea.php](formularz-textarea.php)


Źródło: [technikprogramista.pl](https://technikprogramista.pl/kurs/php/lekcja/php-formularze/)

---

### Dołączanie plików z pomocą metody $_GET 

Za pomocą metody `$_GET`, która umożliwia między innymi pobranie wartości z adresu URL jesteśmy w stanie określić, który plik zostanie otworzony. 

Aby pobrać z adresu strony zawartość zmiennej, należy ja najpierw zadeklarować w kodzie html w następujący sposób:
``` html
<a href="text.php?page=main"> Strona główna </a>
```

Słowo kluczowe `page` jest naszą zmienną, natomiast `main` jest przypisaną wartością tej zmiennej. Aby pobrać zawartość tej zmiennej musimy użyć metody `$_GET` i odwołać się do nazwy zmiennej w następujący sposób:
``` php
$_GET["page"];
```

Aby dołączyć plik na stronie należy użyć metody `include()` oraz jako parametr przekazać nazwę pliku wraz z rozszerzeniem. Aby dołączyć rozszerzenie wystarczy do naszej zmiennej dołączyć ciąg znaków `.php`. W najprostszym przypadku mogło by wyglądać w następujący sposób:
``` php
<?php
include($_GET["page"].".php")
?>
```

Pełny kod źródłowy: [dolaczanie.php](dolaczanie.php)

---

## Zadania
1. Utwórz formularz logowania użytkownika, ma zawierać pola: login(`text`), hasło (`password`), checkbox z etykietą "Zapamiętaj mnie", przycisk do przesłania formularza. \
Po przesłaniu formularza:
- wyświetlisz na ekranie przesłany przez użytkownika login "Login: ..."
- zakodujesz za pomocą funkcji `sha1()` hasło użytkownika i wypiszesz je w takim formacie: "hasło: ..."
- wypiszesz na ekranie zdanie informacyjne, czy pole checkbox zostało zaznaczone. 

2. Utworzysz formularz służący do wpisania komentarza. Formularz ma zawierać pola: Pseudonim (`text`), Komentarz (`textarea`)(można używać znaczników html) \
Wyświetl w kolejnych paragrafach pseudonim oraz dwa razy komentarz. Komentarz wyświetl kolejno w wersji z wykonanym kodem html (np. tekst w znacznikach ma być pogrubiony) oraz w pełni tekstowo (ze znacznikami html w postaci tekstu)

3. Utwórz ankietę składającą się z 3 pytań. Pierwsze ma zawierać do wyboru `listę rozwijaną` zawierającą minimum 3 opcje, drugie zawierające minimum 3 pola typu `radio` oraz trzecie z minimum trzema polami `checkbox`. Po wysłaniu formularza wyświetl poniżej wszystkie wybrane opcje.


4. Utwórz formularz pobierający od użytkownika Imię (`text`), nazwisko (`text`), oraz wybór płci (`radio`). Wyświetlić przywitanie użytkownika w zależności od wybranej płci w formie: **Witam Pana Adama** lub **Witam Panią Karolinę**.

5. Stwórz formularz określający poziom zaawansowania w danej grze. W każdej grze potrzeba inna ilość godzin aby poznać wszystkie jej aspekty. Dodać listę rozwijaną (`select option`), w której wybierzemy sobie grę oraz pole do wpisania ilości godzin (`number`). W rezultacie powinno zwrócić informację jak dobry jesteś w danej grze na podstawie. Poniżej przykładowa tabela ilustrująca warunki:

| Minecraft  | |
| ------------- | ------------- |
| < 100 h  | Jesteś początkujący  |
| > 100 h  | Poznałeś już grę |

| Terraria  | |
| ------------- | ------------- |
| < 500 h  | Jesteś początkujący  |
| > 500 h  | Poznałeś już grę |

| CSGO  | |
| ------------- | ------------- |
| < 1000 h  | Jesteś początkujący  |
| > 1000 h  | Poznałeś już grę |




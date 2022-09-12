# web-development-course

`Jakub Piskorowski on 12/09/2022 wersja: 1.0`

## Temat: Charakterystyka języka JavaScript

Charakterystyka języka JavaScript w dokumentach HTML.

Pliki źródłowe: [index.html](index.html)

---

## Objaśnienie

JavaScript jest językiem skryptowym działającym po stronie klienta, całkowicie w obrębie przeglądarki WWW. Aby z niego skorzystać należy umieścić kod między znacznikami `<script>` i `</script>` w dokumencie HTML. 

Dokument HTML wyświetlający napis "Hello world" i napisany przy użyciu JavaScript mógłby wyglądać następująco:

``` JavaScript
<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
        <script type="text/javascript">
            document.write("Hello World!")
        </script>
    </body>
</html>
```

Plik źródłowy: [index.html](index.html)

Między znacznikami `<script>` znajduje się jedna instrukcja JavaScript, `document.write`, która powoduje umieszczenie podanego ciągu znaków w bieżącym dokumencie, gdzie zostaje on wyświetlony.

Być może zwróciłeś uwagę na fakt, że wspomniana linia kodu nie kończy się średnikiem (`;`). Dzieje się tak dlatego, że funkcję średnika w JavaScripcie pełni znak nowego wiersza. Jeśli jednak chciałbys umieścić w jednaj linii kilka instrukcji, musisz je zakończyć średnikiem, z wyjątkiem ostatniej. Oczywiście nic nie stoi na przeszkodzie, by umieszczać średnik na końcu każdej instrukcji javaScript.

**Zastosowanie skryptów w nagłówku dokumentu** \
Skrypty można umieszczac nie tylko w ciele dokumentu, ale także w sekcji `<head>`, co jest znakomitym pomysłem, jeśli mają one zostać wykonane w chwili otwarcia strony.

### Dołączanie plików JavaScript

Oprócz pisania kodu javaScript bezpośrednio w dokumentach HTML można tworzyć go w osobnych plikach. Takie pliki da się dołączyć do dokumentów HTML niezależnie od tego, czy znajdują się w obrębie tej samej strony WWW, czy pod dowolnym innym adresem. Składnia wygląda następująco:

``` JavaScript
<script type="text/javascript" src="script.js"></script>
```

Aby uzyc kodu znajdującego się pod dowolnym adresem możesz użyć poniższej instrukcji:

``` JavaScript
<script type="text/javascript" src="http://jakisserwer.com/script.js"> </script>
```

Jeśli chodzi o pliki ze skryptami, to **nie mogą** one zawierać znaczników `<script>`, bo są one zbędne, przeglądarka wie, że wczytany plik zawiera JavaScript

### Zastosowanie komentarzy

`PHP` i `JavaScript` są pod wieloma względami podobne z uwagi na wspólne korzenie w postaci języka `C`. Jednym z takich podobieństw jest składnia komentarzy. W JavaScripcie można stosować komentarze obejmujące jeden wiersz kodu: 
``` JavaScript
    // To jest komentarz
```

Mamy też do dyspozycji komentarze wielowierszowe:
``` JavaScript
/* To jest
    kilkuwierszowy
    komentarz
*/
```



Źródło: [Książka "PHP, MySQL i JavaScript", Wydawnictwo: Helion](https://helion.pl/ksiazki/php-mysql-i-javascript-wprowadzenie-wydanie-v-robin-nixon,phmyj5.htm#format/e)


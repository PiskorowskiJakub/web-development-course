# web-development-course

`Jakub Piskorowski on 09/03/2023 wersja: 1.0`

## Temat: Formatowanie tekstu i obrazów

Tworzenie nagłówków, podtytułów, paragrafów oraz wyrównanie tekstu. 

Pliki źródłowe:
- [naglowki.html](naglowki.html)
- [znacznik-pre.html](znacznik-pre.html)

---

## Nagłówki

Nagłówki HTML to tytuły lub napisy, które mają być wyświetlane na stronie internetowej.

Nagłówki HTML są definiowane za pomocą znaczników od `<h1>` do `<h6>`. `<h1>` określa najważniejszy nagłówek. `<h6>` określa najmniej ważny nagłówek.

Przykład: 
``` HTML
  <h1>Heading 1</h1>
  <h2>Heading 2</h2>
  <h3>Heading 3</h3>
  <h4>Heading 4</h4>
  <h5>Heading 5</h5>
  <h6>Heading 6</h6>
```
Plik źródłowy: [naglowki.html](naglowki.html)

### Nagłówki są ważne

Wyszukiwarki używają nagłówków do indeksowania struktury i zawartości stron internetowych. Użytkownicy często przeglądają stronę po nagłówkach.  
Ważne jest, aby używać nagłówków, aby pokazać strukturę dokumentu. Nagłówki `<h1>` powinny być używane jako nagłówki główne, następnie nagłówki `<h2>`, następnie mniej ważne `<h3>` i tak dalej.

**Uwaga:** Używaj nagłówków HTML tylko dla nagłówków. Nie używaj nagłówków, aby tekst był DUŻY lub pogrubiony.

## Akapity

Element `<p>` definiuje akapit. Akapit zawsze zaczyna się od nowego wiersza, a przeglądarki automatycznie dodają odstęp (margines) przed i po akapicie.

Przykład:
```HTML
<p>This is a paragraph.</p>
<p>This is another paragraph.</p>
```

## Wyświetlanie tekstu

Nie możesz być pewien, jak HTML zostanie wyświetlony. Duże lub małe ekrany i okna o zmienionych rozmiarach dadzą różne wyniki. W przypadku języka HTML nie można zmienić sposobu wyświetlania, dodając dodatkowe spacje lub wiersze w kodzie HTML. Przeglądarka automatycznie usunie dodatkowe spacje i linie podczas wyświetlania strony:
``` HTML
<p>
This paragraph
contains a lot of lines
in the source code,
but the browser
ignores it.
</p>

<p>
This paragraph
contains         a lot of spaces
in the source         code,
but the        browser
ignores it.
</p>
```

## Pozioma linia

Znacznik `<hr>` definiuje podział tematyczny na stronie HTML i jest najczęściej wyświetlany jako linia pozioma. Element `<hr>` służy do oddzielenia treści (lub zdefiniowania zmiany) na stronie HTML. 

``` HTML
<h1>This is heading 1</h1>
<p>This is some text.</p>
<hr>
<h2>This is heading 2</h2>
<p>This is some other text.</p>
<hr>
```

Znacznik `<hr>` jest znacznikiem pustym, co oznacza, że ​​nie ma znacznika końcowego.

## Podział lini 

Element HTML `<br>` definiuje podział wiersza. Użyj `<br>`, jeśli chcesz podzielić wiersz (nowy wiersz) bez rozpoczynania nowego akapitu:

``` HTML
<p>This is<br>a paragraph<br>with line breaks.</p>
```

Znacznik `<br>` jest znacznikiem pustym, co oznacza, że ​​nie ma znacznika końcowego.

### Problem wiersza 

Ten wiersz zostanie wyświetlony w jednym wierszu:
``` HTML
<p>
  My Bonnie lies over the ocean.

  My Bonnie lies over the sea.

  My Bonnie lies over the ocean.

  Oh, bring back my Bonnie to me.
</p>
```

## Rozwiązanie — element `<pre>`

Element HTML `<pre>` definiuje wstępnie sformatowany tekst.  
Tekst wewnątrz elementu `<pre>` jest wyświetlany czcionką o stałej szerokości (zwykle Courier) i zachowuje zarówno spacje, jak i podziały wierszy:

``` HTML
<pre>
  My Bonnie lies over the ocean.

  My Bonnie lies over the sea.

  My Bonnie lies over the ocean.

  Oh, bring back my Bonnie to me.
</pre>
```
Kod źródłowy: [znacznik-pre.html](znacznik-pre.html)


Źródło: [w3schools.com](https://w3schools.com/html)

--- 

## Zadania

1. Stwórz prostą stronę internetową zawierającą nagłówki o różnych poziomach oraz teksty z użyciem znaczników "p" i "pre" w języku HTML.

   - Wstaw nagłówek pierwszego poziomu (H1) z tekstem "Moja strona internetowa".
   - Wstaw nagłówek drugiego poziomu (H2) z tekstem "O mnie".
   - Wstaw akapit tekstu, opisujący kim jesteś, z użyciem znacznika "p".
   - Wstaw nagłówek drugiego poziomu (H2) z tekstem "Moje umiejętności".
   - Wstaw listę z umiejętnościami, używając nagłówków trzeciego poziomu (H3).
   - Wstaw nagłówek drugiego poziomu (H2) z tekstem "Moje hobby".
   - Wstaw akapit tekstu, opisujący Twoje zainteresowania, z użyciem znacznika "p".

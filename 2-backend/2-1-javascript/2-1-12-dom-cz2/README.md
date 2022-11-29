# web-development-course

`Jakub Piskorowski on 22/11/2022 wersja: 1.0`

## Temat: Wybrane pola i metody modelu DOM cz.2

Przedstawienie działania wybranych funkcji i metod modelu DOM

Pliki źródłowe: \
1 Zdarzenia myszy
- [onclick](onclick.html)
- [ondblclick](ondbclick.html)
- [onmouseover](onmouse.html)
- [onmouseout](onmouse.html)
  
2 Zdarzenia klawiatury
- [onkeydown](onkeydown.html)
- [onkeypress](onkeypress.html)
- [onkeyup](onkeyup.html)
  
3 Zdarzenia obiektów
- [onload](onload.html)
- [onresize](onresize.html)
- [onfocusin](onfocusin.html)
- [onfocusout](onfocusout.html)
  
4 Metody i pola obiektu string
- [length](length.html)
- [indexOf(text)](indexof.html)
- [search(text)](search.html)
- [substr(startIndex, endIndex)](substr.html)
- [replace(textToReplace, newText)](replace.html)
- [toUpperCase()](touppercase.html)
- [toLowerCase()](tolowercase.html)


---

## Spis treści
[1 Zdarzenia myszy](#1-zdarzenia-myszy) \
&emsp; [1-1 onclick](#1-1-onclick) \
&emsp; [1-2 ondblclick](#1-2-ondblclick) \
&emsp; [1-3 onmouseover](#1-3-onmouseover) \
&emsp; [1-4 onmouseout](#1-4-onmouseout) \
[2 Zdarzenia klawiatury](#2-zdarzenia-klawiatury) \
&emsp; [2-1 onkeydown](#2-1-onkeydown) \
&emsp; [2-2 onkeypress](#2-2-onkeypress) \
&emsp; [2-3 onkeyup](#2-3-onkeyup) \
[3 Zdarzenia obiektów](#3-zdarzenia-obiektów) \
&emsp; [3-1 onload](#3-1-onload) \
&emsp; [3-2 onresize](#3-2-onresize) \
&emsp; [3-3 onfocusin](#3-3-onfocusin) \
&emsp; [3-4 onfocusout](#3-4-onfocusout) \
[4 Metody i pola obiektu string](#4-metody-i-pola-obiektu-string) \
&emsp; [4-1 length](#4-1-length) \
&emsp; [4-2 indexOf(text)](#4-2-indexoftext) \
&emsp; [4-3 search(text)](#4-3-searchtext) \
&emsp; [4-4 substr(startIndex, endIndex)](#4-4-substrstartindex-endindex) \
&emsp; [4-5 replace(textToReplace, newText)](#4-5-replacetexttoreplace-newtext) \
&emsp; [4-6 toUpperCase()](#4-6-touppercase) \
&emsp; [4-7 toLowerCase()](#4-7-tolowercase)

---

## Objaśnienie

## 1 Zdarzenia myszy

- 1-1 onclick
- 1-2 ondblclick
- 1-3 onmouseover
- 1-4 onmouseout

### 1-1 onclick

Wykonanie funkcji w JavaScript po kliknięciu przycisku:
``` HTML
<button onclick ="myFunction()">Click me </button>
```

Kliknięcie w przycisk aby wyświetlić datę:
``` HTML
<button onclick="getElementById('demo').innerHTML = Date()">What is the time?</button>
```

Kliknięcie elementu `<h3>` aby zmienić kolor tekstu:
``` HTML
<h3 id="demo" onclick="myFunction()">Click me to change my color.</h3>

<script>
    function myFunction(){
        document.getElementById("demo").style.color = "red";
    }
</script>
```

Przykłady: [onclick.html](onclick.html)

Źródło: [w3schools.com](https://www.w3schools.com/jsref/event_onclick.asp)

### 1-2 ondblclick

Wykonanie JavaScript po dwukrotnym kliknięciu w element `<p>`:
``` HTML
    <p ondbclick="myFunction()">Double-click me</p>
```
Przykład: [ondbclick.html](ondbclick.html)

Źródło: [w3schools.com](https://www.w3schools.com/jsref/event_ondblclick.asp)

### 1-3 onmouseover

Wykonanie kodu JavaScript po przesunięciu wskaźnika myszy na obraz:
``` HTML
    <img onmouseover="bigImg(this)" src="smiley.gif" alt="Smiley">
```
Źródło: [w3schools.com](https://www.w3schools.com/jsref/event_onmouseover.asp)

### 1-4 onmouseout

Wykonanie kodu JavaScript po przesunięciu wskaźnika myszy poza obraz:
``` HTML
    <img onmouseout="normalImg(this)" src="smiley.gif" alt="Smiley">
```

Przykład: [onmouseout.html](onmouseout.html)

Źródło: [w3schools.com](https://www.w3schools.com/jsref/event_onmouseout.asp)

## 2 Zdarzenia klawiatury

- 2-1 onkeydown
- 2-2 onkeypress
- 2-3 onkeyup

### 2-1 onkeydown

Wykonanie kodu JavaScript, gdy użytkownik naciśnie klawisz:
``` HTML
    <input type="text" onkeydown="myFunction()">
```
Przykład: [onkeydown.html](onkeydown.html)

Źródło: [w3schools.com](https://www.w3schools.com/jsref/event_onkeydown.asp)

### 2-2 onkeypress

Wykonanie kodu JavaScript, gdy klawisz jest naciśnięty:
``` HTML
    <input type="text" onkeypress="myFunction()">
```
Przykład: [onkeypress.html](onkeypress.html)

Źródło: [w3schools.com](https://www.w3schools.com/jsref/event_onkeypress.asp)

### 2-3 onkeyup

Wykonanie kodu JavaScript, gdy użytkownik zwolni klawisz:
``` HTML
    <input type="text" onkeyup="myFunction()">
```

Przykład: [onkeyup.html](onkeyup.html)

Źródło: [w3schools.com](https://www.w3schools.com/jsref/event_onkeyup.asp)

## 3 Zdarzenia obiektów

- 3-1 onload
- 3-2 onresize
- 3-3 onfocusin
- 3-4 onfocusout

### 3-1 onload

Wykonanie kodu JavaScript natychmiast po załadowaniu strony:\
``` HTML
    <body onload="myFunction()">
```

Przykład: [onload.html](onload.html)

Źródło: [w3schools.com](https://www.w3schools.com/jsref/event_onload.asp)

### 3-2 onresize

Wykonanie kodu JavaScript, gdy rozmiar okna przeglądarki zostanie zmieniony:
``` HTML
    <body onresize="myFunction()">
```

Przykład: [onresize.html](onresize.html)

Źródło: [w3schools.com](https://www.w3schools.com/jsref/event_onresize.asp)

### 3-3 onfocusin

Wykonanie kodu JavaScript, gdy użytkownik "jest skupiony" na polu "input":
``` HTML
    <input type="text" onfocusin="myFunction()">
```

Przykład: [onfocusin.html](onfocusin.html)

Źródło: [w3schools.com](https://www.w3schools.com/jsref/event_onfocusin.asp)

### 3-4 onfocusout

Wykonanie kodu JavScript, gdy użytkownik "nie jest już skupiony" na polu "input":
``` HTML
    <input type="text" onfocusout="myFunction()">
```

Przykład: [onfocusout.html](onfocusout.html)

Źródło: [w3schools.com](https://www.w3schools.com/jsref/event_onfocusout.asp)

## 4 Metody i pola obiektu string

- 4-1 length
- 4-2 indexOf(text)
- 4-3 search(text)
- 4-4 substr(startIndex, endIndex)
- 4-5 replace(textToReplace, newText)
- 4-6 toUpperCase()
- 4-7 toLowerCase()

### 4-1 Length

Właściwość `length` zwraca długość łańcucha znaków:
``` JavaScript
    var txt = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    var len = txt.length;
```

Przykład: [length.html](length.html)

Źródło: [w3schools.com](https://www.w3schools.com/howto/howto_js_string_length.asp)

### 4-2 indexOf(text)

Zwraca pozycję pierwszego wystąpienia wartości w danym łańcuchu znaków:
``` JavaScript
    var text = "Hello world, welcome to the universe.";
    var result = text.indexOf("welcome");
```

Przykład: [indexof.html](indexof.html)

Metoda `indexOf()`:
- zwraca pozycję pierwszego wystąpienia wartości w łańcuchu.
- zwraca -1, jeśli wartość nie została znaleziona.
- rozróżnia wielkość liter.

Źródło: [w3schools.com](https://www.w3schools.com/jsref/jsref_indexof.asp)

### 4-3 search(text)

Wyszukiwanie słowa:
``` JavaScript
    var text = "Mr. Blue has a blue house";
    var position = text.search("Blue");
```

Przykład: [search.html](search.html)

Metoda `search()`:
- dopasowuje ciąg do wyrażenia regularnego (wzorzec opisujący łańcuch symboli),
- zwraca index (pozycję) pierwszego dopasowania,
- zwraca -1, jeśli nie znaleziono dopasowania,
- rozróżniana jest wielkość liter.

Źródło: [w3schools.com](https://www.w3schools.com/jsref/jsref_search.asp)

### 4-4 substr(startIndex, endIndex)

Wyodrębnienie ciągu znaków z tekstu:
``` JavaScript
    var text = "Hello world!";
    var result = text.substr(1,4);
```

Przykład: [substr.html](substr.html)

Metoda `substr()`:
- wyodrębnia część łańcucha.
- zaczyna się od określonej pozycji i zwraca określoną liczbę znaków.
- nie zmienia oryginalnego łańcucha znaków.
Aby wyodrębnić znaki z końca łańcucha, użyj ujemnej pozycji początkowej.

Źródło: [w3schools.com](https://www.w3schools.com/jsref/jsref_substr.asp)

### 4-5 replace(textToReplace, newText)

Metoda `replace()` szuka podanego ciągu znaków i podmienia go na nowy tekst, zostanie zastąpione tylko pierwsze wystąpienie. Aby zmienić wszystkie wystąpienia, użyj wyrażenia regularnego z modyfikatorem `g`(`/blue/g`).

Zamiana "Microsoft" na "W3Schools":
``` JavaScript
    var text = "Mr Blue has a blue house and a blue car";
    var result = text.replace(/blue/g, "red");
```

Przykład: [replace.html](replace.html)

Metoda `replace()`:
- przeszukuje ciąg w poszukiwaniu wartości lub wyrażenia regularnego.
- zwraca nowy łańcuch z zastąpionymi wartościami.
- nie zmienia oryginalnego ciągu znaków.

Źródło: [w3schools.com](https://www.w3schools.com/jsref/jsref_replace.asp)

### 4-6 toUpperCase()

Zamiana na wielkie litery:
``` JavaScript
    var text = "Hello World!";
    var result = text.toUpperCase();
```

Przykład: [touppercase.html](touppercase.html)

Metoda `toUpperCase()`:
- konwertuje ciąg znaków na wielkie litery.
- nie zmienia oryginalnego ciągu znaków.

Źródło: [w3schools.com](https://www.w3schools.com/jsref/jsref_touppercase.asp)

### 4-7 toLowerCase()

Zamiana na małe litery:
``` JavaScript
    var text = "Hello World!";
    var result = text.toLowerCase();
```

Przykład: [tolowercase.html](tolowercase.html)

Metoda `toLowerCase()`:
- konwertuje łańcuch znaków na małe litery.
- nie zmienia oryginalnego ciągu znaków.

Źródło: [w3schools.com](https://www.w3schools.com/jsref/jsref_tolowercase.asp)
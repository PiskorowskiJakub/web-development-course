# web-development-course

`Jakub Piskorowski on 06/10/2022 wersja: 1.0`

## Temat: Obsługa zdarzeń

Przedstawienie działania funkcji w JavaScript.

Pliki źródłowe: 
- [zdarzenie-1.html](zdarzenie-1.html)
- [zdarzenie-2.html](zdarzenie-2.html)
- [zdarzenie-3.html](zdarzenie-3.html)

---

## Objaśnienie

### Zdarzenia elementów DOM

Elementy DOM dostarczają szereg zdarzeń, które wywoływane są kiedy zachodzi interakcja użytkownika ze stroną. Poniżej lista najważniejszych zdarzeń modelu DOM:
- `onAbort` - wywoływane jest w momencie zaniechania ładowania strony
- `onBlur` - wywoływany jest kiedy element przestaje być aktywny (traci "focus")
- `obDblClick` - zdarzenie podwójnego kliknięcia w obiekt
- `onChange` - wywoływany jest w momencie gdy obiekt zmieni swoją zawartość
- `onClick` - zdarzenie kliknięcia elementu
- `onError` - wywoływany jest kiedy w skrypcie wystąpi błąd
- `onFocus` - wywoływany jest kiedy element staje sie aktywny (uzyskuje "focus", przeciwieństwo ‘onBlur’)
- `onKeyDown` - wywoływany jest w momencie naciśnięcia klawisza klawiatury
- `onKeyUp` - wywoływany jest w momencie puszczenia klawisza klawiatury
- `onLoad` - występuje po załadowaniu elementu
- `onMouseOver` - występuje w momencie najechania na element kursorem myszki
- `onMouseOut` - występuje w momencie opuszczenia przez kursor myszki obiektu
- `onSelect` - wywoływany jest kiedy zawartość obiektu zostanie zaznaczona
- `onSubmit` - występuje w momencie zatwierdzenia formularza
- `onUnload` - wywoływany jest gdy strona zostanie zmieniona (np. kliknięto link i następuje przekierowanie)

### Jak używać zdarzenia onclick w JavaScript

Zdarzenie onclick wykonuje określoną funkcję po kliknięciu przycisku. Może to mieć miejsce, gdy użytkownik przesyła formularz, gdy zmieniasz określoną treść na stronie internetowej i inne tego typu rzeczy.

Umieszczasz funkcję JavaScript, którą chcesz wykonać, wewnątrz tagu `button`.
``` HTML
<button onclick="functionToExecute()">Click</button>
```

Pamiętaj, że atrybut `onclick` to wyłącznie JavaScript. Wartość, jaką przyjmuje, czyli funkcja, którą chcesz wykonać, mówi wszystko, ponieważ jest wywoływana bezpośrednio w otwierającym znaczniku.

W JavaScript wywołujesz funkcję, wywołując jej nazwę, a następnie umieszczasz nawias po identyfikatorze funkcji (nazwie).

### Przykład zastosowania Onclick

Naszym celem jest zmiana koloru tekstu na niebieski po kliknięciu przycisku. Musimy więc dodać atrybut onclick do naszego przycisku, a następnie napisać funkcję JavaScript, aby zmienić kolor.

Musimy więc dokonać niewielkiej zmiany w naszym  kodzie HTML:
``` HTML
<div>
  <p class="name">freeCodeCamp</p>
  <button onclick="changeColor()">Change to Blue</button>
</div>
```

Funkcja, którą chcemy wykonać, to `changeColor()`. Więc musimy napisać to w pliku JavaScript lub w pliku HTML wewnątrz znacznika `<script>`.

Jeśli chcesz napisać swój skrypt w pliku JavaScript, musisz połączyć go w kodzie HTML za pomocą poniższej składni:
``` HTML
<script src="path-to-javascript-file"></script>
```

Jeśli chcesz napisać skrypt w pliku HTML, po prostu umieść go w tagu `script`:
``` HTML
<script type="text/javascript">
  // Your Scripts
</script>
```

Teraz napiszmy naszą funkcję `changeColor()`.

Przede wszystkim musimy wybrać element, którym chcemy manipulować, czyli tekst `freeCodeCamp` wewnątrz tagu `<p>`.

W JavaScript robi się to za pomocą metod DOM `getElementById()`, `getElementsByClassName()` lub `querySelector()`. Następnie przechowujesz wartość w zmiennej.
``` JavaScript
name = document.getElementById(".name");
```

Teraz, gdy mamy wybrany nasz tekst, napiszmy naszą funkcję. W JavaScript podstawowa składnia funkcji wygląda tak:
``` JavaScript
function funcctionName () {
    // What to do
} 
```

Więc napiszmy nasza funkcję:
``` JavaScript
function changeColor() {
    name.style.color = "blue";
}
```

Pamiętając z kodu HTML, że `changeColor()` jest funkcją, którą zamierzamy wykonać. Dlatego nasz identyfikator funkcji (`nazwa`) jest ustawiony na `changeColor`. Jeśli nazwa nie jest skorelowana z tym, co jest w kodzie HTML, to nie zadziała.

W DOM (Document Object Model, odnosi się do całego HTML), aby zmienić wszystko, co odnosi się do stylu, musisz napisać "`style`", następnie kropkę (`.`) po tym następuje to, co chcesz zmienić, na przykład `kolor (color)`, kolor tła, rozmiar czcionki i tak dalej.

Tak więc wewnątrz naszej funkcji pobieramy zmienną `name`, którą zadeklarowaliśmy, aby uzyskać nasz tekst `freeCodeCamp`, a następnie zmieniamy kolor na niebieski.

Kolor naszego tekstu zmienia się na niebieski po każdym kliknięciu przycisku.

Kod źródłowy: [zdarzenie-1.html](zdarzenie-1.html)

Moglibyśmy pójść trochę dalej, zmieniając nasz tekst na więcej kolorów. 
``` HTML
<div>
      <p id="name">freeCodeCamp</p>
      <button onclick="changeColor('blue')" id="blue">Blue</button>
      <button onclick="changeColor('green')" id="green">Green</button>
      <button onclick="changeColor('red')" id="red">Red</button>
</div>
```

Chcemy więc zmienić tekst na niebieski, zielony i pomarańczowy.

Tym razem funkcje onclick w naszym kodzie HTML przyjmują wartości koloru, na który chcemy zmienić tekst. Są to tak zwane parametry w JavaScript. Funkcja, którą napiszemy, również ma swoją własną, którą nazwiemy "color".

Wybierzmy więc nasz tekst freeCodeCamp i napiszmy funkcję zmieniającą jej kolor na niebieski, zielony i czerwony:
``` JavaScript
const name = document.getElementById("name");

function changeColor(color) {
   name.style.color = color;
}
```

Blok kodu w funkcji pobiera zmienną `name` (gdzie zapisaliśmy nasz tekst freeCodeCamp), a następnie ustawia kolor na taki, jaki przekazaliśmy do funkcji `changeColor()` w przyciskach HTML.

Kod źródłowy: [zdarzenie-2.html](zdarzenie-2.html)


Źródło: [pasja-informatyki.pl](https://www.freecodecamp.org/news/html-button-onclick-javascript-click-event-tutorial/)

Oprócz koloru można również zmieniać tekst znajdujący się w danym znaczniku metodą `textContent`. W przypadku poniższego kodu będzie wyświetlany tekst wybranego koloru. Można również podmienić to na sztywną wartość tekstową do wyświetlenia. 
``` JavaScript
document.getElementById("test1").textContent = color;
```

Aby skrypt wiedział w którym znaczniku ma umieścić tekst należy określić id danego elementu w którym chcemy go wstawić.
``` HTML
<p id="test1"> ... </p>
```
Kod źródłowy: [zdarzenie-3.html](zdarzenie-3.html)
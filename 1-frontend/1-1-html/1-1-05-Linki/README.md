# web-development-course

`Jakub Piskorowski on 14/03/2023 wersja: 1.0`

## Temat: Linki i odnośniki w HTML

Dodawanie Linków w różnych formatach.



--- 

## Hiperłącza

Możesz kliknąć łącze i przejść do innego dokumentu. Kiedy przesuniesz kursor myszy nad łącze, strzałka myszy zmieni się w małą dłoń.

**Uwaga:** Link nie musi być tekstem. Linkiem może być obraz lub dowolny inny element HTML!

## Link - składnia

Znacznik `<a>` definiuje hiperłącze i ma następującą składnię:
```HTML
<a href="url">link text</a>
```

Najważniejszym atrybutem elementu `<a>` jest atrybut `href`, który wskazuje miejsce docelowe linku.  
Tekst linku to część, która będzie widoczna dla czytelnika.  
Kliknięcie w tekst linku spowoduje przekierowanie czytelnika pod wskazany adres URL.

Ten przykład pokazuje, jak utworzyć link do strony W3Schools.com:
```HTML
<a href="https://www.w3schools.com/">Visit W3Schools.com!</a>
```

Domyślnie linki będą wyglądać następująco we wszystkich przeglądarkach: 
- Nieodwiedzone łącze jest podkreślone i niebieskie 
- Odwiedzony link jest podkreślony i fioletowy 
- Aktywny link jest podkreślony i czerwony

**Wskazówka:** Linki można oczywiście stylizować za pomocą CSS, aby uzyskać inny wygląd!

## Linki - atrybut target

Domyślnie strona, do której prowadzi link, wyświetli się w bieżącym oknie przeglądarki. Aby to zmienić, musisz określić inny cel dla łącza.  
Atrybut `target` określa, gdzie otworzyć połączony dokument.  
Atrybut `target` może mieć jedną z następujących wartości:
- _self — domyślny. Otwiera dokument w tym samym oknie/karcie, w którym został kliknięty 
- _blank — otwiera dokument w nowym oknie lub nowej karcie 
- _parent — otwiera dokument w ramce nadrzędnej 
- _top — otwiera dokument w pełnej treści okna

**Przykład:**  
Użyj `target="_blank"`, aby otworzyć połączony dokument w nowym oknie lub karcie przeglądarki:
```HTML
<a href="https://www.w3schools.com/" target="_blank">Visit W3Schools!</a>
```

## Bezwzględne adresy URL a względne adresy URL

Oba powyższe przykłady używają bezwzględnego adresu URL (pełnego adresu internetowego) w atrybucie `href`.  
Link lokalny (link do strony w ramach tej samej witryny) jest określony za pomocą względnego adresu URL (bez części `"https://www"`):
``` HTML
<h2>Absolute URLs</h2>
<p><a href="https://www.w3.org/">W3C</a></p>
<p><a href="https://www.google.com/">Google</a></p>

<h2>Relative URLs</h2>
<p><a href="html_images.asp">HTML Images</a></p>
<p><a href="/css/default.asp">CSS Tutorial</a></p>
```

## Użycie obrazka jako łącza

Aby użyć obrazu jako linku, po prostu umieść tag `<img>` wewnątrz tagu `<a>`:
```HTML
<a href="default.asp">
  <img src="smiley.gif" alt="HTML tutorial" style="width:42px;height:42px;">
</a>
```

## Link do adresu e-mail

Użyj `mailto:` wewnątrz atrybutu href, aby utworzyć łącze otwierające program pocztowy użytkownika (aby umożliwić mu wysłanie nowej wiadomości e-mail):
```HTML
<a href="mailto:someone@example.com">Send email</a>
```

## Przycisk jako link

Aby użyć przycisku HTML jako linku, musisz dodać kod JavaScript. JavaScript pozwala określić, co dzieje się w przypadku określonych zdarzeń, takich jak kliknięcie przycisku:
```HTML
<button onclick="document.location='default.asp'">HTML Tutorial</button>
```

## Tytuł linku

Atrybut `title` określa dodatkowe informacje o elemencie. Informacje są najczęściej wyświetlane jako tekst podpowiedzi, gdy wskaźnik myszy przesunie się nad elementem.
```HTML
<a href="https://www.w3schools.com/html/" title="Go to W3Schools HTML section">Visit our HTML Tutorial</a>
```

Źródło: [w3schools.com](https://w3schools.com/html)

--- 

## Zadania

1. Utwórz hiperłącze prowadzące do strony głównej swojej ulubionej witryny internetowej i ustaw atrybut target, aby otworzyć ją w nowym oknie przeglądarki.
2. Utwórz hiperłącze prowadzące do strony swojego ulubionego sklepu internetowego i ustaw obrazek z logo sklepu jako tło dla hiperłącza.
3. Utwórz przycisk "Kup teraz" i użyj go jako hiperłącza prowadzącego do strony sklepu internetowego, na którym sprzedajesz swoje produkty.
4. Utwórz hiperłącze prowadzące do swojego adresu e-mail i ustaw link w taki sposób, aby po kliknięciu na niego otworzył się program pocztowy użytkownika z nową wiadomością e-mail do Ciebie.
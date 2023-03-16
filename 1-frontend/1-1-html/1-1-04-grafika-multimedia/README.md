# web-development-course

`Jakub Piskorowski on 13/03/2023 wersja: 1.0`

## Temat: Grafika i multimedia

Dodawanie multimediów audio i video oraz odtwarzanie plików multimedialnych.

Pliki źródłowe:
- [obrazki-animowane.html](obrazki-animowane.html)
- [video.html](video.html)

--- 

## Składnia wstawiania obrazów HTML 

Znacznik HTML `<img>` służy do osadzania obrazu na stronie.  
Obrazy nie są technicznie wstawiane na stronę internetową. Obrazy są połączone ze stronami internetowymi. Znacznik `<img>` tworzy miejsce na obraz, do którego się odwołuje. Tag `<img>` jest pusty, zawiera tylko atrybuty i nie ma tagu zamykającego. Znacznik `<img>` ma dwa wymagane atrybuty:  
- **src** — określa ścieżkę do obrazu  
- **alt** — określa alternatywny tekst obrazu 
 
Składnia:   
``` HTML
<img src="url" alt="alternatetext">
```

## Atrybut src

Wymagany atrybut `src` określa ścieżkę (URL) do obrazu.  
**Uwaga:** podczas ładowania strony internetowej przeglądarka pobiera obraz z serwera WWW i wstawia go na stronę. Dlatego upewnij się, że obraz faktycznie pozostaje w tym samym miejscu w stosunku do strony internetowej, w przeciwnym razie odwiedzający zobaczą ikonę zepsutego linku. Ikona przerwanego łącza i tekst alternatywny są wyświetlane, jeśli przeglądarka nie może znaleźć obrazu.
``` HTML
<img src="img_chania.jpg" alt="Flowers in Chania">
```

## Atrybut alt

Wymagany atrybut `alt` zapewnia alternatywny tekst dla obrazu, jeśli użytkownik z jakiegoś powodu nie może go wyświetlić (z powodu wolnego połączenia, błędu w atrybucie src lub jeśli użytkownik korzysta z czytnika ekranu). Wartość atrybutu alt powinna opisywać obrazek:
``` HTML
<img src="img_chania.jpg" alt="Flowers in Chania">
```

## Rozmiar obrazu — szerokość i wysokość

Możesz użyć atrybutu `style`, aby określić szerokość i wysokość obrazu.
``` HTML
<img src="img_girl.jpg" alt="Girl in a jacket" style="width:500px;height:600px;">
```

Alternatywnie możesz użyć atrybutów `width` i `height`:
``` HTML
<img src="img_girl.jpg" alt="Girl in a jacket" width="500" height="600">
```

**Uwaga:** Zawsze określaj szerokość i wysokość obrazu. Jeśli szerokość i wysokość nie zostaną określone, strona internetowa może migotać podczas ładowania obrazu.

## Width i Height czy atrybut style?

Atrybuty width, height i style są poprawne w HTML.  
**Sugeruje jednak użycie atrybutu style.** Zapobiega zmianie rozmiaru obrazów w arkuszach stylów:
```HTML
<!DOCTYPE html>
<html>
  <head>
    <style>
      img {
        width: 100%;
      }
    </style>
  </head>
  <body>

    <img src="html5.gif" alt="HTML5 Icon" width="128" height="128">

    <img src="html5.gif" alt="HTML5 Icon" style="width:128px;height:128px;">

  </body>
</html>
```
Plik źródłowy: [obrazki-style.html](obrazki-style.html)

### Obraz w innym folderze

Jeśli masz swoje obrazy w podfolderze, musisz podać nazwę folderu w atrybucie src:
```HTML
<img src="/images/html5.gif" alt="HTML5 Icon" style="width:128px;height:128px;">
```

## Obraz z innego serwera/strony internetowej

Niektóre witryny internetowe wskazują obraz na innym serwerze.  
Aby wskazać obraz na innym serwerze, musisz podać bezwzględny (pełny) adres URL w atrybucie src:
```HTML
<img src="https://www.w3schools.com/images/w3schools_green.jpg" alt="W3Schools.com">
```

## Animowane obrazy

HTML zezwala na animowane GIF-y:
```
<img src="programming.gif" alt="Computer Man" style="width:48px;height:48px;">
```
Kod źródłowy: [obrazki-animowane.html](obrazki-animowane.html)

## Obraz jako link

Aby użyć obrazu jako linku, umieść tag `<img>` wewnątrz tagu `<a>`:
```HTML
<a href="default.asp">
  <img src="smiley.gif" alt="HTML tutorial" style="width:42px;height:42px;">
</a>
```

---

## Element video

Aby wyświetlić wideo w formacie HTML, użyj elementu `<video>`:
```HTML
<video width="320" height="240" controls>
  <source src="mov_bbb.mp4" type="video/mp4">
  <source src="mov_bbb.ogg" type="video/ogg">
Your browser does not support the video tag.
</video>
```
Kod źródłowy: [video.html](video.html)

## Jak to działa

Atrybut `controls` dodaje elementy sterujące wideo, takie jak odtwarzanie, pauza i głośność.  
Dobrym pomysłem jest zawsze uwzględnianie atrybutów `width` i `height`. Jeśli wysokość i szerokość nie są ustawione, strona może migotać podczas ładowania wideo.  
Element `<source>` pozwala określić alternatywne pliki wideo, z których może wybierać przeglądarka. Przeglądarka użyje pierwszego rozpoznanego formatu. Tekst między tagami `<video>` i `</video>` będzie wyświetlany tylko w przeglądarkach, które nie obsługują elementu `<video>`.

## Automatyczne odtwarzanie video

Aby automatycznie uruchomić wideo, użyj atrybutu `autoplay`.
```HTML
<video width="320" height="240" autoplay>
  <source src="mov_bbb.mp4" type="video/mp4">
  <source src="mov_bbb.ogg" type="video/ogg">
Your browser does not support the video tag.
</video>
```

Dodanie wyciszenia po autoodtworzeniu, aby Twoje wideo zaczęło się odtwarzać automatycznie (ale wyciszone):
```HTML
<video width="320" height="240" autoplay muted>
  <source src="mov_bbb.mp4" type="video/mp4">
  <source src="mov_bbb.ogg" type="video/ogg">
Your browser does not support the video tag.
</video>
```

Źródło: [w3schools.com](https://w3schools.com/html)

--- 

## Zadania

1. Stwórz stronę internetową, na której wykorzystasz znacznik "img" do wstawienia obrazka, znacznik "a" do stworzenia linku oraz znacznik "video" do wstawienia filmu.

   - Wstaw obrazek o nazwie "obrazek.jpg" z folderu "images", z użyciem znacznika "img". Dodaj atrybuty "alt" z krótkim opisem obrazka oraz "width" i "height" z rozmiarem obrazka.
   - Stwórz link do strony "http://www.example.com" z tekstem "Przykładowa strona" z użyciem znacznika "a". Ustaw atrybut "target" na "_blank", aby link otwierał się w nowym oknie przeglądarki.
   - Wstaw film o nazwie "film.mp4" z folderu "videos", z użyciem znacznika "video". Dodaj atrybut "controls", aby dodać przyciski do sterowania odtwarzaniem filmu. Ustaw atrybut "autoplay" na "true", aby film automatycznie się odtwarzał.
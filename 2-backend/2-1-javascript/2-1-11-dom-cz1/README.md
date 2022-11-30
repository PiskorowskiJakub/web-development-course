# web-development-course

`Jakub Piskorowski on 13/11/2022 wersja: 1.0`

## Temat: Wybrane pola i metody modelu DOM cz.1

Przedstawienie działania wybranych funkcji i metod modelu DOM

Pliki źródłowe: \
1 Wyszukiwanie elementów
- [document.getElementById(id)](document-getelementbyid.html)
- [document.getElementsByTagName(TagName)](document-getelementbytagname.html)
- [document.getElementsByClassName(ClassName)](document-getelementsbyclassname.html)
- [document.getElementsByName(ElementName)](document-getelementsbyname.html)

2 Zmiana elementow 
- [element.innerHTML](element-innerhtml.html)
- [element.attribute_name](element-atributes.html)
- [element.setAttribute(atrubut, wartosc)](element-setattribute.html)

3 Operacje na elementach dokumentu
- [document.createElement(element)](document-createelement.html)
- [document.appendChild(element)](document-appendchild.html)
- [document.removeChild(element)](document-removechild.html)
- [document.replaceChild(element)](element-replaceChild.html)
- [document.write(text)](document-write.html)

4 Wybrane właściwości obiektu style
- [style.backgroundColor](style-backgroundcolor.html)
- [style.color](style-color.html)
- [style.fontSize](style-fontsize.html)
- [style.display](style-display.html)
- [style.fontWeight](style-fontweight.html)

---

## Spis treści
[1 Wyszukiwanie elementów](#1-wyszukiwanie-elementów) \
&emsp; [1-1 document.getElementById(id)](#1-1-documentgetelementbyidid) \
&emsp; [1-2 document.getElementsByTagName(TagName)](#1-2-document-getelementsbytagnametagname) \
&emsp; [1-3 document getElementsByClassName(ClassName)](#1-3-document-getelementsbyclassnameclassname) \
&emsp; [1-4 document getElementsByName(ElementName)](#1-4-document-getelementsbynameelementname) \
[2 Zmiana elementow](#2-zmiana-elementow) \
&emsp; [2-1 element.innerHTML](#2-1-elementinnerhtml) \
&emsp; [2-2 element.attribute_name](#2-2-elementattribute_name) \
&emsp; [2-3 element.setAttribute(atrubut, wartosc)](#2-3-elementsetattributeatrubut-wartosc) \
[3 Operacje na elementach dokumentu](#3-operacje-na-elementach-dokumentu) \
&emsp; [3-1 document.createElement(element)](#3-1-documentcreateelementelement) \
&emsp; [3-2 document.appendChild(element)](#3-2-documentappendchildelement) \
&emsp; [3-3 document.removeChild(element)](#3-3-documentremovechildelement) \
&emsp; [3-4 ocument.replaceChild(element)](#3-4-ocumentreplacechildelement) \
&emsp; [3-5 document.write(text)](#3-5-documentwritetext) \
[4 Wybrane właściwości obiektu style](#4-wybrane-właściwości-obiektu-style) \
&emsp; [4-1 style.backgroundColor](#4-1-stylebackgroundcolor) \
&emsp; [4-2 style.color](#4-2-stylecolor) \
&emsp; [4-3 style.fontSize](#4-3-stylefontsize) \
&emsp; [4-4 style.display](#4-4-styledisplay) \
&emsp; [4-5 style.fontWeight](#4-5-stylefontweight)

---

## Objaśnienie

## 1 Wyszukiwanie elementów

- document.getElementById(id)
- document.getElementsByTagName(TagName)
- document.getElementsByClassName(ClassName)
- document.getElementsByName(ElementName)

### 1-1 document.getElementById(id)

Pobranie elementu o podanym identyfikatorze:
``` javaScript
document.getElementById("demo");
```

Pobranie elementu i zmiana koloru:
``` JavaScript
const myElement = document.getElementById("demo");
myElement.style.color = "red";
```

Lub po prostu zmiana koloru:
``` javaScript
document.getElementById("demo").style.color = "red";
```
Przykład: [document-getelementbyid.html](document-getelementbyid.html)

Metoda `getElementById()`:
- zwraca element  o określonej wartości, 
- zwraca `null` jeżeli element nie istnieje,
- jest jedną z najpopularniejszych metod w HTML DOM. Jest używana prawie za każdym razem, gdy chcesz odczytać lub edytować element.

Źródło: [w3schools.com](https://www.w3schools.com/jsref/met_document_getelementbyid.asp)

### 1-2 document getElementsByTagName(TagName)

Pobranie wszystkich elementów z nazwą znacznika `li`:
``` JavaScript
const collection = document.getElementsByTagName("li");
```

Pobranie wszystkich elementów w dokumencie:
``` JavaScript
const collection = document.getElementsByTagName("*");
```

Zmiana zawartości pierwszego elementu `<p>` w dokumencie:
``` JavaScript
document.getElementsByTagName("p")[0].innerHTML = "Hello World!";
```
Przykład: [document-getelementbytagname.html](document-getelementbytagname.html)

Metoda `getElementsByTagName()`:
- zwraca kolekcję wszystkich elementów o określonej nazwie znacznika,
- zwraca kolekcję HTML,
- jest tylko do odczytu.

Źródło: [w3schools.com](https://www.w3schools.com/jsref/met_document_getelementsbytagname.asp)

### 1-3 document getElementsByClassName(ClassName)

Pobranie wszystkich elementów z nazwą klasy `class="example"`:
``` JavaScript
const collection = document.getElementsByClassName("example");
```

Pobranie wszystkich elementów z nazwą klasy `"examples"` oraz `"color"`:
``` JavaScript
const collection = document.getElementsByClassName("example color");
```
Przykład: [document-getelementsbyclassname.html](document-getelementsbyclassname.html)

Metoda `getElementsByClassName()`: 
- zwraca kolekcję elementów o określonych nazwach klas,
- zwraca kolekcję HTML,
- jest tylko do odczytu.

Źródło: [w3schools.com](https://www.w3schools.com/jsref/met_document_getelementsbyclassname.asp)

### 1-4 document getElementsByName(ElementName)

Pobranie wszystkich elementów o nazwie `"fname"`:
``` JavaScript
let elements = document.getElementsByName("fname");
```

Liczba elementów o nazwie `name="animal"`:
``` javaScript
let num = document.getElementsByName("animal").length;
```
Przykład: [document-getelementsbyname.html](document-getelementsbyname.html)

Metoda `get ElementsByName()`:
- zwraca kolekcję elementów o określonej nazwie,
- zwraca działającą listę węzłów (NodeList).

NodeList  
`NodeList` to podobna do tablicy kolekcja (lista) węzłów. \
Dostęp do węzłów na liście można uzyskać za pomocą indeksu. Indeksowanie zaczyna się od 0. \
Długość `Property` zwraca liczbę węzłów na liście.

Źródło: [w3schools.com](https://www.w3schools.com/jsref/met_doc_getelementsbyname.asp)

--- 
## 2 Zmiana elementow

- element.innerHTML = "nowa zawartość"
- element.attribute_name = "nowa wartość"
- element.setAttribute(atrubut, wartosc)

### 2-1 element.innerHTML

Uzyskanie zawartości elementu HTML za pomocą `id="myP"`:
``` JavaScript
let html = document.getElementById("myP").innerHTML;
```

Zmiana zawartości elementu HTML za pomocą `id="demo"`:
``` JavaScript
document.getElementById("demo").innerHTML = "I have changed!";
```

Uzyskanie zawartości elementu `<ul>` za pomocą `id="myList"`:
``` JavaScript
let html = document.getElementById("myList").innerHTML;
```

Usunięcie zawartości elementu `<p>` z `id="demo"`:
``` JavaScript
element.innerHTML = "";
```
Przykład: [element-innerhtml.html](element-innerhtml.html)

Źródło: [w3schools.com](https://www.w3schools.com/jsref/prop_html_innerhtml.asp)

### 2-2 element.attribute_name

Uzyskanie nazwy atrybutu elementu `<p>` (indeks 0):
``` JavaScript
let attr = document.getElementById("myBtn").attributes[0].name;
```
Przykład: [element-atributes.html](element-atributes.html)

Źródło: [w3schools.com](https://www.w3schools.com/jsref/prop_attr_name.asp)

### 2-3 element.setAttribute(atrubut, wartosc)

Dodanie atrybutu klasy do elementu:
``` JavaScript
element.setAttribute("class", "democlass");
```

Składnia:
``` text
element.setAttribute(name, value)
```

Przykład: [element-setattribute.html](element-setattribute.html)

Metoda `setAttribute()` ustawia nową wartość atrybutu.  
Jeśli atrybut nie istnieje, jest tworzony jako pierwszy.

Źródło: [w3schools.com](https://www.w3schools.com/jsref/met_element_setattribute.asp)

---

## 3 Operacje na elementach dokumentu

- document.createElement(element)
- document.appendChild(element)
- document.removeChild(element)
- document.replaceChild(element)
- document.write(text)

### 3-1 document.createElement(element)

Utworzenie elementu `<p>` i dołączenie go do dokumentu:
``` JavaScript
    const para = document.createElement("p");
    para.innerText = "This is a paragraph";
    document.body.appendChild(para);
```
Przykład: [document-createelement.html](document-createelement.html)

Źródło: [w3schools.com](https://www.w3schools.com/jsref/met_document_createelement.asp)

### 3-2 document.appendChild(element)

Utworzenie elementu `<p>` i dołączenie go do innego elementu:
``` JavaScript
    const para = document.createElement("p");
    para.innerHTML = "This is a paragraph.";
    document.getElementById("myDIV").appendChild(para);
```
Przykład: [document-appendchild.html](document-appendchild.html)

Źródło: [w3schools.com](https://www.w3schools.com/jsref/met_element_setattribute.asp)

### 3-3 document.removeChild(element)

Usunięcie pierwszego elementu z listy:
``` JavaScript
    const list = document.getElementById("myList");
    list.removeChild(list.firstElementChild);
```

Przed:
``` Text
Coffee
Tea
Milk
```

Po:
``` Text
Tea
Milk
```

Przykład: [document-removechild.html](document-removechild.html)


Jeżeli chcemy usunąć konkretny element z środka listy, podjemy jego index (usunięcie 2 elementu listy):
``` JavaScript
    const list = document.getElementById("myList");

    if(list.hasChildNodes()){
        list.removeChild(list.children[1]);
    }
```

Przykład: [document-removechild-children.html](document-removechild-children.html)

Usunięcie wszystkich elementów z listy:
``` JavaScript
    const list = document.getElementById("myList");

    while(list.hasChildNodes())
        list.removeChild(list.firstChild);
```
Przykład: [document-removechild-all.html](document-removechild-all.html)

Źródło: [w3schools.com](https://www.w3schools.com/jsref/met_node_removechild.asp)

### 3-4 document.replaceChild(element)

Zastąpienie elementu tekstowego w liście `<li>` innym tekstem:
``` JavaScript
const newNode = document.createTextNode("Water");
const element = document.getElementById("myList").children[0];

element.replaceChild(newNode, element.childNodes[0]);
```
Przykład: [element-replaceChild.html](element-replaceChild.html)

Przed:
``` text
Coffee
Tea
Milk
```

Po:
``` text
Water
Tea
Milk
```

Źródło: [w3schools.com](https://www.w3schools.com/jsref/met_node_replacechild.asp)

### 3-5 document.write(text)

Wyświetlenie tekstu bezpośrednio w miejscu wywołania:
``` JavaScript
    document.write("Hello World!");
```

Wyświetlenie znaczników HTML w miejscu wywołania funkcji:
``` JavaScript
    document.write("<h2>Hello World!</h2><p>Have a nice day!</p>");
```
Przykład: [document-write.html](document-write.html)

Źródło: [w3schools.com](https://www.w3schools.com/jsref/met_doc_write.asp)

--- 

## 4 Wybrane właściwości obiektu style

- style.backgroundColor
- style.color
- style.fontSize
- style.display = inline | none
- style.fontWeight "normal | lighter | bold | bolder | value | initial | inherit"

### 4-1 style.backgroundColor

Składnia \
Zwrócenie właściwości `backgroundColor`:
``` JavaScript
    object.style.backgroundColor
```

Ustawienie właściwości `backgroundColor`:
``` JavaScript
object.style.backgroundColor = "color | transparent | initial | inherit"
```

Przykłady

Ustawienie koloru tła dla określonego elementu `<div>`:
``` JavaScript
    document.getElementById("myDiv").style.backgroundColor = "lightblue";
```

Przykład: [style-backgroundcolor.html](style-backgroundcolor.html)

Źródło: [w3schools.com](https://www.w3schools.com/jsref/prop_style_backgroundcolor.asp)

### 4-2 style.color

Ustawienie koloru tekstu dla różnych elementów:
``` JavaScript
    document.getElementById("myH2").style.color = "#ff0000";
    document.getElementById("myP").style.color = "magenta";
    document.getElementById("myP2").style.color = "blue";
    document.getElementById("myDiv").style.color = "lightblue";
```

Przykład: [style-color.html](style-color.html)

Źródło: [w3schools.com](https://www.w3schools.com/jsref/prop_style_color.asp)

### 4-3 style.fontSize

Wartości rozmiaru trzcionki:
- xx-small
- x-small
- small
- medium
- large
- x-large
- xx-large

Ustawienie rozmiaru czcionki elementu na "x-large":
``` JavaScript
    document.getElementById("demo").style.fontSize = "x-large";
```
Przykład: [style-fontsize.html](style-fontsize.html)

Źródło: [w3schools.com](https://www.w3schools.com/jsref/prop_style_fontsize.asp)

### 4-4 style.display

Ustawienie elementu `<div>` aby nie był wyświetlany:
``` JavaScript
document.getElementById("myDIV").style.display = "none";
```

**Definicja i użycie** \
Właściwość `display` ustawia lub zwraca typ wyświetlania elementu. \
Elementy w HTML to głównie elementy `"inline"` lub `"block"`. Element `inline` ma ruchomą treść po lewej i prawej stronie. Element `block` wypełnia całą linię przez co nic nie może być wyświetlane po prawej i lewej stronie. \
Właściwość `display` umożliwia również autorowi pokazanie lub ukrycie elementu. Jest podobny do właściwości `visibility`. Jeśli jednak ustawisz ustawisz `display:none` ukryje cały element, podczas gdy `visibility:hidden` oznacza, że zawartość elementu będzie niewidoczna ale element pozostanie w swoim pierwotnym położeniu i rozmiarze. 

**Przykłady** \
Różnica między właściwością `display` a właściwością `visibility`:
``` JavaScript
function demoDisplay(){
    document.getElementById("myP1").style.display = "none";
}
function demoVisibility(){
    document.getElementById("myP2").style.visibility = "hidden";
}
```
Przykład: [style-display-visibility.html](style-display-visibility.html)

Przełączanie się między ukrywaniem a pokazywaniem elementu:
``` JavaScript
    function myFunction(){
        var x = document.getElementById('myDIV');
        if(x.style.display === 'none'){
            x.style.display = 'block';
        }
        else {
            x.style.display = 'none';
        }
    }
```
Przykład: [style-display.html](style-display.html)

Źródło: [w3schools.com](https://www.w3schools.com/jsref/prop_style_display.asp)

### 4-5 style.fontWeight

Ustawienie grubości czcionki dla danego elementu na "900":
``` JavaScript
    document.getElementById("demo").style.fontWeight = "900";
```

Przykład: [style-fontweight.html](style-fontweight.html)

Wartości właściwości

| Wartość | Opis |
|---|---|
| normal | Czcionka jest normalna. Jest to wartość domyślna |
| lighter | czcionka jest lżejsza |
| bold | Czcionka pogrubiona |
| bolder | Czcionka jest bardziej pogrubiona |
| 100 - 900  |  Definiowanie pogrubienia znaków. 400 to to samo co normalna czcionka a 700 jako pogrubiona |
| initial | Ustawienie wartości na wartość domyślną |
| inherit | Dziedziczy wartość z elementu nadrzędnego |


Źródło: [w3schools.com](https://www.w3schools.com/jsref/prop_style_fontweight.asp)

--- 

## Zadania

1. Stworzyć dwa znaczniki `<p>` o różnym `id` oraz pod każdym znacznikiem `3 przyciski`. Pierwszy przycisk, który będzie zmieniał `kolor tekstu` (pierwszego tekstu na zielony a drugiego na czerwony). Drugi przycisk, który `pogrubi tekst` (oby dwa teksty pogrubione na "bold"). Trzeci przycisk, który `usuwa formatowanie` tekstu nad przyciskiem. 
2. Stworzyć dwa pola `<div>`, w pierwszym zostanie umieszczony tekst "Posiadasz serwerów:". Poniżej w kolejnym znaczniku liczba "0". Pod nim dwa przyciski, jeden do kupowania a drugi do sprzedawania. Po kliknięciu w przycisk "Kup" pobiera wartość z diva, w którym znajduje się liczba, zwiększa ją o jeden a następnie umieszcza w tym samym polu nową, zmodyfikowaną liczbę. W przypadku przycisku z sprzedawaniem proces działania jest podobny z tą różnicą że zmniejszamy liczbę, którą pobraliśmy. 
# web-development-course

`Jakub Piskorowski on 20/02/2023 wersja: 1.0`

## Temat: Tabele i listy

Tworzenie różnego rodzaju list. Tworzenie tabel i formatowanie.

Pliki źródłowe:
- [tabela.html](tabela.html)
- [tabela-laczenie-komorek.html](tabela-laczenie-komorek.html)
- [tabela-colgroup.html](tabela-colgroup.html)
- [lista.html](lista.html)

---

## Definiowanie tabeli

Tabele HTML umożliwiają programistom stron internetowych porządkowanie danych w wierszach i kolumnach.

Tabela w HTML składa się z komórek tabeli umieszczonych w wierszach i kolumnach.
``` HTML
<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
</table>
```
Plik źródłowy: [tabela.html](tabela.html)

Każda komórka tabeli jest zdefiniowana przez znaczniki `<td>` i `</td>`.  
Wszystko pomiędzy `<td>` a `</td>` jest zawartością komórki tabeli.
``` HTML
<table>
  <tr>
    <td>Emil</td>
    <td>Tobias</td>
    <td>Linus</td>
  </tr>
</table>
```
**Uwaga:** Komórka tabeli może zawierać wszelkiego rodzaju elementy HTML: tekst, obrazy, listy, łącza, inne tabele itp.

Każdy wiersz tabeli zaczyna się od `<tr>` i kończy znacznikiem `</tr>`.
Przykład:
``` HTML
<table>
  <tr>
    <td>Emil</td>
    <td>Tobias</td>
    <td>Linus</td>
  </tr>
  <tr>
    <td>16</td>
    <td>14</td>
    <td>10</td>
  </tr>
</table>
```

W tabeli możesz mieć dowolną liczbę wierszy, po prostu upewnij się, że liczba komórek jest taka sama w każdym rzędzie.

## Nagłówki tabeli

Czasami chcesz, aby twoje komórki były komórkami nagłówka tabeli. W takich przypadkach użyj znacznika `<th>` zamiast znacznika `<td>`:
``` HTML
<table>
  <tr>
    <th>Person 1</th>
    <th>Person 2</th>
    <th>Person 3</th>
  </tr>
  <tr>
    <td>Emil</td>
    <td>Tobias</td>
    <td>Linus</td>
  </tr>
  <tr>
    <td>16</td>
    <td>14</td>
    <td>10</td>
  </tr>
</table>
```

Domyślnie tekst w elementach `<th>` jest pogrubiony i wyśrodkowany, ale można to zmienić za pomocą CSS.

## Tabela - Colspan 

Aby rozciągnąć komórki na **wiele kolumn**, użyj atrybutu colspan:
``` HTML
<table>
  <tr>
    <th colspan="2">Name</th>
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>43</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>57</td>
  </tr>
</table>
```
Plik źródłowy: [tabela-laczenie-komorek.html](tabela-laczenie-komorek.html)

## Tabela - Rowspan

Aby rozciągnąć komórkę na **wiele wierszy**, użyj atrybutu rowspan:
``` HTML
<table>
  <tr>
    <th>Name</th>
    <td>Jill</td>
  </tr>
  <tr>
    <th rowspan="2">Phone</th>
    <td>555-1234</td>
  </tr>
  <tr>
    <td>555-8745</td>
</tr>
</table>
```
Plik źródłowy: [tabela-laczenie-komorek.html](tabela-laczenie-komorek.html)

## Tabela - colgroup

Jeśli chcesz nadać styl dwóm pierwszym kolumnom tabeli, użyj elementów `<colgroup>` i `<col>`.  
Element `<colgroup>` powinien być używany jako kontener specyfikacji kolumn.  
Każda grupa jest określona za pomocą elementu `<col>`.  
Atrybut `span` określa, ile kolumn otrzymuje styl.  
Atrybut `style` określa styl nadawany kolumnom.  
Jeśli chcesz stylizować więcej kolumn za pomocą różnych stylów, użyj więcej elementów `<col>` wewnątrz `<colgroup>`:

Przykład:
``` HTML
<table style="width: 100%;">
  <colgroup>
    <col span="2" style="background-color: #D6EEEE">
  </colgroup>
  <tr>
  <th>MON</th>
  <th>TUE</th>
  <th>WED</th>
  <th>THU</th>
  ...
```
Plik źródłowy: [tabela-colgroup.html](tabela-colgroup.html)

## Tagi tabeli

| Tag | Opis |
|---|---|
| `<table>` | Definiuje tabelę |
| `<th>` | Definiuje komórkę nagłówka w tabeli |
| `<tr>` | Definiuje wiersz w tabeli |
| `<td>` | Definiuje komórkę w tabeli |
| `<caption>`| Definiuje podpis tabeli |
| `<colgroup>` | Określa grupę jednej lub więcej kolumn w tabeli do formatowania |
| `<col>` | Określa właściwości kolumny dla każdej kolumny w elemencie `<colgroup>` |
| `<thead>` | Grupuje zawartość nagłówka w tabeli |
| `<tbody>` | Grupuje treść treści w tabeli |
| `<tfoot>` | Grupuje zawartość stopki w tabeli |

---

## Listy

Listy HTML umożliwiają programistom stron internetowych grupowanie zestawu powiązanych elementów na listach.

Nieuporządkowana lista HTML:
- Item
- Item
- Item
- Item

Uporządkowana lista HTML:
1. First item
2. Second item
3. Third item
4. Fourth item

## Nieuporządkowana lista

Nieuporządkowana lista zaczyna się od znacznika `<ul>`. Każdy element listy zaczyna się od znacznika `<li>`. \
Pozycje listy będą domyślnie oznaczone punktorami (małe czarne kółka):
``` HTML
<ul>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>
```

## Uporządkowana lista HTML

Uporządkowana lista zaczyna się od znacznika `<ol>`. Każdy element listy zaczyna się od znacznika `<li>`. \
Pozycje listy będą domyślnie oznaczone numerami:
``` HTML
<ol>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>
```

## Nieuporządkowana lista HTML — wybranie znacznika elementu listy

Właściwość CSS list-style-type służy do definiowania stylu znacznika elementu listy. Może mieć jedną z następujących wartości:
| Wartość | Opis |
|---|---|
| disc | Ustawia znacznik elementu listy na punktor (domyślnie) |
| circle | Ustawia znacznik elementu listy na okrąg |
| square | Ustawia znacznik elementu listy na kwadrat |
| none | Pozycje listy nie zostaną zaznaczone |

Przykład:
``` HTML
<ul style="list-style-type:circle;">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>
```

## Lista opisowa

HTML obsługuje również listy opisów.  
Lista opisów to lista terminów z opisem każdego terminu.  
Znacznik `<dl>` definiuje listę opisów, znacznik `<dt>` określa termin (nazwę), a znacznik `<dd>` opisuje każdy termin.

Przykład:
``` HTML
<dl>
  <dt>Coffee</dt>
  <dd>- black hot drink</dd>
  <dt>Milk</dt>
  <dd>- white cold drink</dd>
</dl>

```
Plik źródłowy: [lista.html](lista.html)

## Lista tagów

| Tag | Opis |
|---|---|
| `<ul>` | Definiuje listę nieuporządkowaną |
| `<ol>` | Definiuje uporządkowaną listę |
| `<li>` | Definiuje element listy |
| `<dl>` | Definiuje listę opisów |
| `<dt>` | Definiuje termin na liście opisów |
| `<dd>` | Opisuje termin na liście opisów |

Źródło: [w3schools.com](https://w3schools.com/html)

--- 

## Zadania

1. Zadanie polega na stworzeniu tabeli w języku HTML z danymi dotyczącymi np. kosztów zakupów w sklepie internetowym. Tabela powinna mieć co najmniej 4 kolumny (Produkt, Cena jednostkowa, Ilość, łączna cena) i 4 wierszy. Każdy wiersz tabeli powinien składać się z co najmniej jednej komórki. Zastosować atrybuty colspan, rowspan oraz colgroup do sformatowania tabeli. 
2. Zadanie polega na stworzeniu  dwóch list w języku HTML, zawierającej co najmniej 5 pozycji. Pierwsza lista powinna byc Nieuporządkowana, natomiast druga uporządkowana oraz powinna zawierać co najmniej jedno zagnieżdżenie.
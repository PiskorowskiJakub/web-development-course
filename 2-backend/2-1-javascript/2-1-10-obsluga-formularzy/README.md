# web-development-course

`Jakub Piskorowski on 06/10/2022 wersja: 1.0`

## Temat: Obsługa formularzy

Przedstawienie działania funkcji w JavaScript.

Pliki źródłowe: 
- [pole-tekst.html](pole-tekst.html)
- [pole-radio.html](pole-radio.html)
- [pole-checkbox.html](pole-checkbox.html)
- [pole-select.html](pole-select.html)

---

## Objaśnienie


### Dostęp do pól formularza

### text

Wybrany element HTML (który posiada ustawiony identyfikator) możemy "uchwycić" do edycji w JavaScript z użyciem metody `document.getElementById()`. Uchwyt pozwala uzyskać łatwy dostęp do wielu atrybutów obiektu, które możemy nie tylko odczytać, ale także odpowiednio zmodyfikować. W przykładzie poniżej uchwycono pole edycyjne o identyfikatorze "pole", po czym odczytano wartość atrybutu `value` (atrybut ten przechowuje napis aktualnie znajdujący się w polu tekstowym):
```HTML
<input type="text" id="pole">
```

``` JavaScript
var napis = document.getElementById("pole").value;
```
Kod źródłowy: [pole-tekst.html](pole-tekst.html)


Źródło: [pasja-informatyki.pl](https://pasja-informatyki.pl/programowanie-webowe/uchwycenie-elementu-w-javascript/)

### radio

Do pól formularza typu `radio` odwołujemy sie poprzez wartość `checked` oraz `value`.
``` HTML
<form>
    <legend>Wybierz</legend>
    <input type="radio" value="A" name="radio"> A
    <input type="radio" value="B" name="radio"> B
    <input type="radio" value="C" name="radio" checked> C
</form>

<button onclick="display()">Wyślij</button>
<p id="test1"> ... </p>
```

``` JavaScript
<script type="text/javascript">
var f = document.getElementsByName('radio');
var v;
for(var i = 0; i < f.length; i++){
    if(f[i].checked){
        v = f[i].value;
    }
}
function display() {;
    document.getElementById("test1").textContent = V;
}
</script>
```
Kod źródłowy: [pole-radio.html](pole-radio.html)

### checkbox

Do pól formularza typu `checkbox` odwołujemy się poprzez wartość `checked` i `value`.
``` HTML
<form>
    <legend>Wybierz</legend>
    <input type="checkbox" value="kos" name="ptaki" /> kos<br>
    <input type="checkbox" value="gil" name="ptaki" /> gil<br>
    <input type="checkbox" value="paw" name="ptaki" /> paw<br>
    <input type="checkbox" value="emu" name="ptaki" /> emu<br>
</form>
```

``` JavaScript
<script type="text/javascript">
function display() {
    var field = document.getElementsByName('ptaki');
    var value1 ='';

    for(var i = 0; i < field.length; i++){
        if(field[i].checked){
            value1 = value1+' '+ field[i].value;
        }
    }

    if (value1=='') value1="Nie dokonałeś żadnego wyboru.";
    
    document.getElementById("test1").textContent = value1;
}
</script>
```
Kod źródłowy: [pole-checkbox.html](pole-checkbox.html)

### select

Do pól formularza typu `select` odwołujemy się poprzez właściwość `value` i `selectedIndex`.

Możemy się odnieść do właściwości `value` pola select, aby odczytać wartość tego pola. Z kolei właściwość `selectedIndex` przechowuje indeks wybranej opcji. Właściwość `length` przechowuje liczbę pozycji do wyboru pola select.
``` HTML
 <form>
    <legend>Wybierz</legend>
    <select id="ssaki">
        <option value="kot">kot</option>
        <option value="jeż">jeż</option>
        <option value="ryś">ryś</option>
        <option value="koń">koń</option>
    </select>
</form>
<button onclick="display()">Wyślij</button><br>
value: <div id="pole1"> ... </div>
selectedIndex: <div id="pole2"> ... </div>
length: <div id="pole3"> ... </div>
```

``` JavaScript
<script type="text/javascript">
    function display() {
        var field = document.getElementById('ssaki');
        
        document.getElementById("pole1").textContent = field.value;
        document.getElementById("pole2").textContent = field.selectedIndex;
        document.getElementById("pole3").textContent = field.length;
    }
</script>
```
Kod źródłowy: [pole-select.html](pole-select.html)


Źródło: [medianauka.pl](https://www.medianauka.pl/formularze-javascript)

---

## Zadania

1. Stworzyć formularz do logowania na stronę posiadający dwa pola, jedno do loginu, drugie do hasła oraz przycisk do wysłania. Następnie wyświetlić Login oraz Hasło.
2. Stworzyć ankietą na dowolną tematykę w której zostaną użyte pola `text`, `radio`, `checkbox` i `select`. Następnie po wysłaniu formularza wyświetlić opcje, które wybrał użytkownik. 
3. Stworzyć formularz do obliczania rat kredytu. Pobrać od użytkownika, jaką kwotę pożycza, na ile miesięcy oraz dać możliwość wpisania oprocentowania. Stworzyć funkcję, która przyjmie jako parametry, kwotę, ilość miesięcy oraz oprocentowanie. Następnie doda ten procent do danej kwoty i podzieli na ilość miesięcy. Funkcja zwróci kwotę do zapłaty co 1 miesiąc. następnie wyświetlić na stronie w znaczniku `<p>` kwotę do zapłaty co miesiąc.

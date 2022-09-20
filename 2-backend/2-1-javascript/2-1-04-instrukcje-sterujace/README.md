# web-development-course

`Jakub Piskorowski on 19/09/2022 wersja: 1.0`

## Temat: Instrukcje sterujące

Przedstawienie działania instrukcji sterujących.

Pliki źródłowe: 
- [if-else.html](if-else.html)
- [switch.html](switch.html)

---

## Objaśnienie

Wyrażenia warunkowe umożliwiają zmianę przebiegu działania programu. Pozwalają one na stawianie pytań dotyczących konkretnych kwestii i podejmowanie działań w zależności od uzyskanych odpowiedzi.

### Instrukcja if

Kod zawarty w tej instrukcji jest wykonywany tylko wówczas, gdy sprawdzenie wyrażenia zwróci wartość `true`. Składnia wielowierszowa instrukcji `if` wymaga ujęcia sekwencji poleceń w nawiasy klamrowe, ale podobnie jak ma to miejsce w PHP, w przypadku pojedynczych poleceń można je pominąć. To oznacza że oby dwie poniższe konstrukcje są prawidłowe:
``` JavaScript
if (a > 100){
    b=2
    document.write("a jest większe od 100")
}

if(b == 10) document.write("b jest równe 10")
```

### Instrukcja else

Jeśli warunek nie zostanie spełniony, program może podjąć alternatywne działania przy użyciu instrukcji `else`:
``` JavaScript
if(a > 100){
    document.write("a jest większe od 100")
}
else{
    document.write("a jest mniejsze lub równe 100")
}
```

W odróżnieniu od PHP w JavaScripcie nie ma instrukcji `elseif`, ale nie stanowi to większego problemu, gdyż konstrukcję elseif można łatwo naśladować poprzez umieszczenie kolejnego warunku `if` po `else`, na przykład:
``` JavaScript
if(a > 100){
    document.write("a jest większe od 100")
}
else if(a < 100){
    document.write("a jest mniejsze od 100")
}
else {
    document.write("a jest równe 100")
}
```
Plik Źródłowy: [if-else.html](if-else.html)

Jak widać, nic nie stoi na przeszkodzie, aby w ramach tak dodanej instrukcji `if` użyć kolejnego słowa kluczowego `else`, po nim zaś można byłoby zdefiniować następny warunek `if` i tak dalej. Wprawdzie w powyższych przykładach zostały użyte nawiasy klamrowe, ale ponieważ między nimi są umieszczone pojedynczo instrukcje, to poprzedni przykład da sie zapisać następująco:
``` JavaScript
    if(a > 100) document.write("a jest większe od 100")
    else if(a < 100) document.write("a jest mniejsze od 100")
    else document.write("a jest równe 100")
```

### Instrukcja switch

Instrukcja switch przydaje sie w sytuacjach, gdy jakaś zmienna lub rezultat pewnego wyrażenia mogą przyjmować różne wartości, a każda z nich powinna wywoływać inną instrukcję.

Jeśli napisalibyśmy przykładowe menu za pomocą konstrukcji `if ... else if ... `, to mógłby wyglądać tak: 
``` JavaScript
if (page == "Home") document.write("Wybrałeś Stronę główną")
else if (page == "About") document.write("Wybrałeś Informacje")
else if (page == "News") document.write("Wybrałeś Aktualności")
else if (page == "Login") document.write("Wybrałeś Logowanie")
else if (page == "Links") document.write("Wybrałeś Odsyłacze")
```

Analogiczny kod napisany za pomocą instrukcji `switch` wyglądałby następująco:

``` JavaScript
switch(page)
{
    case "Home":
        document.write("Wybrałeś Stronę główną")
        break
    case "About":
        document.write("Wybrałeś Informacje")
        break
    case "News":
        document.write("Wybrałeś Aktualności")
        break
    case "Login":
        document.write("Wybrałeś Logowanie")
        break
    case "Links":
        document.write("Wybrałeś Odsyłacze")
        break
}
```

Plik źródłowy: [switch.html](switch.html)

Zmienna `page` pojawia się tylko raz, na początku instrukcji `switch`. Następnie do zweryfikowania warunków jest użyta instrukcja `case`. Jeśli zachodzi zgodność, wykonywana jest instrukcja powiązana z danym warunkiem.

**Przerywanie** \
jak widać w przykładzie powyżej, podobnie jak w PHP, komenda `break` umożliwia przerywanie działania instrukcji `switch` po spełnieniu pierwszego warunku. Pamiętaj o używaniu komendy `break`, chyba że zależy ci na tym, by program kontynuował wykonywanie instrukcji powiązanych z następnym przykładem `case`. 

**Akcja domyślna** \
Jeśli żaden z warunków nie zostanie spełniony, przy użyciu słowa kluczowego `default` można zdefiniować akcję domyślną dla instrukcji `switch`.
``` JavaScript
default:
    document.write("Nierozpoznany wybór")
    break
```

### Operator ?

Operator trzyargumentowy (`?`) w połączeniu ze znakiem `:` umożliwia konstruowanie zwięzłych wyrażeń warunkowych typu `if ... else`. Składnia tego operatora rozpoczyna się od analizowanego wyrażenia, po którym następuje znak `?` oraz kod do wykonania, jeśli wyrażenie zwróci wartość `true`. następnie należy wstawić znak `:` oraz kod do wykonania w sytuacji, gdy wyrażenie zwróci wartość `false`.

``` JavaScript
document.write(
    a <=5 ?
    "a jest mniejsze lub równe 5" :
    "a jest większe od 5"
)
```

na potrzeby tego przykładu instrukcja została rozbita na kilka linii kodu, ale na ogół stosuje się ją w zwięźlejszy sposób, w jednym wierszu:
``` JavaScript
    rozmiar = a <= 5 ? "krotki" : "długi"
```


Źródło: [Książka "PHP, MySQL i JavaScript", Wydawnictwo: Helion](https://helion.pl/ksiazki/php-mysql-i-javascript-wprowadzenie-wydanie-v-robin-nixon,phmyj5.htm#format/e)

<!--
---
## Pytania
1. Jakich znaków można użyć w nazwach zmiennych w JavaScripcie?
2. W jakich sytuacjach należy się posłużyć operatorem `===` (identyczności)?
3. Wymień trzy rodzaje instrukcji warunkowych.
4. do czego służy instrukcja `default` użyta w instrukcji switch?
5. Do czego służy operator `?`.
6. Jak wygląda pełna konstrukcja operatora `?`.

-->
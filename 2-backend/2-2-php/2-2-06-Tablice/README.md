# web-development-course

`Jakub Piskorowski on 23/09/2022 wersja: 1.0`

## Temat: Tablice

Przedstawienie działania tablic w języku PHP.

Pliki źródłowe:
- [tablice-1.php](tablice-1.php)
- [tablice-2.php](tablice-2.php)
- [tablice-foreach-1.php](tablice-foreach-1.php)
- [tablice-foreach-2.php](tablice-foreach-2.php)
- [tablice-list-1.php](tablice-list-1.php)
- [tablice-wielowymiarowe.php](tablice-wielowymarowe.php)

---

## Objaśnienie

W temacie `Zmienne i operatory` zostały pokrótce przedstawione tablice w języku PHP. W tym temacie zostaną przedstawione inne przydatne zastosowania tablic.

### Tablice indeksowane numerycznie

Przypuśćmy że otrzymałeś zadanie utworzenia prostej strony internetowej dla miejscowego sklepu z artykułami biurowymi i aktualnie pracujesz nad działem papierniczym. Jeden ze sposobów na zarządzanie różnymi artykułami dostępnymi w tej kategorii polega na umieszczeniu ich w tablicy indeksowanej numerycznie. Najprościej jest zrobić to tak jak w przykładzie poniżej:
``` PHP
<?php
    $paper[] = "Ksero";
    $paper[] = "Atrament";
    $paper[] = "Laser";
    $paper[] = "Foto";

    print_r($paper);
?>
```

W tym przykładzie za każdym razem, gdy przypisujesz nową wartość do tablicy `$paper`, wartość ta jest umieszczana w pierwszym pustym miejscu tablicy, a wartość wewnętrznego wskaźnika PHP zostaje zwiększona o jeden, tak aby wskazywała następne puste miejsce i przygotowała tablicę do wstawienia kolejnych danych. Funkcja `print_r` umożliwi wyświetlenie zawartości zmiennej, tablicy dla danego obiektu, dzięki czemu będzie można zweryfikować poprawność wypełnienia tablicy danymi. Efekt działania:
``` text
Array ( 
    [0] => Ksero 
    [1] => Atrament 
    [2] => Laser 
    [3] => Foto 
)
```

Kod poprzedniego przykładu można byłoby przepisać w sposób przedstawiony poniżej, w którym położenie każdej pozycji w tablicy jest z góry określone. Ale jak widać to podejście jest bardziej pracochłonne i utrudnia dodawanie i usuwanie produktów z tablicy. Jeśli nie zależy ci na konkretnej kolejności pozycji, na ogół lepiej pozwolić PHP na przyporządkowanie im właściwych numerków.
``` php
    $paper[0] = "Ksero";
    $paper[1] = "Atrament";
    $paper[2] = "Laser";
    $paper[3] = "Foto";

    print_r($paper);
```

Rezultat otrzymany po uruchomieniu obydwu przykładów jest taki sam, ale ponieważ raczej nie będziesz używał funkcji `print_r` do wyświetlania danych na prawdziwej stronie internetowej, zapoznaj się z przykładem poniżej, w którym różne rodzaje papieru są wyświetlane przy użyciu pętli `for`. 
``` PHP
<?php
    $paper[] = "Ksero";
    $paper[] = "Atrament";
    $paper[] = "Laser";
    $paper[] = "Foto";

    for($j =0; $j < 4; ++$j){
        echo "$j: $paper[$j] <br>";
    }
?>
```
Kod źródłowy: [tablice-1.php](tablice-1.php)

Rezultat wykonania powyższego kodu:
``` Text
    0: Ksero
    1: Atrament
    2: Laser
    3: Foto
```

### Tablice asocjacyjne

Śledzenie elementów tablicy na podstawie ich kolejności numerów jest skuteczne, ale może wymagać dodatkowego nakładu pracy w postaci konieczności zapamiętania, jaki numer odpowiada jakiemu produktowi. To podejście może tez utrudnić interpretację kodu innym programistom.

W takim przypadku przychodzą z pomocą tablice asocjacyjne. W takich tablicach można odwoływać się do poszczególnych pozycji nie za pośrednictwem numerków ale nazwy pozycji. Przykład poniżej stanowi rozwinięcie poprzedniego kodu: każdy element w tablicy otrzymuje nazwę i dłuższy opis w postaci łańcucha znaków.
``` PHP
<?php
    $paper['copier'] = "Do kserokopiarek i uniwersalny";
    $paper['inkjet'] = "Do drukarek atramentowych";
    $paper['laser'] = "Do drukarek laserowych";
    $paper['photo'] = "Papier fotograficzny";

    echo $paper['laser'];
?>
```

Zamiast numeru (który nie stanowi żadnej praktycznej informacji, a jedynie służy do umiejscowienia elementu w tablicy) każda pozycja ma teraz unikatową nazwę, za pośrednictwem której można się do niej odwołać. Na przykład tak jak w tym przypadku za pomocą instrukcji `echo`, która wyświetla informację do drukarek laserowych. Nazwy (`copier`, `inkjet` itd.) są określane jako `indeksy` albo `klucze`, zaś pozycje przypisane do nich (takie jak `"Do drukarek laserowych"`) nazywa się `wartościami`. 

### Dodawanie pozycji do tablicy przy użyciu słowa kluczowego array

Dotychczas dane umieszczaliśmy w tablicy pojedynczo. Znacznie szybciej i prościej dodaje się dane do tablic za pomocą słowa kluczowego `array`. Przykład poniżej ilustruje zastosowanie tej metody w odniesieniu do tablicy zwykłej i asocjacyjnej.
``` PHP
<?php
    $p1 = array("Ksero", "Atrament", "Laser", "Foto");

    echo "element p1: ". $p1[2] ."<br>";

    $p2 = array('copier' => "Do kserokopiarek i uniwersalny",
    'inkjet' => "Do drukarek atramentowych",
    'laser' => "Do drukarek laserowych",
    'photo' => "Papier fotograficzny");

echo "element p2: ". $p2['inkjet'] ."<br>";
?>
```
Kod źródłowy: [tablice-2.php](tablice-2.php)

Pierwsza połowa tego kodu powoduje dodanie do tablicy o nazwie `$p1` starych, skróconych opisów produktów. Do tablicy trafiają cztery elementy, zajmują więc one miejsca od 0 do 3. w rezultacie instrukcja `echo` wyświetli następujący tekst:
``` text
    element p1: Laser
```

Druga połowa kodu odpowiada za umieszczenie w tablicy asocjacyjnej `$p2` identyfikatorów oraz dłuższych opisów produktów za pomocą składni `indeks => wartość`. Zastosowanie operatora `=>` jest podobne jak zwykłego operatora przypisania `=`, z tym że polega ono na przypisaniu wartości do `indeksu`, a nie do zmiennej. Indeks jest nierozerwalnie powiązany z tą wartością, chyba że zmienisz ją na inną. W rezultacie instrukcja `echo` wyświetla następujący tekst:
``` text
    element p2: Do drukarek atramentowych
```

Łatwo sprawdzić, że tablice `$p1` i `$p2` są różnych typów: obydwie poniższe instrukcje po dodaniu do kodu poprzedniego przykładu spowodują wyświetlenie błędu `Undefined index` lub `Undefined offset`, gdyż identyfikator odwołujący się do tych tablic jest niepoprawny: 
``` PHP
<?php
    echo $p1['inkjet']; // Błąd: Undefined index
    echo $p2[3]; // Błąd: Undefined offset 
?>
```

### Pętla foreach ... as

Twórcy PHP dołożyli wszelkich starań, by język ten był łatwy w obsłudze. Niezadowoleni z istniejących struktur pętli dodali jeszcze jedną, opracowaną specjalnie z myślą o tablicach: pętlę `foreach ... as`. Za jej pomocą można przejrzeć wszystkie pozycje w tablicy i poddać je dowolnym operacjom.

Proces zaczyna sie od pierwszej pozycji i kończy na ostatniej, nie trzeba więc wiedzieć, ile elementów zawiera tablica. 

``` PHP
<?php
    $paper = array("Ksero", "Atrament", "Laser", "Foto");

    $j = 0;

    foreach($paper as $item){
        echo "$j: $item <br>";
        ++$j;
    }
?>
```
Kod źródłowy: [tablice-foreach-1.php](tablice-foreach-1.php)

Wynik działania programu:
``` text
    0: Ksero
    1: Atrament
    2: Laser
    3: Foto
```

Po napotkaniu instrukcji `foreach` PHP bierze pierwszy element tablicy i umieszcza go w zmiennej, która następuje za słowem kluczowym `as`. Za każdym razem gdy pętla wraca do początku pętli `foreach`, tej samej zmiennej jest przypisywany kolejny element tablicy. W tym przypadku do przypisania czterech kolejnych elementów tablicy `$paper` posłużyła nam zmienna o nazwie `$item`. Po wyczerpaniu pozycji z tablicy działanie pętli kończy się. 

Przyjrzyjmy się teraz działaniu pętli `foreach` w odniesieniu do tablicy asocjacyjnej. 
``` PHP
<?php
    $paper = array('copier' => "Do kserokopiarek i uniwersalny",
        'inkjet' => "Do drukarek atramentowych",
        'laser' => "Do drukarek laserowych",
        'photo' => "Papier fotograficzny");
    
    foreach($paper as $item => $description){
        echo "$item: $description <br>";
    }
?>
```
Kod źródłowy: [tablice-foreach-2.php](tablice-foreach-2.php)

Pamiętaj, że tablice asocjacyjne nie wymagają stosowania indeksów numerycznych, można było więc zrezygnować ze stosowania zmiennej `$j`. Tym razem każda pozycja w tablicy jest przypisywana do pary klucz-wartość w postaci zmiennych `$item` oraz `$description`, na podstawie których są one potem wyświetlane. rezultat działania powyższego kodu jest następujący: 
``` text
copier: Do kserokopiarek i uniwersalny
inkjet: Do drukarek atramentowych
laser: Do drukarek laserowych
photo: Papier fotograficzny
```

Przykład poniżej przedstawia działanie funkcji `list` nieco przystępniej. Najpierw tworzona jest tablica z dwoma elementami `Alicja` i `Robert`, a następnie jest ona przekazywana do funkcji `list`, ta z kolei przypisuje wartości pobrane z tablicy do zmiennych `$a` i `$b`

``` PHP
<?php
    list($a, $b) = array('Alicja', 'Robert');
    echo "a= $a b= $b";
?>
```
Kod źródłowy: [tablice-list-1.php](tablice-list-1.php)

Rezultat działania powyższego kodu:
``` text
a= Alicja b= Robert
```

### Tablice wielowymiarowe 

Idea polega na umieszczeniu całej tablicy w elemencie innej tablicy, tę zaś można umieścić w kolejnej. Trochę tak, jak kolejne matrioszki chowa się jedną w drugiej. 

Przyjrzyjmy się temu w praktyce na podstawie tablicy asocjacyjnej znanej z poprzednich przykładów, tylko trochę rozbudowanej:

``` PHP
<?php
 $products = array(
                'paper' => array(
                    'copier' => "Do kserokopiarek i uniwersalny",
                    'inkjet' => "Do drukarek atramentowych",
                    'laser' => "Do drukarek laserowych",
                    'photo' => "Papier fotograficzny"),
                'pens' => array(
                    'ball' => "Długopisy",
                    'hilite' => "Markery przezroczyste",
                    'marker' => "Markery zwykłe"),
                'misc' => array(
                    'tape' => "Taśmy klejące",
                    'glue' => "Kleje",
                    'clips' => "Spinacze")
                );
            echo "<pre>";
        
            foreach($products as $section => $items)
                foreach($items as $key => $value)
                    echo "$section: \t $key \t ($value)<br>";
            echo "</pre>";    
?>
```
Kod źródłowy: [tablice-wielowymiarowe.php](tablice-wielowymarowe.php)

Ponieważ kod się trochę rozrósł, nazwy niektórych elementów zostały zmienione aby poprawić jego przejrzystość. Na przykład: ponieważ dotychczasowa tablica `$paper` jest teraz tylko pewnym podzbiorem większej tablicy, ta większa ma nazwę `$products`. W tej tablicy znajdują się trzy elementy, `paper`, `pens`, oraz `misc` a każdy z nich zawiera kolejną tablicę z parami `klucz-wartość`.

Po umieszczeniu danych w tablicach zostały zastosowane dwie zagnieżdżone pętle `foreach ... as`, aby wyświetlić znajdujące się w nich pozycje. Zewnętrzna pętla pobiera dane z głównej tablicy, zaś wewnętrzna odwołuje się do par `klucz-wartość` w poszczególnych kategoriach produktów. 

W instrukcji `echo` zostały użyte modyfikatory `\t`, który powoduje wstawianie w teście znaku tabulacji. Choć znak tabulacji są zazwyczaj ignorowane przez przeglądarki, w tym przypadku można było użyć ich do wyrównania listy pozycji dzięki zastosowaniu znaczników `<pre> ... </pre>`. Znaczniki te informują przeglądarkę, że zawarty w nich tekst jest sformatowany, powinien zostać wyświetlony fontem o stałej szerokości znaków, a ponadto **nie można** ignorować w nim białych znaków, takich jak tabulatory czy znaki nowego wiersza. Rezultat działania powyższego kodu wygląda następująco:   

``` text
paper: 	 copier 	 (Do kserokopiarek i uniwersalny)
paper: 	 inkjet 	 (Do drukarek atramentowych)
paper: 	 laser 	 (Do drukarek laserowych)
paper: 	 photo 	 (Papier fotograficzny)
pens: 	 ball 	 (Długopisy)
pens: 	 hilite 	 (Markery przezroczyste)
pens: 	 marker 	 (Markery zwykłe)
misc: 	 tape 	 (Taśmy klejące)
misc: 	 glue 	 (Kleje)
misc: 	 clips 	 (Spinacze)
```

Do każdego elementu tablicy można się odwołać bezpośrednio, korzystając z nawiasów kwadratowych:
``` PHP
    echo $products['misc']['glue'];
```

Ten kod spowoduje wyświetlenie wartości `Kleje`.


Źródło: [Książka "PHP, MySQL i JavaScript", Wydawnictwo: Helion](https://helion.pl/ksiazki/php-mysql-i-javascript-wprowadzenie-wydanie-v-robin-nixon,phmyj5.htm#format/e)

<!--
---

## Pytania 


-->